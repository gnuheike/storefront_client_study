# OpenAPI\Client\CartServerSideApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCartFill()**](CartServerSideApi.md#adminCartFill) | **PUT** /v2/admin/project/{project_id}/cart/fill | Fill cart with items |
| [**adminFillCartById()**](CartServerSideApi.md#adminFillCartById) | **PUT** /v2/admin/project/{project_id}/cart/{cart_id}/fill | Fill cart by cart ID with items |


## `adminCartFill()`

```php
adminCartFill($project_id, $locale, $x_user_for, $x_user_id, $cart): \OpenAPI\Client\Model\InlineObject22
```

Fill cart with items

Fills the current cart with items. If the cart already has an item with the same SKU, the existing item will be replaced by the passed value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CartServerSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$x_user_for = ACCESS_TOKEN/LOGIN_JWT; // string | User identifier can be transferred by using the Xsolla Login User JWT or the [Pay Station access token](https://developers.xsolla.com/pay-station-api/current/token/create-token).
$x_user_id = UNIQUE_ID; // string | You can use your own user ID when selling a cart with games.
$cart = {"currency":"USD","items":[{"sku":"com.xsolla.cup01","quantity":2},{"sku":"com.xsolla.t-shirt01","quantity":1},{"sku":"com.xsolla.cup01","quantity":1},{"sku":"com.xsolla.hat01","quantity":1}]}; // \OpenAPI\Client\Model\Cart

try {
    $result = $apiInstance->adminCartFill($project_id, $locale, $x_user_for, $x_user_id, $cart);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartServerSideApi->adminCartFill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **x_user_for** | **string**| User identifier can be transferred by using the Xsolla Login User JWT or the [Pay Station access token](https://developers.xsolla.com/pay-station-api/current/token/create-token). | [optional] |
| **x_user_id** | **string**| You can use your own user ID when selling a cart with games. | [optional] |
| **cart** | [**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject22**](../Model/InlineObject22.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminFillCartById()`

```php
adminFillCartById($project_id, $cart_id, $locale, $x_user_for, $x_user_id, $cart): \OpenAPI\Client\Model\InlineObject22
```

Fill cart by cart ID with items

Fills the cart by cart ID with items. If the cart already has an item with the same SKU, the existing item will be replaced by the passed value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CartServerSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$x_user_for = ACCESS_TOKEN/LOGIN_JWT; // string | User identifier can be transferred by using the Xsolla Login User JWT or the [Pay Station access token](https://developers.xsolla.com/pay-station-api/current/token/create-token).
$x_user_id = UNIQUE_ID; // string | You can use your own user ID when selling a cart with games.
$cart = {"currency":"USD","items":[{"sku":"com.xsolla.cup01","quantity":2},{"sku":"com.xsolla.t-shirt01","quantity":1},{"sku":"com.xsolla.cup01","quantity":1},{"sku":"com.xsolla.hat01","quantity":1}]}; // \OpenAPI\Client\Model\Cart

try {
    $result = $apiInstance->adminFillCartById($project_id, $cart_id, $locale, $x_user_for, $x_user_id, $cart);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartServerSideApi->adminFillCartById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **x_user_for** | **string**| User identifier can be transferred by using the Xsolla Login User JWT or the [Pay Station access token](https://developers.xsolla.com/pay-station-api/current/token/create-token). | [optional] |
| **x_user_id** | **string**| You can use your own user ID when selling a cart with games. | [optional] |
| **cart** | [**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject22**](../Model/InlineObject22.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
