<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Repository;

use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Model\Order;
use StoreFrontClient\Domain\Model\PaymentToken;

interface OrderRepositoryInterface
{
    /**
     * Creates a sandbox order from the specified cart
     *
     * @param string $cartId The ID of the cart to create an order from
     * @param bool $sandbox Whether to create a sandbox order
     * @throws RepositoryException
     */
    public function createOrderFromCart(string $cartId, bool $sandbox = true): Order;
    
    /**
     * Creates a payment token for the specified order
     *
     * @param string $orderId The ID of the order to create a payment token for
     * @param bool $sandbox Whether to create a sandbox payment token
     * @throws RepositoryException
     */
    public function createPaymentToken(string $orderId, bool $sandbox = true): PaymentToken;
}