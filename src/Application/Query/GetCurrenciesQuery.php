<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Query;

use StoreFrontClient\Application\Handler\Query\GetCurrenciesHandler;

/**
 * @see GetCurrenciesHandler
 */
final readonly class GetCurrenciesQuery
{
    public function __construct(
        public ?int $limit = null,
        public ?int $offset = null
    )
    {
    }
}