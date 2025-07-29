<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Service\Admin;

use StoreFrontClient\Domain\ValueObject\Sku;

interface AdminCodeProviderInterface
{

    public function provideItemSku(): Sku;


    public function provideFilePath(): string;


}