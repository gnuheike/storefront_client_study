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
     * Get all carts for the current user
     * @return Carts
     * @throws RepositoryException
     */
    public function findAll(): Carts;

    /**
     * Get a cart by its ID
     * @param string $id
     * @return Cart|null
     * @throws RepositoryException
     */
    public function findById(string $id): ?Cart;

    /**
     * Add an item to a cart
     * @param string $cartId
     * @param Sku $sku
     * @param int $quantity
     * @return Cart
     * @throws RepositoryException
     */
    public function addItem(string $cartId, Sku $sku, int $quantity): Cart;
}