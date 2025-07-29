<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

final readonly class PaymentToken
{
    public function __construct(
        public string $token,
        public string $orderId
    )
    {
    }
}