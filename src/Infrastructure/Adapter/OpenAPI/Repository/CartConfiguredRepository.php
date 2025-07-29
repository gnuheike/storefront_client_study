<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\CartClientSideApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\CartFillRequest;
use OpenAPI\Client\Model\CartFillRequestItemsInner;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;
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

    public function findAll(): Carts
    {
        try {
            $response = $this->apiInstance->getUserCart($this->projectID);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to get carts', json_decode($e->getResponseBody()));
        }

        $cart = $this->cartMapper->toDomain($response);
        return new Carts([$cart]);
    }

    public function findById(string $id): ?Cart
    {
        try {
            $response = $this->apiInstance->getCartById($this->projectID, $id);
        } catch (ApiException $e) {
            if ($e->getCode() === 404) {
                return null;
            }
            throw new StorefrontApiException('Failed to get cart', $e->getResponseObject());
        }

        return $this->cartMapper->toDomain($response);
    }

    public function fillCartWithItems(string $cartId, array $sku): Cart
    {
        $items = array_reduce(
            $sku,
            static function ($carry, $item) {
                foreach ($carry as $existingItem) {
                    if ($existingItem->getSku() === $item->value) {
                        $existingItem->setQuantity($existingItem->getQuantity() + 1);
                        return $carry;
                    }
                }
                $carry[] = new CartFillRequestItemsInner([
                    'sku' => $item->value,
                    'quantity' => 1
                ]);
                return $carry;
            },
            []
        );


        try {
            $resuest = new CartFillRequest([
                'items' => $items
            ]);

            $response = $this->apiInstance->cartFillById($this->projectID, $cartId, $resuest);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to add item to cart', $e->getResponseObject());
        }

        return $this->cartMapper->toDomain($response);
    }
}