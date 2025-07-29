<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Query;

final readonly class GetItemBySkuQuery
{
    public function __construct(
        public string $sku,
        public string $locale = 'en'
    )
    {
    }
}