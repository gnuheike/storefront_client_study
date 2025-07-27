<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation;

use Exception;
use Psr\Log\LoggerInterface;
use StoreFrontClient\Application\Service\Client\ClientApplicationService;
use StoreFrontClient\Domain\Model\Items;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class ClientBehaviorConsoleRunner
{
    public function __construct(
        private ClientApplicationService $clientApplicationService,
        private LoggerInterface          $logger,
        private InputInterface           $input,
        private OutputInterface          $output,
        private QuestionHelper           $questionHelper
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

        return Command::SUCCESS;
    }

    private function listCurrencies(): int
    {
        $this->logger->info('Listing currencies...');
        $this->output->writeln('Listing currencies...');
        try {
            $currencies = $this->clientApplicationService->listCurrencies();
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            $this->output->writeln($e->getMessage());
            return Command::FAILURE;
        }

        // Display currencies as a list (name, how many client have)
        $this->output->writeln('Available currencies:');
        foreach ($currencies->currencies as $currency) {
            $this->output->writeln(sprintf(
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
        $this->output->writeln('Listing items...');
        try {
            $this->logger->info('Calling clientApplicationService->listItems()');
            $items = $this->clientApplicationService->listItems();
            $this->logger->info('Got items: ' . count($items->items));
            $this->logger->info('First item: ' . ($items->items[0]->name->get() ?? 'none'));
        } catch (Exception $e) {
            $this->logger->error('Error in listItems: ' . $e->getMessage());
            $this->output->writeln($e->getMessage());
            return null;
        }

        // Display items as a list (name, SKU, price, type)
        $this->output->writeln('Available items:');
        foreach ($items->items as $item) {
            $this->output->writeln(sprintf(
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

    /**
     * Add a free item and not free to the cart
     * @param Items $items
     * @return void
     */
    private function addItemsToCart(Items $items): void
    {
        $this->logger->info('Getting user cart...');
        $this->output->writeln('Getting user cart...');

        try {
            $carts = $this->clientApplicationService->listCarts();
            if (count($carts->carts) === 0) {
                $this->logger->error('No carts found for the current user');
                $this->output->writeln('No carts found for the current user');
                return;
            }

            // Use the first cart (current)
            $currentCart = $carts->carts[0];
            $this->logger->info('Current cart ID: ' . $currentCart->id);
            $this->output->writeln('Current cart ID: ' . $currentCart->id);

            if (empty($items->getFreeItems())) {
                $this->logger->error('No free items found');
                $this->output->writeln('No free items found');
                return;
            }

            if (empty($items->getPaidItems())) {
                $this->logger->error('No non-free items found');
                $this->output->writeln('No non-free items found');
                return;
            }

            // Add free item to cart
            $freeItem = $items->getFreeItems()[0];
            $nonFreeItem = $items->getPaidItems()[0];

            $this->logger->info('Adding free item to cart: ' . $freeItem->name->get());
            $this->output->writeln('Adding free item to cart: ' . $freeItem->name->get());
            $this->clientApplicationService->addItemToCart($currentCart->id, $freeItem->sku);

            // Add non-free item to cart
            $this->logger->info('Adding non-free item to cart: ' . $nonFreeItem->name->get());
            $this->output->writeln('Adding non-free item to cart: ' . $nonFreeItem->name->get());
            $this->clientApplicationService->addItemToCart($currentCart->id, $nonFreeItem->sku);

            // Get updated cart
            $updatedCarts = $this->clientApplicationService->listCarts();
            $updatedCart = $updatedCarts->carts[0];
            
            // Debug logging
            $this->logger->info('Updated cart ID: ' . $updatedCart->id);
            $this->logger->info('Updated cart items count: ' . (is_array($updatedCart->items) ? count($updatedCart->items) : 'not an array'));
            $this->logger->info('Updated cart items: ' . print_r($updatedCart->items, true));

            // List cart contents
            $this->output->writeln('Cart contents:');
            if (is_array($updatedCart->items) && !empty($updatedCart->items)) {
                foreach ($updatedCart->items as $cartItem) {
                    $this->output->writeln(sprintf(
                        '- %s (SKU: %s, Price: %s %s, Quantity: %d, Free: %s)',
                        $cartItem->name,
                        $cartItem->sku->value,
                        $cartItem->price->amount,
                        $cartItem->price->currency,
                        $cartItem->quantity,
                        $cartItem->isFree ? 'Yes' : 'No'
                    ));
                }
            } else {
                $this->output->writeln('No items in cart');
                $this->logger->error('No items in cart or items is not an array');
            }

        } catch (Exception $e) {
            $this->logger->error('Error in addItemsToCart: ' . $e->getMessage());
            $this->output->writeln($e->getMessage());
        }
    }

}