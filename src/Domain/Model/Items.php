<?php

namespace StoreFrontClient\Domain\Model;

use InvalidArgumentException;

final readonly class Items
{
    /**
     * @param Item[] $items
     */
    public function __construct(public array $items)
    {
        foreach ($items as $item) {
            if (!$item instanceof Item) {
                throw new InvalidArgumentException();
            }
        }
    }

    /**
     * @return Item[]
     */
    public function getFreeItems(): array
    {
        return [...array_filter($this->items, fn(Item $item) => $item->isFree)];
    }

    /**
     * @return Item[]
     */
    public function getPaidItems(): array
    {
        return [...array_filter($this->items, fn(Item $item) => !$item->isFree)];
    }

}