<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Domain\Model\Currencies;
use StoreFrontClient\Domain\Model\Items;

interface ClientApplicationService
{
    public function listCurrencies(): Currencies;
    
    public function listItems(): Items;
}