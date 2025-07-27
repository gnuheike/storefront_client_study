<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use StoreFrontClient\Domain\ValueObject\ItemType;
use StoreFrontClient\Domain\ValueObject\Money;
use StoreFrontClient\Domain\ValueObject\Sku;

final readonly class Item
{
    public function __construct(
        public Sku           $sku,
        public LocalizedText $name,
        public LocalizedText $description,
        public Money         $price,
        public ItemType      $type,
        public bool          $isEnabled = true,
        public bool          $isFree = false
    )
    {
    }
}
