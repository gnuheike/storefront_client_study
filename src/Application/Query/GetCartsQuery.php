<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Query;

use StoreFrontClient\Application\Handler\Query\GetCartsHandler;

/**
 * @see GetCartsHandler
 */
final readonly class GetCartsQuery
{
    public function __construct(
        public string $locale = 'en',
        public string $currency = 'USD'
    )
    {
    }
}