<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Model\Currencies;
use StoreFrontClient\Domain\Model\Items;
use StoreFrontClient\Domain\ValueObject\Sku;

interface ClientApplicationService
{
    public function listCurrencies(): Currencies;
    
    public function listItems(): Items;
    
    public function listCarts(): Carts;
    
    public function addItemToCart(string $cartId, Sku $sku, int $quantity = 1): Cart;
}