<?php

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\CreatePaymentTokenCommand;
use StoreFrontClient\Domain\Model\PaymentToken;
use StoreFrontClient\Domain\Repository\OrderRepositoryInterface;

readonly class CreatePaymentTokenHandler
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    )
    {
    }

    public function __invoke(CreatePaymentTokenCommand $command): PaymentToken
    {
        return $this->orderRepository->createPaymentToken(
            $command->orderId,
            $command->sandbox
        );
    }
}