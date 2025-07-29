<?php

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\CreateOrderCommand;
use StoreFrontClient\Domain\Model\Order;
use StoreFrontClient\Domain\Repository\OrderRepositoryInterface;

readonly class CreateOrderHandler
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    )
    {
    }

    public function __invoke(CreateOrderCommand $command): Order
    {
        return $this->orderRepository->createOrderFromCart(
            $command->cartId,
            $command->sandbox
        );
    }
}