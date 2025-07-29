<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation;

use Exception;
use Psr\Log\LoggerInterface;
use StoreFrontClient\Application\Service\Admin\AdminApplicationService;
use StoreFrontClient\Application\Service\Admin\AdminCurrencyProviderInterface;
use StoreFrontClient\Application\Service\Admin\AdminItemProviderInterface;
use StoreFrontClient\Domain\Exception\BusinessRuleException;
use StoreFrontClient\Presentation\Provider\AdminCodeProvider;
use Symfony\Component\Console\Command\Command;
use Throwable;

final readonly class AdminBehaviorConsoleRunner
{
    public function __construct(
        private AdminApplicationService        $adminApplicationService,
        private LoggerInterface                $logger,
        private AdminCurrencyProviderInterface $currencyProvider,
        private AdminItemProviderInterface     $itemProvider,
    )
    {
    }

    /**
     * Executes the primary logic sequence for creating currencies and items.
     * Logs progress and any potential exceptions during the process.
     *
     * @return int Returns Command::SUCCESS if the operation completes successfully,
     *             or Command::FAILURE if an exception is encountered.
     */
    public function run(): int
    {
        /**
         * $question = new ConfirmationQuestion(
         * 'Continue with this action? Type yes for confirmation: ',
         * false,
         * '/^(yes|j)/i'
         * );
         * if (!$this->questionHelper->ask($this->input, $this->output, $question)) {
         * return Command::SUCCESS;
         * }
         **/

        $this->logger->info('Creating currencies...');
        try {
            $currencies = $this->adminApplicationService->createCurrencies($this->currencyProvider);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            return Command::FAILURE;
        }

        $this->logger->info("Currencies created.");
        foreach ($currencies as $currency) {
            $this->logger->info(sprintf(
                    '- SKU: %s',
                    $currency->getValue())
            );
        }


        $this->logger->info('Creating items...');
        try {
            $itemSkus = $this->adminApplicationService->createItems($this->itemProvider);
        } catch (BusinessRuleException $e) {
            $this->logger->error($e->getMessage());
            return Command::FAILURE;
        }

        $this->logger->info('Items created.');
        foreach ($itemSkus as $itemSku) {
            $this->logger->info(sprintf(
                '- SKU: %s',
                $itemSku->getValue()
            ));
        }

        // Upload codes for an item
        $this->logger->info('Uploading codes...');
        try {
            $itemSku = $itemSkus[0];
            $this->logger->info("Using item SKU: $itemSku->value for code upload");

            $filePath = realpath(APP_ROOT . '/codes.txt');

            $codeProvider = new AdminCodeProvider($itemSku, $filePath);
            $result = $this->adminApplicationService->uploadCodes($codeProvider);

            if ($result) {
                $this->logger->info('Codes uploaded successfully.');
            } else {
                $this->logger->warning('Codes upload completed but may have issues.');
            }
        } catch (Throwable $e) {
            $this->logger->error($e->getMessage());
        }

        return Command::SUCCESS;
    }
}