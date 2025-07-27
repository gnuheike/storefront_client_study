<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation\Provider;

use StoreFrontClient\Application\Service\Admin\AdminCurrencyProviderInterface;
use StoreFrontClient\Domain\Model\Currency;
use StoreFrontClient\Domain\Model\LocalizedText;
use StoreFrontClient\Domain\ValueObject\Sku;

class AdminCurrencyProvider implements AdminCurrencyProviderInterface
{
    /**
     * @return Currency[]
     */
    public function provide(): array
    {
        return [
            $this->createGoldCurrency(),
            $this->createDiamondCurrency()
        ];
    }

    private function createGoldCurrency(): Currency
    {
        $sku = new Sku('com.xsolla.currency_gold_' . time());
        $name = LocalizedText::fromArray([
            'en-US' => 'Gold coin',
            'de-DE' => 'Goldmünze'
        ]);
        $description = LocalizedText::fromArray([
            'en-US' => 'The main currency of your kingdom',
            'de-DE' => 'Die Hauptwährung deines Königreichs'
        ]);

        $prices = [
            [
                'amount' => 100,
                'currency' => 'USD',
                'is_enabled' => true,
                'is_default' => true
            ]
        ];

        $attributes = [
            [
                'external_id' => 'material',
                'name' => [
                    'en-US' => 'Material'
                ],
                'values' => [
                    [
                        'external_id' => 'gold',
                        'value' => [
                            'en-US' => 'Gold'
                        ]
                    ]
                ]
            ]
        ];

        $limits = [
            'per_user' => 5,
            'per_item' => 10000
        ];

        $periods = [
            [
                'date_from' => '2020-08-11T10:00:00+03:00',
                'date_until' => '2020-08-11T20:00:00+03:00'
            ]
        ];

        $customAttributes = [
            'purchased' => 0,
            'attr' => 'value'
        ];

        return new Currency(
            $sku,
            $name,
            $description,
            true,
            false,
            1,
            $prices,
            $attributes,
            $limits,
            $periods,
            $customAttributes
        );
    }

    private function createDiamondCurrency(): Currency
    {
        $sku = new Sku('com.xsolla.currency_diamond_' . time());
        $name = LocalizedText::fromArray([
            'en-US' => 'Diamond',
            'de-DE' => 'Diamant'
        ]);
        $description = LocalizedText::fromArray([
            'en-US' => 'Premium currency for special items',
            'de-DE' => 'Premium-Währung für spezielle Gegenstände'
        ]);

        $prices = [
            [
                'amount' => 500,
                'currency' => 'USD',
                'is_enabled' => true,
                'is_default' => true
            ]
        ];

        $attributes = [
            [
                'external_id' => 'material',
                'name' => [
                    'en-US' => 'Material'
                ],
                'values' => [
                    [
                        'external_id' => 'diamond',
                        'value' => [
                            'en-US' => 'Diamond'
                        ]
                    ]
                ]
            ]
        ];

        $limits = [
            'per_user' => 2,
            'per_item' => 5000
        ];

        $periods = [
            [
                'date_from' => '2020-08-11T10:00:00+03:00',
                'date_until' => '2020-08-11T20:00:00+03:00'
            ]
        ];

        $customAttributes = [
            'purchased' => 0,
            'attr' => 'premium'
        ];

        return new Currency(
            $sku,
            $name,
            $description,
            true,
            false,
            2,
            $prices,
            $attributes,
            $limits,
            $periods,
            $customAttributes
        );
    }
}