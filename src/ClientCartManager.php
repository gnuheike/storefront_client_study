<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\CartClientSideApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\CartFillRequest;

class ClientCartManager
{
    public function fillItemsToCart(Configuration $config, Client $client, array $items): void
    {
        $requestModel = new CartFillRequest([
            "items" => $items
        ]);
        $apiInstance = new CartClientSideApi($client, $config);
        $response = $apiInstance->cartFill($config->getUsername(), $requestModel);
        dump($response);
    }

    public function getUserCart(Configuration $config, Client $client)
    {
        $apiInstance = new CartClientSideApi($client, $config);
        $response = $apiInstance->getUserCart($config->getUsername());
        dump($response);
    }
}