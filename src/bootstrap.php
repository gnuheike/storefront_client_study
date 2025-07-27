<?php

declare(strict_types=1);

use Dotenv\Dotenv;

/**
 * Bootstrap the application.
 *
 * This file initializes the environment, sets up error handling,
 * and creates the dependency injection container.
 */

$dotenv = Dotenv::createImmutable(APP_ROOT);
$dotenv->safeLoad();

$containerBuilder = require APP_ROOT . '/src/Infrastructure/Config/container.php';
return $containerBuilder();