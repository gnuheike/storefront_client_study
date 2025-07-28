<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Repository;

use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\ValueObject\Sku;

interface CartRepositoryInterface
{
    /**
     * @throws RepositoryException
     */
    public function findAll(): Carts;

    /**
     * @throws RepositoryException
     */
    public function findById(string $id): ?Cart;

    /**
     * @param Sku[] $sku
     * @throws RepositoryException
     */
    public function fillCartWithItems(string $cartId, array $sku): Cart;
}