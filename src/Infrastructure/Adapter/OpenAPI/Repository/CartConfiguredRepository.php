<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\CartClientSideApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\CartFillRequest;
use OpenAPI\Client\Model\CartFillRequestItemsInner;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception\StorefrontApiException;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\CartMapper;

readonly class CartConfiguredRepository implements CartRepositoryInterface
{
    private CartClientSideApi $apiInstance;
    private string $projectID;

    public function __construct(
        Configuration      $config,
        Client             $client,
        private CartMapper $cartMapper
    )
    {
        $this->apiInstance = new CartClientSideApi($client, $config);
        $this->projectID = $config->getUsername();
    }

    /**
     * @return Carts
     * @throws RepositoryException
     */
    public function findAll(): Carts
    {
        try {
            $response = $this->apiInstance->getUserCart($this->projectID);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to get carts', $e);
        }

        // The API returns a single cart, but our domain model expects a collection
        $cart = $this->cartMapper->toDomain($response);
        return new Carts([$cart]);
    }

    /**
     * @param string $id
     * @return Cart|null
     * @throws RepositoryException
     */
    public function findById(string $id): ?Cart
    {
        try {
            $response = $this->apiInstance->getCartById($this->projectID, $id);
        } catch (ApiException $e) {
            if ($e->getCode() === 404) {
                return null;
            }
            throw new StorefrontApiException('Failed to get cart', $e);
        }

        return $this->cartMapper->toDomain($response);
    }

    /**
     * @param string $cartId
     * @param Sku $sku
     * @param int $quantity
     * @return Cart
     * @throws RepositoryException
     */
    public function addItem(string $cartId, Sku $sku, int $quantity): Cart
    {
        $item = new CartFillRequestItemsInner();
        $item->setSku($sku->value);
        $item->setQuantity($quantity);

        $request = new CartFillRequest();
        $request->setItems([$item]);

        try {
            $response = $this->apiInstance->cartFillById($this->projectID, $cartId, $request);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to add item to cart', $e);
        }

        return $this->cartMapper->toDomain($response);
    }
}