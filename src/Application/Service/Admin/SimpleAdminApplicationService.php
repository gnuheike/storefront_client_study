<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Service\Admin;

use InvalidArgumentException;
use StoreFrontClient\Application\Command\CreateCurrencyCommand;
use StoreFrontClient\Application\Command\CreateItemCommand;
use StoreFrontClient\Application\Command\UploadCodesBySkuCommand;
use StoreFrontClient\Application\Handler\Command\CreateCurrencyHandler;
use StoreFrontClient\Application\Handler\Command\CreateItemHandler;
use StoreFrontClient\Application\Handler\Command\UploadCodesBySkuHandler;
use StoreFrontClient\Domain\Model\Currency;
use StoreFrontClient\Domain\Model\Item;

final readonly class SimpleAdminApplicationService implements AdminApplicationService
{
    public function __construct(
        private CreateCurrencyHandler   $createCurrencyHandler,
        private CreateItemHandler       $createItemHandler,
        private UploadCodesBySkuHandler $uploadCodesBySkuHandler,
    )
    {
    }

    public function createCurrencies(AdminCurrencyProviderInterface $currencyProvider): array
    {
        $currencies = $currencyProvider->provide();
        foreach ($currencies as $currency) {
            if (!$currency instanceof Currency) {
                throw new InvalidArgumentException('Invalid currency');
            }
        }

        return array_map(
            fn(Currency $currency) => $this->createCurrencyHandler->__invoke(new CreateCurrencyCommand($currency)),
            $currencies
        );
    }

    public function createItems(AdminItemProviderInterface $adminItemProvider): array
    {
        $items = $adminItemProvider->provide();
        foreach ($items as $item) {
            if (!$item instanceof Item) {
                throw new InvalidArgumentException('Invalid item');
            }
        }

        return array_map(
            fn(Item $item) => $this->createItemHandler->__invoke(new CreateItemCommand($item)),
            $items
        );
    }

    public function uploadCodes(AdminCodeProviderInterface $codeProvider): bool
    {
        return $this->uploadCodesBySkuHandler->__invoke(new UploadCodesBySkuCommand(
            $codeProvider->provideItemSku(),
            $codeProvider->provideFilePath()
        ));
    }

}