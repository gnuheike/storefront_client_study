<?php

namespace StoreFrontClient\Application\Handler\Query;

use StoreFrontClient\Application\Query\GetCurrenciesQuery;
use StoreFrontClient\Domain\Model\Currencies;
use StoreFrontClient\Domain\Repository\CurrencyRepositoryInterface;

readonly class GetCurrenciesHandler
{
    public function __construct(
        private CurrencyRepositoryInterface $currencyRepository
    )
    {

    }

    public function __invoke(GetCurrenciesQuery $query): Currencies
    {
        return new Currencies($this->currencyRepository->findAll());
    }
}