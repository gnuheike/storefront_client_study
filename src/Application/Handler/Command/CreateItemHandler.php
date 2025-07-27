<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\CreateItemCommand;
use StoreFrontClient\Domain\Exception\BusinessRuleException;
use StoreFrontClient\Domain\Repository\ItemRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;

final readonly class CreateItemHandler
{
    public function __construct(
        private ItemRepositoryInterface $itemRepository
    )
    {
    }

    /**
     * @throws BusinessRuleException
     */
    public function __invoke(CreateItemCommand $command): Sku
    {
        $existingItem = $this->itemRepository->findBySku($command->item->sku);
        if ($existingItem) {
            throw new BusinessRuleException("Item with SKU {$command->item->sku} already exists");
        }

        return $this->itemRepository->save($command->item);
    }
}