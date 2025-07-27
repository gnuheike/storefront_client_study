<?php

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\AddItemToCartCommand;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;

readonly class AddItemToCartHandler
{
    public function __construct(
        private CartRepositoryInterface $cartRepository
    ) {
    }

    public function __invoke(AddItemToCartCommand $command): Cart
    {
        return $this->cartRepository->addItem(
            $command->cartId,
            $command->sku,
            $command->quantity
        );
    }
}