<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper;

use OpenAPI\Client\Model\Cart as ApiCart;
use OpenAPI\Client\Model\CartAdminPaymentItemsInner as ApiCartItem;
use OpenAPI\Client\Model\InlineObject10 as ApiInlineObject10;
use OpenAPI\Client\Model\InlineObject10ItemsInner as ApiInlineObject10Item;
use OpenAPI\Client\Model\InlineObject11 as ApiInlineObject11;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\CartItem;
use StoreFrontClient\Domain\ValueObject\Money;
use StoreFrontClient\Domain\ValueObject\Sku;

readonly class CartMapper
{
    public function toDomain($apiCart): Cart
    {
        if ($apiCart instanceof ApiInlineObject10) {
            return $this->inlineObject10ToDomain($apiCart);
        }

        if ($apiCart instanceof ApiInlineObject11) {
            return $this->inlineObject11ToDomain($apiCart);
        }

        if ($apiCart instanceof ApiCart) {
            $items = [];
            foreach ($apiCart->getItems() as $apiItem) {
                $items[] = $this->itemToDomain($apiItem);
            }

            return new Cart(
                (string)$apiCart->getId(),
                $items,
                $apiCart->getCurrency()
            );
        }

        throw new \InvalidArgumentException('Unsupported cart type: ' . get_class($apiCart));
    }

    private function inlineObject10ToDomain(ApiInlineObject10 $apiCart): Cart
    {
        $items = [];
        if ($apiCart->getItems() !== null) {
            foreach ($apiCart->getItems() as $apiItem) {
                $items[] = $this->inlineObject10ItemToDomain($apiItem);
            }
        }

        // InlineObject10 doesn't have a getCurrency method, so we use a default value
        $currency = 'USD';
        // If price is available, try to get currency from it
        if ($apiCart->getPrice() !== null) {
            $currency = $apiCart->getPrice()->getCurrency() ?? $currency;
        }

        return new Cart(
            (string)$apiCart->getCartId(),
            $items,
            $currency
        );
    }

    private function inlineObject10ItemToDomain(ApiInlineObject10Item $apiItem): CartItem
    {
        $price = new Money(
            (int)($apiItem->getPrice() ? $apiItem->getPrice()->getAmount() : 0),
            $apiItem->getPrice() ? $apiItem->getPrice()->getCurrency() : 'USD'
        );

        $isFree = $apiItem->getPrice() ? $apiItem->getPrice()->getAmount() == 0 : true;

        return new CartItem(
            new Sku($apiItem->getSku()),
            (int)$apiItem->getQuantity(),
            $price,
            $apiItem->getName(),
            $isFree
        );
    }

    private function inlineObject11ToDomain(ApiInlineObject11 $apiCart): Cart
    {
        $items = [];
        if ($apiCart->getItems() !== null) {
            foreach ($apiCart->getItems() as $apiItem) {
                $items[] = $this->inlineObject10ItemToDomain($apiItem);
            }
        }

        // InlineObject11 doesn't have a getCurrency method, so we use a default value
        $currency = 'USD';
        // If price is available, try to get currency from it
        if ($apiCart->getPrice() !== null) {
            $currency = $apiCart->getPrice()->getCurrency() ?? $currency;
        }

        return new Cart(
            (string)$apiCart->getCartId(),
            $items,
            $currency
        );
    }

    private function itemToDomain(ApiCartItem $apiItem): CartItem
    {
        $price = new Money(
            (int)$apiItem->getPrice(),
            $apiItem->getCurrency()
        );

        $isFree = $apiItem->getPrice() == 0;

        return new CartItem(
            new Sku($apiItem->getSku()),
            (int)$apiItem->getQuantity(),
            $price,
            $apiItem->getName(),
            $isFree
        );
    }
}