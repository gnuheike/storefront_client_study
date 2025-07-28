<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use InvalidArgumentException;

final readonly class Order
{
    /**
     * @param CartItem[] $items
     */
    public function __construct(
        public string $id,
        public array $items,
        public string $status,
        public string $currency = 'USD',
        public bool $isSandbox = false
    ) {
        foreach ($items as $item) {
            if (!$item instanceof CartItem) {
                throw new InvalidArgumentException('All items must be instances of CartItem');
            }
        }
    }
}