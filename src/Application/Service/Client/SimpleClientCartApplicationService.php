<?php

namespace StoreFrontClient\Application\Service\Client;

use StoreFrontClient\Application\Command\CreateOrderCommand;
use StoreFrontClient\Application\Command\CreatePaymentTokenCommand;
use StoreFrontClient\Application\Command\FillCartWithItemsCommand;
use StoreFrontClient\Application\Handler\Command\CreateOrderHandler;
use StoreFrontClient\Application\Handler\Command\CreatePaymentTokenHandler;
use StoreFrontClient\Application\Handler\Command\FillCartWithItemsHandler;
use StoreFrontClient\Application\Handler\Query\GetCartsHandler;
use StoreFrontClient\Application\Query\GetCartsQuery;
use StoreFrontClient\Domain\Model\Cart;
use StoreFrontClient\Domain\Model\Carts;
use StoreFrontClient\Domain\Model\Order;
use StoreFrontClient\Domain\Model\PaymentToken;

readonly class SimpleClientCartApplicationService implements ClientCartApplicationService
{
    public function __construct(
        private GetCartsHandler            $getCartsHandler,
        private FillCartWithItemsHandler   $fillCartWithItemsHandler,
        private CreateOrderHandler         $createOrderHandler,
        private CreatePaymentTokenHandler  $createPaymentTokenHandler,
    )
    {
    }

    public function listCarts(): Carts
    {
        return $this->getCartsHandler->__invoke(new GetCartsQuery());
    }

    public function fillCartWithItems(string $cartId, array $sku): Cart
    {
        return $this->fillCartWithItemsHandler->__invoke(new FillCartWithItemsCommand($cartId, $sku));
    }
    
    public function createOrder(string $cartId, bool $sandbox = true): Order
    {
        return $this->createOrderHandler->__invoke(new CreateOrderCommand($cartId, $sandbox));
    }
    
    public function createPaymentToken(string $orderId, bool $sandbox = true): PaymentToken
    {
        return $this->createPaymentTokenHandler->__invoke(new CreatePaymentTokenCommand($orderId, $sandbox));
    }
}