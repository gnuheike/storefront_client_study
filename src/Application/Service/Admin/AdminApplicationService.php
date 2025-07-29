<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Service\Admin;


use StoreFrontClient\Domain\Exception\BusinessRuleException;
use StoreFrontClient\Domain\ValueObject\Sku;

interface AdminApplicationService
{
    /**
     * @return Sku[]
     * @throws BusinessRuleException
     */
    public function createCurrencies(AdminCurrencyProviderInterface $currencyProvider): array;

    /**
     * @return Sku[]
     * @throws BusinessRuleException
     */
    public function createItems(AdminItemProviderInterface $adminItemProvider): array;

    public function uploadCodes(AdminCodeProviderInterface $codeProvider): bool;
}