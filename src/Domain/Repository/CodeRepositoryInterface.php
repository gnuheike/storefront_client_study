<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Repository;

use StoreFrontClient\Domain\ValueObject\Sku;

interface CodeRepositoryInterface
{
    public function uploadCodesBySk(Sku $sku, string $filePath): bool;
}