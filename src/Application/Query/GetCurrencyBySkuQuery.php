<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Query;

final readonly class GetCurrencyBySkuQuery
{
    public function __construct(
        public string $sku
    )
    {
    }
}