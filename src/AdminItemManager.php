<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem;


class AdminItemManager
{
    public function createItem(Configuration $config, Client $client): void
    {
        $model = $this->createItemModel();
        $apiInstance = new VirtualItemsCurrencyAdminApi($client, $config);
        $response = $apiInstance->adminCreateVirtualItem($config->getUsername(), $model);
        dump($response);
    }

    private function createItemModel(): VirtualItemsCurrencyAdminCreateVirtualItem
    {
        $name = "com.xsolla.item" . time();
        $itemData = [
            "name" => [
                "en" => $name
            ],
            "sku" => $name,
            "description" => [
                "en" => $name
            ],
            "price" => 100,
            "currency" => "USD",
            "type" => "virtual_goods",
            "inventory" => [
                "type" => "infinite",
            ]
        ];

        return new VirtualItemsCurrencyAdminCreateVirtualItem($itemData);
    }
}
