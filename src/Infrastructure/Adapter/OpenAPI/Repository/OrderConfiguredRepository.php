<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\PaymentClientSideApi;
use OpenAPI\Client\Api\PaymentServerSideApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\AdminCreatePaymentTokenRequest;
use OpenAPI\Client\Model\CartAdminPayment;
use OpenAPI\Client\Model\CartAdminPaymentItemsInner;
use OpenAPI\Client\Model\CartPaymentAdminUserRequestBody;
use OpenAPI\Client\Model\CartPaymentAdminUserRequestBodyCountry;
use OpenAPI\Client\Model\CreateOrderByCartIdRequest;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Order;
use StoreFrontClient\Domain\Model\PaymentToken;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;
use StoreFrontClient\Domain\Repository\OrderRepositoryInterface;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception\StorefrontApiException;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\CartMapper;

readonly class OrderConfiguredRepository implements OrderRepositoryInterface
{
    private PaymentClientSideApi $apiInstance;
    private PaymentServerSideApi $serverApiInstance;
    private string $projectID;

    public function __construct(
        Configuration                   $clientConfig,
        Configuration                   $adminConfig,
        Client                          $client,
        private CartRepositoryInterface $cartRepository,
        private CartMapper              $cartMapper
    )
    {
        $this->apiInstance = new PaymentClientSideApi($client, $clientConfig);
        $this->serverApiInstance = new PaymentServerSideApi($client, $adminConfig);
        $this->projectID = $clientConfig->getUsername();
    }

    /**
     * @throws RepositoryException
     */
    public function createOrderFromCart(string $cartId, bool $sandbox = true): Order
    {
        // First, get the cart to access its items
        $cart = $this->cartRepository->findById($cartId);
        if (!$cart) {
            throw new RepositoryException("Cart with ID {$cartId} not found");
        }

        try {
            $request = new CreateOrderByCartIdRequest();
            $request->setSandbox($sandbox);

            $response = $this->apiInstance->createOrderByCartId($this->projectID, $cartId, $request);

            // Map the response to a domain Order object
            // The API response doesn't include status, so we use a default value
            return new Order(
                (string)$response->getOrderId(),
                $cart->items,
                'created', // Default status since API doesn't provide it
                $cart->currency,
                $sandbox
            );
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to create order', $e->getResponseObject());
        }
    }

    /**
     * @throws RepositoryException
     */
    public function createPaymentToken(string $orderId, bool $sandbox = true): PaymentToken
    {
        try {
            // First, get the order to access its items
            $order = null;

            // Since we don't have a method to get an order by ID, we'll use the cart items
            // from the most recent cart
            $carts = $this->cartRepository->findAll();
            if (count($carts->carts) === 0) {
                throw new RepositoryException("No carts found");
            }

            $cart = $carts->carts[0];

            // Create a request to get a payment token
            $request = new AdminCreatePaymentTokenRequest();
            $request->setSandbox($sandbox);

            // Set user information (using a simple anonymous user)
            $user = new CartPaymentAdminUserRequestBody();
            
            // Create ID object
            $userId = new \OpenAPI\Client\Model\CartPaymentAdminUserRequestBodyId();
            $userId->setValue('user_' . time()); // Generate a unique user ID
            $user->setId($userId);
            
            // Create Email object
            $userEmail = new \OpenAPI\Client\Model\CartPaymentAdminUserRequestBodyEmail();
            $userEmail->setValue('user@example.com');
            $user->setEmail($userEmail);

            // Set the country to US to ensure we get USD as the currency
            $country = new CartPaymentAdminUserRequestBodyCountry();
            $country->setValue('US');
            $user->setCountry($country);

            $request->setUser($user);

            // Create a purchase object with the items from the cart
            $purchase = new CartAdminPayment();

            // Convert cart items to purchase items
            $purchaseItems = [];
            foreach ($cart->items as $cartItem) {
                $purchaseItem = new CartAdminPaymentItemsInner();
                $purchaseItem->setSku($cartItem->sku->value);
                $purchaseItem->setQuantity($cartItem->quantity);
                $purchaseItems[] = $purchaseItem;
            }

            $purchase->setItems($purchaseItems);
            $request->setPurchase($purchase);


            // Call the API to create a payment token
            $response = $this->serverApiInstance->adminCreatePaymentToken($this->projectID, $request);

            // Map the response to a domain PaymentToken object
            return new PaymentToken(
                $response->getToken(),
                (string)$response->getOrderId()
            );
        } catch (ApiException $e) {
            // Log more detailed error information
            error_log('Payment token creation failed: ' . $e->getMessage());
            error_log('Response body: ' . $e->getResponseBody());
            error_log('Response code: ' . $e->getCode());
            
            throw new StorefrontApiException('Failed to create payment token: ' . $e->getMessage(), $e->getResponseObject());
        }
    }
}