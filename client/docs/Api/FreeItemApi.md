# OpenAPI\Client\FreeItemApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFreeOrder()**](FreeItemApi.md#createFreeOrder) | **POST** /v2/project/{project_id}/free/cart | Create order with free cart |
| [**createFreeOrderByCartId()**](FreeItemApi.md#createFreeOrderByCartId) | **POST** /v2/project/{project_id}/free/cart/{cart_id} | Create order with particular free cart |
| [**createFreeOrderWithItem()**](FreeItemApi.md#createFreeOrderWithItem) | **POST** /v2/project/{project_id}/free/item/{item_sku} | Create order with specified free item |


## `createFreeOrder()`

```php
createFreeOrder($project_id, $create_order_by_cart_id_request): \OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response
```

Create order with free cart

Creates an order with all items from the free cart. The created order will get a `done` order status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FreeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_order_by_cart_id_request = {"sandbox":true,"settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderByCartIdRequest

try {
    $result = $apiInstance->createFreeOrder($project_id, $create_order_by_cart_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeItemApi->createFreeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_order_by_cart_id_request** | [**\OpenAPI\Client\Model\CreateOrderByCartIdRequest**](../Model/CreateOrderByCartIdRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response**](../Model/ClaimUserOfferChainStepReward200Response.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFreeOrderByCartId()`

```php
createFreeOrderByCartId($project_id, $cart_id, $create_order_by_cart_id_request): \OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response
```

Create order with particular free cart

Creates an order with all items from the particular free cart. The created order will get a `done` order status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FreeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$create_order_by_cart_id_request = {"sandbox":true,"settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderByCartIdRequest

try {
    $result = $apiInstance->createFreeOrderByCartId($project_id, $cart_id, $create_order_by_cart_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeItemApi->createFreeOrderByCartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **create_order_by_cart_id_request** | [**\OpenAPI\Client\Model\CreateOrderByCartIdRequest**](../Model/CreateOrderByCartIdRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response**](../Model/ClaimUserOfferChainStepReward200Response.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFreeOrderWithItem()`

```php
createFreeOrderWithItem($project_id, $item_sku, $create_order_with_item_request): \OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response
```

Create order with specified free item

Creates an order with a specified free item. The created order will get a `done` order status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FreeItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$create_order_with_item_request = {"sandbox":true,"quantity":5,"promo_code":"discount_code","settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderWithItemRequest

try {
    $result = $apiInstance->createFreeOrderWithItem($project_id, $item_sku, $create_order_with_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeItemApi->createFreeOrderWithItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **create_order_with_item_request** | [**\OpenAPI\Client\Model\CreateOrderWithItemRequest**](../Model/CreateOrderWithItemRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response**](../Model/ClaimUserOfferChainStepReward200Response.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
