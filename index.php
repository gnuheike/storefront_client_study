<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use StoreFrontClient\Presentation\AdminBehaviorConsoleRunner;
use StoreFrontClient\Presentation\ClientBehaviorConsoleRunner;

const APP_ROOT = __DIR__;

require __DIR__ . '/vendor/autoload.php';

/**
 * @var ContainerInterface $container
 */
$container = require __DIR__ . '/src/bootstrap.php';


/**
 * @var AdminBehaviorConsoleRunner $adminBehaviorConsoleRunner
 * @var ClientBehaviorConsoleRunner $clientBehaviorConsoleRunner
 */
$adminBehaviorConsoleRunner = $container->get(AdminBehaviorConsoleRunner::class);
$clientBehaviorConsoleRunner = $container->get(ClientBehaviorConsoleRunner::class);

try {
    //$adminBehaviorConsoleRunner->run();
    $clientBehaviorConsoleRunner->run();
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
    echo "File: " . $e->getFile() . PHP_EOL;
    echo "Line: " . $e->getLine() . PHP_EOL;
    echo "Trace: " . $e->getTraceAsString() . PHP_EOL;
}