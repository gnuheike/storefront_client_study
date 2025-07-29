<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Application\Handler\Command\CreatePaymentTokenHandler;

/**
 * @see CreatePaymentTokenHandler
 */
final readonly class CreatePaymentTokenCommand
{
    public function __construct(
        public string $orderId,
        public bool   $sandbox = true
    )
    {
    }
}