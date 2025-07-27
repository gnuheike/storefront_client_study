<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\InlineObject64;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Item;
use StoreFrontClient\Domain\Repository\ItemRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;
use StoreFrontClient\Infrastructure\Adapter\ConfiguredRepository;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception\StorefrontApiException;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\ItemMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\SkuMapper;

readonly class ItemConfiguredRepository implements ItemRepositoryInterface
{
    private VirtualItemsCurrencyAdminApi $apiInstance;
    private string $projectID;

    public function __construct(
        Configuration      $config,
        Client             $client,
        private ItemMapper $itemMapper,
        private SkuMapper  $skuMapper
    )
    {
        $this->apiInstance = new  VirtualItemsCurrencyAdminApi($client, $config);
        $this->projectID = $config->getUsername();
    }

    /**
     * @return Item[]
     */
    public function findAll(?int $limit = null, ?int $offset = null): array
    {
        try {
            $response = $this->apiInstance->adminGetVirtualItemsList($this->projectID);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to get items', $e);
        }

        return array_map(
            fn($item) => $this->itemMapper->toDomain($item),
            $response->getItems()
        );
    }

    public function findBySku(Sku $sku): ?Item
    {
        try {
            $response = $this->apiInstance->adminGetVirtualItem($this->projectID, $sku->value);
        } catch (ApiException $e) {
            if ($e->getCode() === 404) {
                return null;
            }

            throw new StorefrontApiException('Item not found', $e);
        }

        if ($response instanceof InlineObject64) {
            return $this->itemMapper->toDomain($response);
        }

        throw new RepositoryException('Item not found: ' . $response->getErrorMessage());
    }

    /**
     * @throws RepositoryException
     */
    public function save(Item $item): Sku
    {
        $model = $this->itemMapper->toAPI($item);
        try {
            $response = $this->apiInstance->adminCreateVirtualItem($this->projectID, $model);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to save item', $e);
        }

        if ($response instanceof InlineObject64) {
            return $this->skuMapper->toDomain($response);
        }

        throw new RepositoryException('Failed to save item: ' . $response->getErrorMessage());
    }
}