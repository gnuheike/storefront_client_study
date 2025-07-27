<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper;

use OpenAPI\Client\Model\InlineObject64;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency;
use OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrency;
use StoreFrontClient\Domain\Model\Currency;
use StoreFrontClient\Domain\Model\LocalizedText;
use StoreFrontClient\Domain\ValueObject\Sku;

readonly class CurrencyMapper
{
    public function toAPI(Currency $currency): VirtualItemsCurrencyAdminCreateVirtualCurrency
    {
        $apiCurrency = new VirtualItemsCurrencyAdminCreateVirtualCurrency();
        $apiCurrency->setSku($currency->sku->value);
        $apiCurrency->setName($currency->name->toArray());
        $apiCurrency->setDescription($currency->description->toArray());
        $apiCurrency->setIsEnabled($currency->isEnabled);
        $apiCurrency->setIsFree($currency->isFree);
        $apiCurrency->setOrder($currency->order);
        $apiCurrency->setPrices($currency->prices);
        $apiCurrency->setAttributes($currency->attributes);
        $apiCurrency->setLimits($currency->limits);
        $apiCurrency->setPeriods($currency->periods);
        $apiCurrency->setCustomAttributes($currency->customAttributes);

        return $apiCurrency;
    }

    public function toDomain(VirtualItemsCurrencyAdminVirtualCurrency $currency): Currency
    {
        $nameArray = json_decode(json_encode($currency->getName()), true);
        $descriptionArray = json_decode(json_encode($currency->getDescription()), true);
        $attributesArray = json_decode(json_encode($currency->getAttributes()), true);
        $pricesArray = json_decode(json_encode($currency->getPrices()), true);
        $limitsArray = json_decode(json_encode($currency->getLimits()), true);
        $periodsArray = json_decode(json_encode($currency->getPeriods()), true);
        $customAttributesArray = json_decode(json_encode($currency->getCustomAttributes()), true);
        
        return new Currency(
            new Sku($currency->getSku()),
            LocalizedText::fromArray($nameArray),
            LocalizedText::fromArray($descriptionArray),
            $currency->getIsEnabled(),
            $currency->getIsFree(),
            $currency->getOrder(),
            $pricesArray,
            $attributesArray,
            $limitsArray,
            $periodsArray,
            $customAttributesArray
        );
    }

    public function toSku(InlineObject64 $inlineObject64): Sku
    {
        return new Sku($inlineObject64->getSku());
    }
}