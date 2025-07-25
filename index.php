<?php
declare(strict_types=1);

use StoreFrontClient\ClientCartManager;
use StoreFrontClient\ClientItemManager;
use StoreFrontClient\ClientOrderManager;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$adminToken = $_ENV['STOREFRONT_ADMIN_TOKEN'];
$clientToken = $_ENV['STOREFRONT_CLIENT_TOKEN'];
$projectId = $_ENV['STOREFRONT_PROJECT_ID'];
$server = $_ENV['STOREFRONT_SERVER'];

// Admin configuration for bundle operations
$adminConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
    ->setUsername($projectId)
    ->setPassword($adminToken);

// Client configuration for cart operations (using JWT)
$clientConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
    ->setUsername($projectId)
    ->setPassword($clientToken);

$guzzle = new GuzzleHttp\Client();
try {
    //new ItemManager()->createItem($adminConfig, $guzzle);
    //new CurrencyManager()->createCurrency($adminConfig, $guzzle);
    //new CurrencyPackageManager()->createCurrencyPackage($adminConfig, $guzzle);
    //$gameResponse = new GameManager()->createGame($adminConfig, $client);
    //new AdminCodeManager()->uploadCodesById($adminConfig, $client, $gameResponse->getItemId(), __DIR__ . '/codes.txt');
    //new AdminBundleManager()->createBundle($adminConfig, $guzzle);

    // Test ClientItemManager
    $itemManager = new ClientItemManager();
    $itemsList = $itemManager->getVirtualItems($clientConfig, $guzzle);
    if (count($itemsList->getItems()) === 0) {
        throw new RuntimeException('No items found');
    }
    $items = array_map(
        static fn($i) => ["sku" => $i->getSku(), "quantity" => 1],
        $itemsList->getItems()
    );
    $cartManager = new ClientCartManager();
    $cartManager->fillItemsToCart($clientConfig, $guzzle, $items);
    $cartManager->getUserCart($clientConfig, $guzzle);

    $orderManager = new ClientOrderManager();
    $orderManager->createSandboxOrder($clientConfig, $guzzle);

} catch (OpenAPI\Client\ApiException $e) {
    if (!$e->getResponseBody()) throw $e;
    $fullMessage = json_decode($e->getResponseBody(), true, 512, JSON_THROW_ON_ERROR);

    if (isset($fullMessage['errorMessageExtended'])) {
        dump($fullMessage['errorMessageExtended']);
    }

    if (isset($fullMessage['errorMessage'])) {
        throw new RuntimeException("API Exception: {$fullMessage['errorMessage']}");
    }

    throw $e;
} catch (JsonException $e) {
    echo "JSON Exception: " . $e->getMessage() . "\n";
    throw new RuntimeException('Failed to parse JSON response');
} catch (Exception $e) {
    echo "General Exception: " . $e->getMessage() . "\n";
    throw $e;
}