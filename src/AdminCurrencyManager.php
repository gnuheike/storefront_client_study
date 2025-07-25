<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency;


class AdminCurrencyManager
{
    public function createCurrency(Configuration $config, Client $client): void
    {
        $model = $this->createCurrencyModel();
        $apiInstance = new VirtualItemsCurrencyAdminApi($client, $config);
        $response = $apiInstance->adminCreateVirtualCurrency($config->getUsername(), $model);
        dump($response);
    }

    private function createCurrencyModel(): VirtualItemsCurrencyAdminCreateVirtualCurrency
    {
        $name = "com.xsolla.currency_" . time();
        return new VirtualItemsCurrencyAdminCreateVirtualCurrency([
            "sku" => $name,
            "name" => [
                "en-US" => "Gold coin",
                "de-DE" => "Goldmünze"
            ],
            "is_enabled" => true,
            "is_free" => false,
            "order" => 1,
            "description" => [
                "en-US" => "The main currency of your kingdom",
                "de-DE" => "Die Hauptwährung deines Königreichs"
            ],
            "prices" => [
                [
                    "amount" => 100,
                    "currency" => "USD",
                    "is_enabled" => true,
                    "is_default" => true
                ]
            ],
            "attributes" => [
                [
                    "external_id" => "material",
                    "name" => [
                        "en-US" => "Material"
                    ],
                    "values" => [
                        [
                            "external_id" => "gold",
                            "value" => [
                                "en-US" => "Gold"
                            ]
                        ]
                    ]
                ]
            ],
            "limits" => [
                "per_user" => 5,
                "per_item" => 10000
            ],
            "periods" => [
                [
                    "date_from" => "2020-08-11T10:00:00+03:00",
                    "date_until" => "2020-08-11T20:00:00+03:00"
                ]
            ],
            "custom_attributes" => [
                "purchased" => 0,
                "attr" => "value"
            ]
        ]);
    }
}

