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

    public function createOrderFromCart(string $cartId, bool $sandbox = true): Order
    {
        $cart = $this->cartRepository->findById($cartId);
        if (!$cart) {
            throw new RepositoryException("Cart with ID {$cartId} not found");
        }

        try {
            $request = new CreateOrderByCartIdRequest();
            $request->setSandbox($sandbox);

            $response = $this->apiInstance->createOrderByCartId($this->projectID, $cartId, $request);

            return new Order(
                (string)$response->getOrderId(),
                $cart->items,
                'created',
                $cart->currency,
                $sandbox
            );
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to create order', $e->getResponseObject());
        }
    }

    public function createPaymentToken(string $orderId, bool $sandbox = true): PaymentToken
    {
        try {
            $carts = $this->cartRepository->findAll();
            if (count($carts->carts) === 0) {
                throw new RepositoryException("No carts found");
            }

            $cart = $carts->carts[0];

            $request = new AdminCreatePaymentTokenRequest();
            $request->setSandbox($sandbox);

            $user = new CartPaymentAdminUserRequestBody();

            $userId = new \OpenAPI\Client\Model\CartPaymentAdminUserRequestBodyId();
            $userId->setValue('user_' . time());
            $user->setId($userId);

            $userEmail = new \OpenAPI\Client\Model\CartPaymentAdminUserRequestBodyEmail();
            $userEmail->setValue('user@example.com');
            $user->setEmail($userEmail);

            $country = new CartPaymentAdminUserRequestBodyCountry();
            $country->setValue('US');
            $user->setCountry($country);

            $request->setUser($user);

            $purchase = new CartAdminPayment();

            $purchaseItems = [];
            foreach ($cart->items as $cartItem) {
                $purchaseItem = new CartAdminPaymentItemsInner();
                $purchaseItem->setSku($cartItem->sku->value);
                $purchaseItem->setQuantity($cartItem->quantity);
                $purchaseItems[] = $purchaseItem;
            }

            $purchase->setItems($purchaseItems);
            $request->setPurchase($purchase);

            $response = $this->serverApiInstance->adminCreatePaymentToken($this->projectID, $request);

            return new PaymentToken(
                $response->getToken(),
                (string)$response->getOrderId()
            );
        } catch (ApiException $e) {
            error_log('Payment token creation failed: ' . $e->getMessage());
            error_log('Response body: ' . $e->getResponseBody());
            error_log('Response code: ' . $e->getCode());

            throw new StorefrontApiException('Failed to create payment token: ' . $e->getMessage(), $e->getResponseObject());
        }
    }
}