<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\GameKeysAdminApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\AdminCreateGame201Response;
use OpenAPI\Client\Model\AdminCreateGameRequest;
use OpenAPI\Client\Model\AdminCreateGameRequestUnitItemsInner;

class AdminGameManager
{
    public function createGame(Configuration $config, Client $client): AdminCreateGame201Response
    {
        $model = $this->createGameModel();
        $apiInstance = new GameKeysAdminApi($client, $config);
        $response = $apiInstance->adminCreateGame($config->getUsername(), $model);
        dump($response);
        return $response;
    }


    private function createGameModel(): AdminCreateGameRequest
    {
        $name = "com.xsolla.game" . time();

        $unitItem = new AdminCreateGameRequestUnitItemsInner([
            'sku' => $name . '_unit',
            'name' => [
                'en' => $name . ' Unit'
            ],
            'drm' => 'steam',
            'drm_sku' => 'steam', // Use a standard DRM SKU
            'is_pre_order' => false
        ]);


        $gameData = [
            'sku' => $name,
            'name' => [
                'en' => $name
            ],
            'description' => [
                'en' => 'Game description for ' . $name
            ],
            'is_enabled' => true,
            'is_show_in_store' => true,
            'unit_items' => [$unitItem]
        ];

        return new AdminCreateGameRequest($gameData);
    }
}

