<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\GameKeysAdminApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use SplFileObject;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Repository\CodeRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception\StorefrontApiException;

readonly class CodeConfiguredRepository implements CodeRepositoryInterface
{
    private GameKeysAdminApi $apiInstance;
    private string $projectID;

    public function __construct(
        Configuration $config,
        Client        $client
    )
    {
        $this->apiInstance = new GameKeysAdminApi($client, $config);
        $this->projectID = $config->getUsername();
    }

    public function uploadCodesBySk(Sku $sku, string $filePath): bool
    {
        if (!file_exists($filePath)) {
            throw new RepositoryException("File not found: {$filePath}");
        }

        try {
            $file = new SplFileObject(realpath($filePath), 'r');
            if (!$file->isFile()) {
                throw new RepositoryException("Failed to open file: {$filePath}");
            }

            $response = $this->apiInstance->adminUploadCodesBySku(
                $this->projectID,
                $sku->value,
                $file
            );

            return true;
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to upload codes', $e->getResponseObject(), $e);
        }
    }
}