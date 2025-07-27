<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use StoreFrontClient\Domain\ValueObject\Sku;

final readonly class Currency
{
    public function __construct(
        public Sku           $sku,
        public LocalizedText $name,
        public LocalizedText $description,
        public bool          $isEnabled = true,
        public bool          $isFree = false,
        public int           $order = 1,
        public array         $prices = [],
        public array         $attributes = [],
        public array         $limits = [],
        public array         $periods = [],
        public array         $customAttributes = [],
        public ?int          $id = null
    )
    {
    }
}
