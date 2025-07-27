<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;

enum ItemType: string
{
    case VIRTUAL_GOODS = 'virtual_goods';
    case VIRTUAL_CURRENCY = 'virtual_currency';
    case GAME = 'game';
}
