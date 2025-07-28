<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Application\Handler\Query\GetCurrenciesHandler;
use StoreFrontClient\Application\Handler\Query\GetItemsHandler;
use StoreFrontClient\Application\Query\GetCurrenciesQuery;
use StoreFrontClient\Application\Query\GetItemsQuery;
use StoreFrontClient\Domain\Model\Currencies;
use StoreFrontClient\Domain\Model\Items;

class SimpleClientApplicationService implements ClientApplicationService
{
    public function __construct(
        private readonly GetCurrenciesHandler $getCurrenciesHandler,
        private readonly GetItemsHandler      $getItemsHandler,
    )
    {
    }

    public function listCurrencies(): Currencies
    {
        return $this->getCurrenciesHandler->__invoke(new GetCurrenciesQuery());
    }

    public function listItems(): Items
    {
        return $this->getItemsHandler->__invoke(new GetItemsQuery());
    }
}