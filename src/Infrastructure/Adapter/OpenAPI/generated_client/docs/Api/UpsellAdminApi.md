# OpenAPI\Client\UpsellAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUpsellConfigurationsForProjectAdmin()**](UpsellAdminApi.md#getUpsellConfigurationsForProjectAdmin) | **GET** /v2/project/{project_id}/admin/items/upsell | Get information about upsell in project |
| [**postUpsell()**](UpsellAdminApi.md#postUpsell) | **POST** /v2/project/{project_id}/admin/items/upsell | Create upsell |
| [**putUpsell()**](UpsellAdminApi.md#putUpsell) | **PUT** /v2/project/{project_id}/admin/items/upsell | Update upsell |
| [**putUpsellToggleActiveInactive()**](UpsellAdminApi.md#putUpsellToggleActiveInactive) | **PUT** /v2/project/{project_id}/admin/items/upsell/{toggle} | Activate/Deactivate project&#39;s upsell |


## `getUpsellConfigurationsForProjectAdmin()`

```php
getUpsellConfigurationsForProjectAdmin($project_id): \OpenAPI\Client\Model\GetUpsellConfigurationsForProjectAdmin200ResponseInner[]
```

Get information about upsell in project

Retrieves the information about upsell in project: whether it's enabled, type of upsell, and the SKU list of items that are a part of this upsell.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UpsellAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->getUpsellConfigurationsForProjectAdmin($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellAdminApi->getUpsellConfigurationsForProjectAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\GetUpsellConfigurationsForProjectAdmin200ResponseInner[]**](../Model/GetUpsellConfigurationsForProjectAdmin200ResponseInner.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUpsell()`

```php
postUpsell($project_id, $put_upsell_request)
```

Create upsell

Creates an upsell for a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UpsellAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$put_upsell_request = {"is_enabled":true,"type":"fixed_list","items":["game_sku_1","game_sku_2","game_sku_3"]}; // \OpenAPI\Client\Model\PutUpsellRequest

try {
    $apiInstance->postUpsell($project_id, $put_upsell_request);
} catch (Exception $e) {
    echo 'Exception when calling UpsellAdminApi->postUpsell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **put_upsell_request** | [**\OpenAPI\Client\Model\PutUpsellRequest**](../Model/PutUpsellRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUpsell()`

```php
putUpsell($project_id, $put_upsell_request)
```

Update upsell

Update an upsell for a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UpsellAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$put_upsell_request = {"is_enabled":true,"type":"fixed_list","items":["game_sku_1","game_sku_2","game_sku_3"]}; // \OpenAPI\Client\Model\PutUpsellRequest

try {
    $apiInstance->putUpsell($project_id, $put_upsell_request);
} catch (Exception $e) {
    echo 'Exception when calling UpsellAdminApi->putUpsell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **put_upsell_request** | [**\OpenAPI\Client\Model\PutUpsellRequest**](../Model/PutUpsellRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUpsellToggleActiveInactive()`

```php
putUpsellToggleActiveInactive($project_id, $toggle)
```

Activate/Deactivate project's upsell

Changes an upsell’s status in a project to be either active or inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UpsellAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$toggle = activate; // string | Activation status.

try {
    $apiInstance->putUpsellToggleActiveInactive($project_id, $toggle);
} catch (Exception $e) {
    echo 'Exception when calling UpsellAdminApi->putUpsellToggleActiveInactive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **toggle** | **string**| Activation status. | |

### Return type

void (empty response body)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
