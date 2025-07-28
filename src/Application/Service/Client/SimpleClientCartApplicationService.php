<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Application\Command\FillCartWithItemsCommand;
use StoreFrontClient\Application\Handler\Command\FillCartWithItemsHandler;
use StoreFrontClient\Application\Handler\Query\GetCartsHandler;
use StoreFrontClient\Application\Query\GetCartsQuery;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;

readonly class SimpleClientCartApplicationService implements ClientCartApplicationService
{
    public function __construct(
        private GetCartsHandler          $getCartsHandler,
        private FillCartWithItemsHandler $fillCartWithItemsHandler,
    )
    {
    }

    public function listCarts(): Carts
    {
        return $this->getCartsHandler->__invoke(new GetCartsQuery());
    }

    public function fillCartWithItems(string $cartId, array $sku): Cart
    {
        return $this->fillCartWithItemsHandler->__invoke(new FillCartWithItemsCommand($cartId, $sku));
    }
}