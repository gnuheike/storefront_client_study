<?php

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\FillCartWithItemsCommand;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;

readonly class FillCartWithItemsHandler
{
    public function __construct(
        private CartRepositoryInterface $cartRepository
    )
    {
    }

    public function __invoke(FillCartWithItemsCommand $command): Cart
    {
        return $this->cartRepository->fillCartWithItems(
            $command->cartId,
            $command->sku
        );
    }
}