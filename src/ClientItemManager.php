<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\VirtualItemsCurrencyItem;
use OpenAPI\Client\Model\VirtualItemsCurrencyItemList;

class ClientItemManager
{
    public function getVirtualItemBySku(
        Configuration $config,
        Client        $client,
        string        $sku,
        string        $locale = 'en'
    ): ?VirtualItemsCurrencyItem
    {
        $itemsList = $this->getVirtualItems($config, $client, null, null, $locale);

        return array_find($itemsList->getItems(), fn($item) => $item->getSku() === $sku);

    }

    public function getVirtualItems(
        Configuration $config,
        Client        $client,
        ?int          $limit = null,
        ?int          $offset = null,
        string        $locale = 'en',
        ?array        $additionalFields = null,
        ?string       $country = null,
        ?string       $promoCode = null,
        int           $showInactiveTimeLimitedItems = 0
    ): VirtualItemsCurrencyItemList
    {
        $apiInstance = new VirtualItemsCurrencyCatalogApi($client, $config);
        return $apiInstance->getVirtualItems(
            $config->getUsername(),
            $limit,
            $offset,
            $locale,
            $additionalFields,
            $country,
            $promoCode,
            $showInactiveTimeLimitedItems
        );
    }
}