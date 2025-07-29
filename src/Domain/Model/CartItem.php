<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use StoreFrontClient\Domain\ValueObject\Money;
use StoreFrontClient\Domain\ValueObject\Sku;

final readonly class CartItem
{
    public function __construct(
        public Sku    $sku,
        public int    $quantity,
        public Money  $price,
        public string $name,
        public bool   $isFree = false
    )
    {
    }
}