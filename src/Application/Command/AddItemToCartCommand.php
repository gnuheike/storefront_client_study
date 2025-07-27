<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Application\Handler\Command\AddItemToCartHandler;
use StoreFrontClient\Domain\ValueObject\Sku;

/**
 * @see AddItemToCartHandler
 */
final readonly class AddItemToCartCommand
{
    public function __construct(
        public string $cartId,
        public Sku $sku,
        public int $quantity = 1
    ) {
    }
}