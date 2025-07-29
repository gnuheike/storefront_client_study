<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Domain\ValueObject\Sku;

final readonly class UploadCodesBySkuCommand
{
    public function __construct(
        public Sku    $sku,
        public string $filePath,
    )
    {
    }
}