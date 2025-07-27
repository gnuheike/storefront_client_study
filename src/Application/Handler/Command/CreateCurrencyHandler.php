<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\CreateCurrencyCommand;
use StoreFrontClient\Domain\Exception\BusinessRuleException;
use StoreFrontClient\Domain\Repository\CurrencyRepositoryInterface;
use StoreFrontClient\Domain\ValueObject\Sku;


final readonly class CreateCurrencyHandler
{

    public function __construct(
        private CurrencyRepositoryInterface $currencyRepository
    )
    {
    }

    /**
     * @throws BusinessRuleException
     */
    public function __invoke(CreateCurrencyCommand $command): Sku
    {
        $existingCurrency = $this->currencyRepository->findBySku($command->currency->sku);
        if ($existingCurrency) {
            throw new BusinessRuleException("Currency with SKU {$command->currency->sku} already exists");
        }

        return $this->currencyRepository->save($command->currency);
    }
}