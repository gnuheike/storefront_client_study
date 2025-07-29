<?php

namespace StoreFrontClient\Application\Handler\Query;

use StoreFrontClient\Application\Query\GetCartsQuery;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;

readonly class GetCartsHandler
{
    public function __construct(
        private CartRepositoryInterface $cartRepository
    )
    {
    }

    public function __invoke(GetCartsQuery $query): Carts
    {
        return $this->cartRepository->findAll();
    }
}