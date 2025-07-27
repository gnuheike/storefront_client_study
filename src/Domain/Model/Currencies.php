<?php

namespace StoreFrontClient\Domain\Model;

use InvalidArgumentException;

final readonly class Currencies
{
    /**
     * @param Currency[] $currencies
     */
    public function __construct(public array $currencies)
    {
        foreach ($currencies as $currency) {
            if (!$currency instanceof Currency) {
                throw new InvalidArgumentException();
            }
        }
    }
}