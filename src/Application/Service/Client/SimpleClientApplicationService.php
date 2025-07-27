<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Application\Command\AddItemToCartCommand;
use StoreFrontClient\Application\Handler\Command\AddItemToCartHandler;
use StoreFrontClient\Application\Handler\Query\GetCartsHandler;
use StoreFrontClient\Application\Handler\Query\GetCurrenciesHandler;
use StoreFrontClient\Application\Handler\Query\GetItemsHandler;
use StoreFrontClient\Application\Query\GetCartsQuery;
use StoreFrontClient\Application\Query\GetCurrenciesQuery;
use StoreFrontClient\Application\Query\GetItemsQuery;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Model\Currencies;
use StoreFrontClient\Domain\Model\Items;
use StoreFrontClient\Domain\ValueObject\Sku;

class SimpleClientApplicationService implements ClientApplicationService
{
    public function __construct(
        private readonly GetCurrenciesHandler $getCurrenciesHandler,
        private readonly GetItemsHandler      $getItemsHandler,
        private readonly GetCartsHandler      $getCartsHandler,
        private readonly AddItemToCartHandler $addItemToCartHandler,
    )
    {
    }

    public function listCurrencies(): Currencies
    {
        return $this->getCurrenciesHandler->__invoke(new GetCurrenciesQuery());
    }

    public function listItems(): Items
    {
        return $this->getItemsHandler->__invoke(new GetItemsQuery());
    }
    
    public function listCarts(): Carts
    {
        return $this->getCartsHandler->__invoke(new GetCartsQuery());
    }
    
    public function addItemToCart(string $cartId, Sku $sku, int $quantity = 1): Cart
    {
        return $this->addItemToCartHandler->__invoke(new AddItemToCartCommand($cartId, $sku, $quantity));
    }
}