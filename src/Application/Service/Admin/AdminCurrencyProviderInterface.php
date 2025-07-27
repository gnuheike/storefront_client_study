<?php

declare(strict_types=1);


namespace StoreFrontClient\Application\Service\Admin;

use StoreFrontClient\Domain\Model\Currency;

interface AdminCurrencyProviderInterface
{
    /**
     * @return Currency[]
     */
    public function provide(): array;
}