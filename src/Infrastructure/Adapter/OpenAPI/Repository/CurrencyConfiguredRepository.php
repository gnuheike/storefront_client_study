<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\InlineObject64;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrency;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Currency;
use StoreFrontClient\Domain\Repository\CurrencyRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception\StorefrontApiException;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\CurrencyMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\SkuMapper;

readonly class CurrencyConfiguredRepository implements CurrencyRepositoryInterface
{
    private VirtualItemsCurrencyAdminApi $apiInstance;
    private string $projectID;

    public function __construct(
        Configuration          $config,
        Client                 $client,
        private CurrencyMapper $currencyMapper,
        private SkuMapper      $skuMapper
    )
    {
        $this->apiInstance = new VirtualItemsCurrencyAdminApi($client, $config);
        $this->projectID = $config->getUsername();
    }

    /**
     * @return Currency[]
     */
    public function findAll(?int $limit = null, ?int $offset = null): array
    {
        try {
            $response = $this->apiInstance->adminGetVirtualCurrenciesList($this->projectID);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to get currencies', $e->getResponseObject());
        }

        return array_map(
            fn($item) => $this->currencyMapper->toDomain($item),
            $response->getItems()
        );
    }

    public function findBySku(Sku $sku): ?Currency
    {
        try {
            $response = $this->apiInstance->adminGetVirtualCurrency($this->projectID, $sku->value);
        } catch (ApiException $e) {
            if ($e->getCode() === 404) {
                return null;
            }

            throw new StorefrontApiException('Currency not found', $e->getResponseObject());
        }

        if ($response instanceof VirtualItemsCurrencyAdminVirtualCurrency) {
            return $this->currencyMapper->toDomain($response);
        }

        throw new RepositoryException('Currency not found: ' . $response);
    }

    public function save(Currency $currency): Sku
    {
        $model = $this->currencyMapper->toAPI($currency);

        try {
            $response = $this->apiInstance->adminCreateVirtualCurrency($this->projectID, $model);
        } catch (ApiException $e) {
            throw new StorefrontApiException('Failed to save currency', $e->getResponseObject());
        }

        if ($response instanceof InlineObject64) {
            return $this->skuMapper->toDomain($response);
        }

        throw new RepositoryException('Failed to save currency: ' . $response);
    }
}