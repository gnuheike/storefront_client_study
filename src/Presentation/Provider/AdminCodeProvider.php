<?php

declare(strict_types=1);

namespace StoreFrontClient\Presentation\Provider;

use StoreFrontClient\Application\Service\Admin\AdminCodeProviderInterface;
use StoreFrontClient\Domain\ValueObject\Sku;

class AdminCodeProvider implements AdminCodeProviderInterface
{
    public function __construct(
        public readonly Sku    $itemSKU,
        public readonly string $filePath
    )
    {
    }

    public function provideItemSku(): Sku
    {
        return $this->itemSKU;
    }

    public function provideFilePath(): string
    {
        return $this->filePath;
    }
}