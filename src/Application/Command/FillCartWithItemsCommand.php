<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Command;

use InvalidArgumentException;
use StoreFrontClient\Application\Handler\Command\FillCartWithItemsHandler;
use StoreFrontClient\Domain\ValueObject\Sku;

/**
 * @see FillCartWithItemsHandler
 */
final readonly class FillCartWithItemsCommand
{
    /**
     * @param Sku[] $sku
     */
    public function __construct(
        public string $cartId,
        public array  $sku
    )
    {
        foreach ($sku as $item) {
            if (!$item instanceof Sku) {
                throw new InvalidArgumentException('All items must be of type Sku');
            }
        }
    }
}