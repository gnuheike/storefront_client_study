<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Repository;

use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Currency;
use StoreFrontClient\Domain\ValueObject\Sku;

interface CurrencyRepositoryInterface
{
    /**
     * @throws RepositoryException
     */
    public function save(Currency $currency): Sku;

    public function findBySku(Sku $sku): ?Currency;

    /**
     * @return Currency[]
     */
    public function findAll(?int $limit = null, ?int $offset = null): array;
}