<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Application\Handler\Command\CreateOrderHandler;

/**
 * @see CreateOrderHandler
 */
final readonly class CreateOrderCommand
{
    public function __construct(
        public string $cartId,
        public bool   $sandbox = true
    )
    {
    }
}