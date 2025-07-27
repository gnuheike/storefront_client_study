<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Query;


use StoreFrontClient\Application\Handler\Query\GetItemsHandler;

/**
 * @see GetItemsHandler
 */
final readonly class GetItemsQuery
{
    public function __construct(
        public ?int   $limit = null,
        public ?int   $offset = null,
        public string $locale = 'en'
    )
    {
    }
}