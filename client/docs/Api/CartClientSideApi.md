# OpenAPI\Client\CartClientSideApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cartClear()**](CartClientSideApi.md#cartClear) | **PUT** /v2/project/{project_id}/cart/clear | Delete all cart items from current cart |
| [**cartClearById()**](CartClientSideApi.md#cartClearById) | **PUT** /v2/project/{project_id}/cart/{cart_id}/clear | Delete all cart items by cart ID |
| [**cartFill()**](CartClientSideApi.md#cartFill) | **PUT** /v2/project/{project_id}/cart/fill | Fill cart with items |
| [**cartFillById()**](CartClientSideApi.md#cartFillById) | **PUT** /v2/project/{project_id}/cart/{cart_id}/fill | Fill specific cart with items |
| [**deleteItem()**](CartClientSideApi.md#deleteItem) | **DELETE** /v2/project/{project_id}/cart/item/{item_sku} | Delete cart item from current cart |
| [**deleteItemByCartId()**](CartClientSideApi.md#deleteItemByCartId) | **DELETE** /v2/project/{project_id}/cart/{cart_id}/item/{item_sku} | Delete cart item by cart ID |
| [**getCartById()**](CartClientSideApi.md#getCartById) | **GET** /v2/project/{project_id}/cart/{cart_id} | Get cart by cart ID |
| [**getUserCart()**](CartClientSideApi.md#getUserCart) | **GET** /v2/project/{project_id}/cart | Get current user&#39;s cart |
| [**putItem()**](CartClientSideApi.md#putItem) | **PUT** /v2/project/{project_id}/cart/item/{item_sku} | Update cart item from current cart |
| [**putItemByCartId()**](CartClientSideApi.md#putItemByCartId) | **PUT** /v2/project/{project_id}/cart/{cart_id}/item/{item_sku} | Update cart item by cart ID |


## `cartClear()`

```php
cartClear($project_id)
```

Delete all cart items from current cart

Deletes all cart items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $apiInstance->cartClear($project_id);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->cartClear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartClearById()`

```php
cartClearById($project_id, $cart_id)
```

Delete all cart items by cart ID

Deletes all cart items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.

try {
    $apiInstance->cartClearById($project_id, $cart_id);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->cartClearById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartFill()`

```php
cartFill($project_id, $cart_fill_request): \OpenAPI\Client\Model\InlineObject11
```

Fill cart with items

Fills the cart with items. If the cart already has an item with the same SKU, the existing item will be replaced by the passed value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_fill_request = new \OpenAPI\Client\Model\CartFillRequest(); // \OpenAPI\Client\Model\CartFillRequest

try {
    $result = $apiInstance->cartFill($project_id, $cart_fill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->cartFill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_fill_request** | [**\OpenAPI\Client\Model\CartFillRequest**](../Model/CartFillRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartFillById()`

```php
cartFillById($project_id, $cart_id, $cart_fill_request): \OpenAPI\Client\Model\InlineObject11
```

Fill specific cart with items

Fills the specific cart with items. If the cart already has an item with the same SKU, the existing item position will be replaced by the passed value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$cart_fill_request = new \OpenAPI\Client\Model\CartFillRequest(); // \OpenAPI\Client\Model\CartFillRequest

try {
    $result = $apiInstance->cartFillById($project_id, $cart_id, $cart_fill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->cartFillById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **cart_fill_request** | [**\OpenAPI\Client\Model\CartFillRequest**](../Model/CartFillRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItem()`

```php
deleteItem($project_id, $item_sku)
```

Delete cart item from current cart

Removes an item from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->deleteItem($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemByCartId()`

```php
deleteItemByCartId($project_id, $cart_id, $item_sku)
```

Delete cart item by cart ID

Removes an item from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->deleteItemByCartId($project_id, $cart_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->deleteItemByCartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **item_sku** | **string**| Item SKU. | |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartById()`

```php
getCartById($project_id, $cart_id, $currency, $locale): \OpenAPI\Client\Model\InlineObject10
```

Get cart by cart ID

Returns user’s cart by cart ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$currency = 'USD'; // string | The item price currency displayed in the cart. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.

try {
    $result = $apiInstance->getCartById($project_id, $cart_id, $currency, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->getCartById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **currency** | **string**| The item price currency displayed in the cart. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/). | [optional] [default to &#39;USD&#39;] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |

### Return type

[**\OpenAPI\Client\Model\InlineObject10**](../Model/InlineObject10.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCart()`

```php
getUserCart($project_id, $currency, $locale): \OpenAPI\Client\Model\InlineObject10
```

Get current user's cart

Returns the current user's cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$currency = 'USD'; // string | The item price currency displayed in the cart. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.

try {
    $result = $apiInstance->getUserCart($project_id, $currency, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->getUserCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **currency** | **string**| The item price currency displayed in the cart. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/). | [optional] [default to &#39;USD&#39;] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |

### Return type

[**\OpenAPI\Client\Model\InlineObject10**](../Model/InlineObject10.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putItem()`

```php
putItem($project_id, $item_sku, $put_item_by_cart_id_request)
```

Update cart item from current cart

Updates an existing cart item or creates the one in the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$put_item_by_cart_id_request = new \OpenAPI\Client\Model\PutItemByCartIdRequest(); // \OpenAPI\Client\Model\PutItemByCartIdRequest

try {
    $apiInstance->putItem($project_id, $item_sku, $put_item_by_cart_id_request);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->putItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **put_item_by_cart_id_request** | [**\OpenAPI\Client\Model\PutItemByCartIdRequest**](../Model/PutItemByCartIdRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putItemByCartId()`

```php
putItemByCartId($project_id, $cart_id, $item_sku, $put_item_by_cart_id_request)
```

Update cart item by cart ID

Updates an existing cart item or creates the one in the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CartClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$cart_id = custom_id; // string | Cart ID.
$item_sku = booster_mega_1; // string | Item SKU.
$put_item_by_cart_id_request = new \OpenAPI\Client\Model\PutItemByCartIdRequest(); // \OpenAPI\Client\Model\PutItemByCartIdRequest

try {
    $apiInstance->putItemByCartId($project_id, $cart_id, $item_sku, $put_item_by_cart_id_request);
} catch (Exception $e) {
    echo 'Exception when calling CartClientSideApi->putItemByCartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **cart_id** | **string**| Cart ID. | |
| **item_sku** | **string**| Item SKU. | |
| **put_item_by_cart_id_request** | [**\OpenAPI\Client\Model\PutItemByCartIdRequest**](../Model/PutItemByCartIdRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
