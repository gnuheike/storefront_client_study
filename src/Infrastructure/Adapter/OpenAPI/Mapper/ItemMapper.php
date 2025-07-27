<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper;

use OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualItem;
use StoreFrontClient\Domain\Model\Item;
use StoreFrontClient\Domain\Model\LocalizedText;
use StoreFrontClient\Domain\ValueObject\ItemType;
use StoreFrontClient\Domain\ValueObject\Money;
use StoreFrontClient\Domain\ValueObject\Sku;

readonly class ItemMapper
{
    public function toAPI(Item $item): VirtualItemsCurrencyAdminCreateVirtualItem
    {
        $itemData = [
            "sku" => $item->sku->value,
            "name" => $item->name->toArray(),
            "description" => $item->description->toArray(),
            "price" => $item->price->amount,
            "currency" => $item->price->currency,
            "type" => $item->type->value,
            "inventory" => [
                "type" => "infinite",
            ]
        ];

        return new VirtualItemsCurrencyAdminCreateVirtualItem($itemData);
    }

    public function toDomain(VirtualItemsCurrencyAdminVirtualItem $item): Item
    {
        $nameArray = json_decode(json_encode($item->getName()), true);
        $descriptionArray = json_decode(json_encode($item->getDescription()), true);

        // Default values for price data
        $amount = 0;
        $currency = 'USD';

        // Try to get price data from the item
        $prices = $item->getPrices();
        if (!empty($prices) && is_array($prices)) {
            $firstPrice = $prices[0];
            if ($firstPrice->getAmount() !== null) {
                $amount = $firstPrice->getAmount();
            }
            if ($firstPrice->getCurrency() !== null && strlen($firstPrice->getCurrency()) === 3) {
                $currency = $firstPrice->getCurrency();
            }
        }
     
        return new Item(
            new Sku($item->getSku()),
            LocalizedText::fromArray($nameArray),
            LocalizedText::fromArray($descriptionArray),
            new Money($amount, $currency),
            $this->mapItemType($item->getType()),
            $item->getIsEnabled(),
            $item->getIsFree(),
        );
    }

    private function mapItemType(string $type): ItemType
    {
        return match ($type) {
            'virtual_good' => ItemType::VIRTUAL_GOODS,
            'virtual_goods' => ItemType::VIRTUAL_GOODS,
            'virtual_currency' => ItemType::VIRTUAL_CURRENCY,
            'game' => ItemType::GAME,
            default => ItemType::VIRTUAL_GOODS,
        };
    }
}