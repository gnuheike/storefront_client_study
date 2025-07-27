<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Repository;

use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Item;
use StoreFrontClient\Domain\ValueObject\Sku;

interface ItemRepositoryInterface
{
    /**
     * @return Item[]
     */
    public function findAll(?int $limit = null, ?int $offset = null): array;

    public function findBySku(Sku $sku): ?Item;

    /**
     * @throws RepositoryException
     */
    public function save(Item $item): Sku;
}
