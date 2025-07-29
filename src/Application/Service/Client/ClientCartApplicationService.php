<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Model\Order;
use StoreFrontClient\Domain\Model\PaymentToken;
use StoreFrontClient\Domain\ValueObject\Sku;

interface ClientCartApplicationService
{
    public function listCarts(): Carts;

    /**
     * @param Sku[] $sku
     */
    public function fillCartWithItems(string $cartId, array $sku): Cart;

    /**
     * Creates a sandbox order from the specified cart
     */
    public function createOrder(string $cartId, bool $sandbox = true): Order;

    /**
     * Creates a payment token for the specified order
     */
    public function createPaymentToken(string $orderId, bool $sandbox = true): PaymentToken;
}