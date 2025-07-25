<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\GameKeysAdminApi;
use OpenAPI\Client\Configuration;
use RuntimeException;
use SplFileObject;

class AdminCodeManager
{
    public function uploadCodesById(Configuration $config, Client $client, int $itemId, string $filePath): void
    {
        $file = $this->prepareFile($filePath);
        $apiInstance = new GameKeysAdminApi($client, $config);
        $response = $apiInstance->adminUploadCodesById($config->getUsername(), $itemId, $file);
        dump($response);
    }

    private function prepareFile(string $filePath): SplFileObject
    {
        if (!file_exists($filePath)) {
            throw new RuntimeException("File not found: {$filePath}");
        }

        return new SplFileObject($filePath, 'r');
    }
}
