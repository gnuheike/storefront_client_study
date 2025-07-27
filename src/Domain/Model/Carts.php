<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use InvalidArgumentException;

final readonly class Carts
{
    /**
     * @param Cart[] $carts
     */
    public function __construct(public array $carts)
    {
        foreach ($carts as $cart) {
            if (!$cart instanceof Cart) {
                throw new InvalidArgumentException('All carts must be instances of Cart');
            }
        }
    }
}