<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;

use InvalidArgumentException;

final readonly class Money
{
    public function __construct(
        public float  $amount,
        public string $currency
    )
    {
        if ($amount < 0) {
            throw new InvalidArgumentException('Amount cannot be negative');
        }
        if (strlen($currency) !== 3) {
            throw new InvalidArgumentException('Currency must be 3 characters');
        }
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount && $this->currency === $other->currency;
    }
}
