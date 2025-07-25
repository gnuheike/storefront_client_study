# OpenAPI\Client\CommonPreOrdersApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPreOrderLimit()**](CommonPreOrdersApi.md#addPreOrderLimit) | **POST** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Add quantity to item pre-order limit |
| [**getPreOrderLimit()**](CommonPreOrdersApi.md#getPreOrderLimit) | **GET** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Get information about item pre-order limit |
| [**removeAllPreOrderLimit()**](CommonPreOrdersApi.md#removeAllPreOrderLimit) | **DELETE** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku}/all | Remove all quantity of item pre-order limit |
| [**removePreOrderLimit()**](CommonPreOrdersApi.md#removePreOrderLimit) | **DELETE** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Remove quantity of item pre-order limit |
| [**setPreOrderLimit()**](CommonPreOrdersApi.md#setPreOrderLimit) | **PUT** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Set quantity of item pre-order limit |
| [**togglePreOrderLimit()**](CommonPreOrdersApi.md#togglePreOrderLimit) | **PUT** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku}/toggle | Toggle item&#39;s pre-order limit |


## `addPreOrderLimit()`

```php
addPreOrderLimit($project_id, $item_sku, $add_pre_order_limit_request)
```

Add quantity to item pre-order limit

Add quantity to pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the Admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$add_pre_order_limit_request = {"quantity":100000}; // \OpenAPI\Client\Model\AddPreOrderLimitRequest

try {
    $apiInstance->addPreOrderLimit($project_id, $item_sku, $add_pre_order_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->addPreOrderLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **add_pre_order_limit_request** | [**\OpenAPI\Client\Model\AddPreOrderLimitRequest**](../Model/AddPreOrderLimitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPreOrderLimit()`

```php
getPreOrderLimit($project_id, $item_sku): \OpenAPI\Client\Model\GetPreOrderLimit200Response
```

Get information about item pre-order limit

Get pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the Admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $result = $apiInstance->getPreOrderLimit($project_id, $item_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->getPreOrderLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |

### Return type

[**\OpenAPI\Client\Model\GetPreOrderLimit200Response**](../Model/GetPreOrderLimit200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAllPreOrderLimit()`

```php
removeAllPreOrderLimit($project_id, $item_sku)
```

Remove all quantity of item pre-order limit

Remove all quantity of pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}/all

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->removeAllPreOrderLimit($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->removeAllPreOrderLimit: ', $e->getMessage(), PHP_EOL;
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

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePreOrderLimit()`

```php
removePreOrderLimit($project_id, $item_sku, $remove_pre_order_limit_request)
```

Remove quantity of item pre-order limit

Remove quantity of pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the Admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$remove_pre_order_limit_request = {"quantity":100000}; // \OpenAPI\Client\Model\RemovePreOrderLimitRequest

try {
    $apiInstance->removePreOrderLimit($project_id, $item_sku, $remove_pre_order_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->removePreOrderLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **remove_pre_order_limit_request** | [**\OpenAPI\Client\Model\RemovePreOrderLimitRequest**](../Model/RemovePreOrderLimitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPreOrderLimit()`

```php
setPreOrderLimit($project_id, $item_sku, $set_pre_order_limit_request)
```

Set quantity of item pre-order limit

Set quantity of pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the Admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$set_pre_order_limit_request = {"quantity":100000}; // \OpenAPI\Client\Model\SetPreOrderLimitRequest

try {
    $apiInstance->setPreOrderLimit($project_id, $item_sku, $set_pre_order_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->setPreOrderLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **set_pre_order_limit_request** | [**\OpenAPI\Client\Model\SetPreOrderLimitRequest**](../Model/SetPreOrderLimitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `togglePreOrderLimit()`

```php
togglePreOrderLimit($project_id, $item_sku, $toggle_pre_order_limit_request)
```

Toggle item's pre-order limit

Enable/disable pre-order limit of the item.  Pre-Order limit API allows you to sell an item in a limited quantity. For configuring the pre-order itself, go to the admin section of the desired item module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)  Aliases for this endpoint: * /v2/project/{project_id}/admin/items/pre_order/limit/item/id/{item_id}/toggle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$toggle_pre_order_limit_request = {"is_pre_order_limit_enabled":true}; // \OpenAPI\Client\Model\TogglePreOrderLimitRequest

try {
    $apiInstance->togglePreOrderLimit($project_id, $item_sku, $toggle_pre_order_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonPreOrdersApi->togglePreOrderLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **toggle_pre_order_limit_request** | [**\OpenAPI\Client\Model\TogglePreOrderLimitRequest**](../Model/TogglePreOrderLimitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
