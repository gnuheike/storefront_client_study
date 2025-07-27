<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;

use InvalidArgumentException;

final readonly class Sku
{
    public function __construct(public string $value)
    {
        if (empty($value)) {
            throw new InvalidArgumentException('SKU cannot be empty');
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
