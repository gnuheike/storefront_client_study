<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Domain\Model\Item;

final readonly class CreateItemCommand
{
    public function __construct(public Item $item)
    {
    }
}