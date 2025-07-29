<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;

use InvalidArgumentException;

/**
 * Represents an item ID in the system
 */
final readonly class ItemId
{
    /**
     * @param string $value The item ID value
     */
    public function __construct(
        public string $value
    ) {
        if (empty($value)) {
            throw new InvalidArgumentException('Item ID cannot be empty');
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}