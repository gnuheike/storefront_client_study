<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use StoreFrontClient\Domain\Model\Currency;

/**
 * Command to create a new currency.
 */
final readonly class CreateCurrencyCommand
{
    public function __construct(public Currency $currency)
    {
    }
}