<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\PaymentClientSideApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\CreateOrderByCartIdRequest;

class ClientOrderManager
{
    public function createSandboxOrder(Configuration $config, Client $client)
    {
        $requestModel = new CreateOrderByCartIdRequest([
            'sandbox' => true
        ]);
        $apiInstance = new PaymentClientSideApi($client, $config);
        return $apiInstance->createOrder($config->getUsername(), $requestModel);
    }
}