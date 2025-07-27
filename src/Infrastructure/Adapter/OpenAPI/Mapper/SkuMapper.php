<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper;

use OpenAPI\Client\Model\InlineObject64;
use StoreFrontClient\Domain\ValueObject\Sku;

readonly class SkuMapper
{
    public function toDomain(InlineObject64 $inlineObject64): Sku
    {
        return new Sku($inlineObject64->getSku());
    }
}