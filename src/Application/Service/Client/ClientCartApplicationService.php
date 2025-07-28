<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\ValueObject\Sku;

interface ClientCartApplicationService
{
    public function listCarts(): Carts;

    /**
     * @param Sku[] $sku
     */
    public function fillCartWithItems(string $cartId, array $sku): Cart;
}