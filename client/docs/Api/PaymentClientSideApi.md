# OpenAPI\Client\PaymentClientSideApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](PaymentClientSideApi.md#createOrder) | **POST** /v2/project/{project_id}/payment/cart | Create order with all items from current cart |
| [**createOrderByCartId()**](PaymentClientSideApi.md#createOrderByCartId) | **POST** /v2/project/{project_id}/payment/cart/{cart_id} | Create order with all items from particular cart |
| [**createOrderWithItem()**](PaymentClientSideApi.md#createOrderWithItem) | **POST** /v2/project/{project_id}/payment/item/{item_sku} | Create order with specified item |
| [**orderUserOfferChainStepReward()**](PaymentClientSideApi.md#orderUserOfferChainStepReward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/order | Create order for paid offer chain step |


## `createOrder()`

```php
createOrder($project_id, $create_order_by_cart_id_request): \OpenAPI\Client\Model\InlineObject15
```

Create order with all items from current cart

Used for client-to-server integration. Creates an order with all items from the cart and generates a payment token for it. The created order gets the `new` order status.  The client IP is used to determine the user’s country, which is then used to apply the corresponding currency and available payment methods for the order.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\"><strong>Notice</strong> <br><br> As this method uses the IP to determine the user’s country and select a currency for the order, it is important to only use this method from the client side and not from the server side. Using this method from the server side may cause incorrect currency determination and affect payment methods in <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a>. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_order_by_cart_id_request = {"sandbox":true,"settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderByCartIdRequest

try {
    $result = $apiInstance->createOrder($project_id, $create_order_by_cart_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentClientSideApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_order_by_cart_id_request** | [**\OpenAPI\Client\Model\CreateOrderByCartIdRequest**](../Model/CreateOrderByCartIdRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderByCartId()`

```php
createOrderByCartId($project_id, $cart_id, $create_order_by_cart_id_request): \OpenAPI\Client\Model\InlineObject15
```

Create order with all items from particular cart

Used for client-to-server integration. Creates an order with all items from the particular cart and generates a payment token for it. The created order gets the `new` order status.  The client IP is used to determine the user’s country, which is then used to apply the corresponding currency and available payment methods for the order.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\"><strong>Notice</strong> <br><br> As this method uses the IP to determine the user’s country and select a currency for the order, it is important to only use this method from the client side and not from the server side. Using this method from the server side may cause incorrect currency determination and affect payment methods in <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a>. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$create_order_by_cart_id_request = {"sandbox":true,"settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderByCartIdRequest

try {
    $result = $apiInstance->createOrderByCartId($project_id, $cart_id, $create_order_by_cart_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentClientSideApi->createOrderByCartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **create_order_by_cart_id_request** | [**\OpenAPI\Client\Model\CreateOrderByCartIdRequest**](../Model/CreateOrderByCartIdRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderWithItem()`

```php
createOrderWithItem($project_id, $item_sku, $create_order_with_item_request): \OpenAPI\Client\Model\InlineObject15
```

Create order with specified item

Used for client-to-server integration. Creates an order with a specified item and generates a payment token for it. The created order gets the `new` order status.  The client IP is used to determine the user’s country, which is then used to apply the corresponding currency and available payment methods for the order.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\"><strong>Notice</strong> <br><br> As this method uses the IP to determine the user’s country and select a currency for the order, it is important to only use this method from the client side and not from the server side. Using this method from the server side may cause incorrect currency determination and affect payment methods in <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a>. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$create_order_with_item_request = {"sandbox":true,"quantity":5,"promo_code":"discount_code","settings":{"ui":{"theme":"63295a9a2e47fab76f7708e1","desktop":{"header":{"is_visible":true,"visible_logo":true,"visible_name":true,"visible_purchase":true,"type":"normal","close_button":false}}}},"custom_parameters":{"character_id":"ingameUsername"}}; // \OpenAPI\Client\Model\CreateOrderWithItemRequest

try {
    $result = $apiInstance->createOrderWithItem($project_id, $item_sku, $create_order_with_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentClientSideApi->createOrderWithItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **create_order_with_item_request** | [**\OpenAPI\Client\Model\CreateOrderWithItemRequest**](../Model/CreateOrderWithItemRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderUserOfferChainStepReward()`

```php
orderUserOfferChainStepReward($project_id, $offer_chain_id, $step_number): \OpenAPI\Client\Model\InlineObject15
```

Create order for paid offer chain step

Creates an order for the item associated with the specified paid offer chain step. The created order gets the `new` order status.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\">   <strong>Notice</strong> <br><br>     This method must be used on the client side. The user's IP address is used to determine the country, which affects the currency and available payment methods. Using this method from the server side may result in incorrect currency detection and affect payment methods in <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a>. </div><br>  <div class=\"notice\">   <strong>Notice</strong><br><br>     Use this call only for paid offer chain steps.     For free steps, use the <a href=\"/api/shop-builder/operation/claim-user-offer-chain-step-reward\">Claim free offer chain step</a> call instead. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.
$step_number = 1; // int | Offer chain step number.

try {
    $result = $apiInstance->orderUserOfferChainStepReward($project_id, $offer_chain_id, $step_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentClientSideApi->orderUserOfferChainStepReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |
| **step_number** | **int**| Offer chain step number. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
