<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use GuzzleHttp\Client;
use OpenAPI\Client\Configuration;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use StoreFrontClient\Application\Handler\Command\CreateCurrencyHandler;
use StoreFrontClient\Application\Handler\Command\CreateItemHandler;
use StoreFrontClient\Application\Handler\Command\FillCartWithItemsHandler;
use StoreFrontClient\Application\Handler\Query\GetCartsHandler;
use StoreFrontClient\Application\Handler\Query\GetCurrenciesHandler;
use StoreFrontClient\Application\Handler\Query\GetItemsHandler;
use StoreFrontClient\Application\Service\Admin\AdminApplicationService;
use StoreFrontClient\Application\Service\Admin\SimpleAdminApplicationService;
use StoreFrontClient\Application\Service\Client\ClientApplicationService;
use StoreFrontClient\Application\Service\Client\ClientCartApplicationService;
use StoreFrontClient\Application\Service\Client\SimpleClientApplicationService;
use StoreFrontClient\Application\Service\Client\SimpleClientCartApplicationService;
use StoreFrontClient\Domain\Repository\CartRepositoryInterface;
use StoreFrontClient\Domain\Repository\CurrencyRepositoryInterface;
use StoreFrontClient\Domain\Repository\ItemRepositoryInterface;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\CartMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\CurrencyMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\ItemMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Mapper\SkuMapper;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository\CartConfiguredRepository;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository\CurrencyConfiguredRepository;
use StoreFrontClient\Infrastructure\Adapter\OpenAPI\Repository\ItemConfiguredRepository;
use StoreFrontClient\Infrastructure\Logging\ConsoleLogger;
use StoreFrontClient\Presentation\AdminBehaviorConsoleRunner;
use StoreFrontClient\Presentation\ClientBehaviorConsoleRunner;
use StoreFrontClient\Presentation\Provider\AdminCurrencyProvider;
use StoreFrontClient\Presentation\Provider\AdminItemProvider;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

return static function (): ContainerInterface {
    $containerBuilder = new ContainerBuilder();
    $containerBuilder->useAutowiring(true);

    $adminConfig = (new Configuration())
        ->setUsername($_ENV['STOREFRONT_PROJECT_ID'])
        ->setPassword($_ENV['STOREFRONT_ADMIN_TOKEN']);

    $clientConfig = (new Configuration())
        ->setUsername($_ENV['STOREFRONT_PROJECT_ID'])
        ->setPassword($_ENV['STOREFRONT_CLIENT_TOKEN']);

    $containerBuilder->addDefinitions([
        CurrencyRepositoryInterface::class => static fn(ContainerInterface $container) => currencyRepositoryFactory(
            $container,
            $adminConfig
        ),
        ItemRepositoryInterface::class => static fn(ContainerInterface $container) => itemRepositoryFactory(
            $container,
            $adminConfig
        ),
        CartRepositoryInterface::class => static fn(ContainerInterface $container) => cartRepositoryFactory(
            $container,
            $clientConfig
        ),
        Client::class => function () {
            return new Client();
        },
        AdminApplicationService::class => static fn(ContainerInterface $container) => $container->get(
            SimpleAdminApplicationService::class
        ),
        ClientApplicationService::class => static fn(ContainerInterface $container) => $container->get(
            SimpleClientApplicationService::class
        ),
        ClientCartApplicationService::class => static fn(ContainerInterface $container) => $container->get(
            SimpleClientCartApplicationService::class
        ),
        LoggerInterface::class => static fn() => new ConsoleLogger(),

        //Handlers
        CreateCurrencyHandler::class => static fn(ContainerInterface $container) => new CreateCurrencyHandler(
            $container->get(CurrencyRepositoryInterface::class)
        ),
        CreateItemHandler::class => static fn(ContainerInterface $container) => new CreateItemHandler(
            $container->get(ItemRepositoryInterface::class)
        ),
        GetCurrenciesHandler::class => static fn(ContainerInterface $container) => new GetCurrenciesHandler(
            $container->get(CurrencyRepositoryInterface::class)
        ),
        GetItemsHandler::class => static fn(ContainerInterface $container) => new GetItemsHandler(
            $container->get(ItemRepositoryInterface::class)
        ),
        GetCartsHandler::class => static fn(ContainerInterface $container) => new GetCartsHandler(
            $container->get(CartRepositoryInterface::class)
        ),
        FillCartWithItemsHandler::class => static fn(ContainerInterface $container) => new FillCartWithItemsHandler(
            $container->get(CartRepositoryInterface::class)
        ),

        // Presentation
        QuestionHelper::class => static fn() => new QuestionHelper(),
        AdminBehaviorConsoleRunner::class => static fn(ContainerInterface $container) => new AdminBehaviorConsoleRunner(
            $container->get(AdminApplicationService::class),
            $container->get(LoggerInterface::class),
            $container->get(InputInterface::class),
            $container->get(OutputInterface::class),
            $container->get(QuestionHelper::class),
            $container->get(AdminCurrencyProvider::class),
            $container->get(AdminItemProvider::class),
        ),
        ClientBehaviorConsoleRunner::class => static fn(ContainerInterface $container) => new ClientBehaviorConsoleRunner(
            $container->get(ClientApplicationService::class),
            $container->get(ClientCartApplicationService::class),
            $container->get(LoggerInterface::class)
        ),

        InputInterface::class => static fn() => new ArgvInput(),
        OutputInterface::class => static fn() => new ConsoleOutput(),

        // Add definitions for provider classes
        AdminCurrencyProvider::class => static fn() => new AdminCurrencyProvider(),
        AdminItemProvider::class => static fn() => new AdminItemProvider(),

        // Add definitions for mappers
        CartMapper::class => static fn() => new CartMapper(),
    ]);

    return $containerBuilder->build();
};


function currencyRepositoryFactory(
    ContainerInterface $container,
    Configuration      $adminConfig
): CurrencyRepositoryInterface
{
    return new CurrencyConfiguredRepository(
        $adminConfig,
        $container->get(Client::class),
        $container->get(CurrencyMapper::class),
        $container->get(SkuMapper::class)
    );
}

function itemRepositoryFactory(
    ContainerInterface $container,
    Configuration      $adminConfig
): ItemRepositoryInterface
{
    return new ItemConfiguredRepository(
        $adminConfig,
        $container->get(Client::class),
        $container->get(ItemMapper::class),
        $container->get(SkuMapper::class)
    );
}

function cartRepositoryFactory(
    ContainerInterface $container,
    Configuration      $clientConfig
): CartRepositoryInterface
{
    return new CartConfiguredRepository(
        $clientConfig,
        $container->get(Client::class),
        $container->get(CartMapper::class)
    );
}