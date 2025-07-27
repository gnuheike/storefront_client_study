<?php

declare(strict_types=1);


namespace StoreFrontClient\Presentation;

use Exception;
use Psr\Log\LoggerInterface;
use StoreFrontClient\Application\Service\Admin\AdminApplicationService;
use StoreFrontClient\Application\Service\Admin\AdminCurrencyProviderInterface;
use StoreFrontClient\Application\Service\Admin\AdminItemProviderInterface;
use StoreFrontClient\Domain\Exception\BusinessRuleException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class AdminBehaviorConsoleRunner
{
    public function __construct(
        private AdminApplicationService        $adminApplicationService,
        private LoggerInterface                $logger,
        private InputInterface                 $input,
        private OutputInterface                $output,
        private QuestionHelper                 $questionHelper,
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
        $this->output->writeln('Creating currencies...');
        try {
            $currencies = $this->adminApplicationService->createCurrencies($this->currencyProvider);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            $this->output->writeln($e->getMessage());
            return Command::FAILURE;
        }

        $this->logger->info("Currencies created.");
        $this->output->writeln('Currencies created.');


        $this->logger->info('Creating items...');
        $this->output->writeln('Creating items...');
        try {
            $items = $this->adminApplicationService->createItems($this->itemProvider);
        } catch (BusinessRuleException $e) {
            $this->logger->error($e->getMessage());
            $this->output->writeln($e->getMessage());
            return Command::FAILURE;
        }

        $this->logger->info('Items created.');
        $this->output->writeln('Items created.');

        return Command::SUCCESS;
    }
}