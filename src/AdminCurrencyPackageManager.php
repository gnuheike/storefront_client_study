<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage;


class AdminCurrencyPackageManager
{
    public function createCurrencyPackage(Configuration $config, Client $client): void
    {
        $model = $this->createCurrencyPackageModel();
        $apiInstance = new VirtualItemsCurrencyAdminApi($client, $config);
        $response = $apiInstance->adminCreateVirtualCurrencyPackage($config->getUsername(), $model);
        dump($response);
    }

    private function createCurrencyPackageModel(): VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage
    {
        $packageData = [
            "sku" => "com.xsolla.currency_package_" . time(),
            "name" => [
                "en-US" => "Gold Coin Pack"
            ],
            "is_enabled" => true,
            "is_free" => false,
            "order" => 1,
            "content" => [
                [
                    "sku" => "com.xsolla.coin_1",
                    "amount" => 1000
                ]
            ],
            "prices" => [
                [
                    "amount" => 9.99,
                    "currency" => "USD",
                    "is_enabled" => true,
                    "is_default" => true
                ]
            ]
        ];

        return new VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage($packageData);
    }
}
