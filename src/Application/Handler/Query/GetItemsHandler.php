<?php

namespace StoreFrontClient\Application\Handler\Query;

use StoreFrontClient\Application\Query\GetItemsQuery;
use StoreFrontClient\Domain\Model\Items;
use StoreFrontClient\Domain\Repository\ItemRepositoryInterface;

readonly class GetItemsHandler
{
    public function __construct(
        private ItemRepositoryInterface $itemRepository
    )
    {
    }

    public function __invoke(GetItemsQuery $query): Items
    {
        return new Items($this->itemRepository->findAll($query->limit, $query->offset));
    }
}