<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation;

use Exception;
use Psr\Log\LoggerInterface;
use StoreFrontClient\Application\Service\Client\ClientApplicationService;
use StoreFrontClient\Application\Service\Client\ClientCartApplicationService;
use StoreFrontClient\Domain\Model\Items;
use Symfony\Component\Console\Command\Command;

final readonly class ClientBehaviorConsoleRunner
{
    public function __construct(
        private ClientApplicationService     $clientApplicationService,
        private ClientCartApplicationService $clientCartApplicationService,
        private LoggerInterface              $logger
    )
    {
    }

    /**
     * 1. List currencies and display them as a list (name, how many client have)
     *
     */
    public function run(): int
    {
        if ($this->listCurrencies() !== Command::SUCCESS) {
            return Command::FAILURE;
        }

        $items = $this->listItems();
        if (!$items) {
            return Command::FAILURE;
        }

        $this->addItemsToCart($items);
        $this->createOrder();

        return Command::SUCCESS;
    }

    private function listCurrencies(): int
    {
        $this->logger->info('Listing currencies...');
        try {
            $currencies = $this->clientApplicationService->listCurrencies();
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            return Command::FAILURE;
        }

        // Display currencies as a list (name, how many client have)
        $this->logger->info('Available currencies:');
        foreach ($currencies->currencies as $currency) {
            $this->logger->info(sprintf(
                '- %s (SKU: %s)',
                $currency->name->get(),
                $currency->sku->value
            ));
        }

        return Command::SUCCESS;
    }

    private function listItems(): Items|null
    {
        $this->logger->info('Listing items...');
        try {
            $items = $this->clientApplicationService->listItems();
            $this->logger->info('Got items: ' . count($items->items));
            $this->logger->info('First item: ' . ($items->items[0]->name->get() ?? 'none'));
        } catch (Exception $e) {
            $this->logger->error('Error in listItems: ' . $e->getMessage());
            return null;
        }

        $this->logger->info('Available items:');
        foreach ($items->items as $item) {
            $this->logger->info(sprintf(
                '- %s (SKU: %s, Price: %s %s, Type: %s)',
                $item->name->get(),
                $item->sku->value,
                $item->price->amount,
                $item->price->currency,
                $item->type->value
            ));
        }

        return $items;
    }

    private function addItemsToCart(Items $items): void
    {
        $this->logger->info('Getting user cart...');

        try {
            $carts = $this->clientCartApplicationService->listCarts();
            if (count($carts->carts) === 0) {
                $this->logger->error('No carts found for the current user');
                return;
            }

            // Use the first cart (current)
            $currentCart = $carts->carts[0];
            $this->logger->info('Current cart ID: ' . $currentCart->id);

            if (empty($items->getFreeItems())) {
                $this->logger->error('No free items found');
                return;
            }

            if (empty($items->getPaidItems())) {
                $this->logger->error('No non-free items found');
                return;
            }

            // Add free item to cart
            $itemsToAdd = array_map(
                fn($item) => $item->sku,
                $items->items
            );

            $this->logger->info('Adding items to cart... ');
            $response = $this->clientCartApplicationService->fillCartWithItems($currentCart->id, $itemsToAdd);
            $this->logger->info('Items Count: ' . count($response->items));


            // Get updated cart
            $updatedCarts = $this->clientCartApplicationService->listCarts();
            $updatedCart = $updatedCarts->carts[0];

            // Debug logging
            $this->logger->info('Updated cart ID: ' . $updatedCart->id);
            $this->logger->info('Updated cart items count: ' . count($updatedCart->items));

            // List cart contents
            $this->logger->info('Cart contents:');
            foreach ($updatedCart->items as $cartItem) {
                $this->logger->info(sprintf(
                    '- %s (SKU: %s, Price: %s %s, Quantity: %d, Free: %s)',
                    $cartItem->name,
                    $cartItem->sku->value,
                    $cartItem->price->amount,
                    $cartItem->price->currency,
                    $cartItem->quantity,
                    $cartItem->isFree ? 'Yes' : 'No'
                ));
            }
        } catch (Exception $e) {
            $this->logger->error('Error in addItemsToCart: ' . $e->getMessage());
        }
    }

    private function createOrder(): void
    {
        $this->logger->info('Creating sandbox order...');

        try {
            $carts = $this->clientCartApplicationService->listCarts();
            if (count($carts->carts) === 0) {
                $this->logger->error('No carts found for the current user');
                return;
            }

            // Use the first cart (current)
            $currentCart = $carts->carts[0];
            $this->logger->info('Using cart ID: ' . $currentCart->id);

            // Create a sandbox order
            $order = $this->clientCartApplicationService->createOrder($currentCart->id, true);

            // Display order information
            $this->logger->info('Order created successfully:');
            $this->logger->info(sprintf('- Order ID: %s', $order->id));
            $this->logger->info(sprintf('- Status: %s', $order->status));
            $this->logger->info(sprintf('- Currency: %s', $order->currency));
            $this->logger->info(sprintf('- Sandbox: %s', $order->isSandbox ? 'Yes' : 'No'));
            $this->logger->info(sprintf('- Items count: %d', count($order->items)));

            // Display items in the order
            $this->logger->info('Order items:');
            foreach ($order->items as $item) {
                $this->logger->info(sprintf(
                    '- %s (SKU: %s, Price: %s %s, Quantity: %d, Free: %s)',
                    $item->name,
                    $item->sku->value,
                    $item->price->amount,
                    $item->price->currency,
                    $item->quantity,
                    $item->isFree ? 'Yes' : 'No'
                ));
            }

            // Create a payment token for the order
            $this->logger->info('Creating payment token for the order...');
            $paymentToken = $this->clientCartApplicationService->createPaymentToken($order->id);

            // Display payment token information
            $this->logger->info('Payment token created successfully:');
            $this->logger->info(sprintf('- Token: %s', $paymentToken->token));
            $this->logger->info(sprintf('- Order ID: %s', $paymentToken->orderId));

            $url = 'https://sandbox-secure.xsolla.com/paystation4/payment/credit-card?token=' . $paymentToken->token;
            $this->logger->info(sprintf('- Payment URL: %s', $url));
        } catch (Exception $e) {
            $this->logger->error('Error in createOrder: ' . $e->getMessage());
        }
    }

}