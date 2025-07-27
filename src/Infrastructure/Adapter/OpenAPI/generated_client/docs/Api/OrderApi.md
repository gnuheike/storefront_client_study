# OpenAPI\Client\OrderApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminOrderSearch()**](OrderApi.md#adminOrderSearch) | **POST** /v3/project/{project_id}/admin/order/search | Get orders list for specified period |
| [**getOrder()**](OrderApi.md#getOrder) | **GET** /v2/project/{project_id}/order/{order_id} | Get order |


## `adminOrderSearch()`

```php
adminOrderSearch($project_id, $admin_order_search_request): \OpenAPI\Client\Model\InlineObject20
```

Get orders list for specified period

Retrieves orders list, arranged from the earliest to the latest creation date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_order_search_request = {"offset":0,"limit":5,"created_date_from":"2018-01-07T00:00:00+03:00","created_date_until":"2018-01-09T16:00:00+03:00"}; // \OpenAPI\Client\Model\AdminOrderSearchRequest | Order search parameters

try {
    $result = $apiInstance->adminOrderSearch($project_id, $admin_order_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->adminOrderSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_order_search_request** | [**\OpenAPI\Client\Model\AdminOrderSearchRequest**](../Model/AdminOrderSearchRequest.md)| Order search parameters | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject20**](../Model/InlineObject20.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($project_id, $order_id): \OpenAPI\Client\Model\InlineObject18
```

Get order

Retrieves a specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$order_id = 656; // string | Order ID.

try {
    $result = $apiInstance->getOrder($project_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **order_id** | **string**| Order ID. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject18**](../Model/InlineObject18.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
