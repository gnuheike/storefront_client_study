<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation\Provider;

use StoreFrontClient\Application\Service\Admin\AdminItemProviderInterface;
use StoreFrontClient\Domain\Model\Item;
use StoreFrontClient\Domain\Model\LocalizedText;
use StoreFrontClient\Domain\ValueObject\ItemType;
use StoreFrontClient\Domain\ValueObject\Money;
use StoreFrontClient\Domain\ValueObject\Sku;

class AdminItemProvider implements AdminItemProviderInterface
{
    /**
     * @return Item[]
     */
    public function provide(): array
    {
        return [
            $this->createItem1(),
            $this->createItem2()
        ];
    }

    private function createItem1(): Item
    {
        $sku = new Sku('com.xsolla.item_transport1_' . time());
        $name = LocalizedText::fromArray([
            'en-US' => 'Transport 1',
            'de-DE' => 'Transport 1'
        ]);
        $description = LocalizedText::fromArray([
            'en-US' => 'A basic transport vehicle',
            'de-DE' => 'Ein einfaches Transportfahrzeug'
        ]);

        $price = new Money(100, 'USD');
        $type = ItemType::VIRTUAL_GOODS;

        return new Item(
            $sku,
            $name,
            $description,
            $price,
            $type
        );
    }

    private function createItem2(): Item
    {
        $sku = new Sku('com.xsolla.item_transport2_' . time());
        $name = LocalizedText::fromArray([
            'en-US' => 'Transport 2',
            'de-DE' => 'Transport 2'
        ]);
        $description = LocalizedText::fromArray([
            'en-US' => 'An advanced transport vehicle',
            'de-DE' => 'Ein fortschrittliches Transportfahrzeug'
        ]);

        $price = new Money(500, 'USD');
        $type = ItemType::VIRTUAL_GOODS;

        return new Item(
            $sku,
            $name,
            $description,
            $price,
            $type
        );
    }
}