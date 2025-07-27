<?php

declare(strict_types=1);


namespace StoreFrontClient\Application\Service\Admin;

use StoreFrontClient\Domain\Model\Item;

interface AdminItemProviderInterface
{
    /**
     * @return Item[]
     */
    public function provide(): array;
}