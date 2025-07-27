# OpenAPI\Client\CommonRegionsApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateRegion()**](CommonRegionsApi.md#adminCreateRegion) | **POST** /v2/project/{project_id}/admin/region | Create region |
| [**adminDeleteRegion()**](CommonRegionsApi.md#adminDeleteRegion) | **DELETE** /v2/project/{project_id}/admin/region/{region_id} | Delete region |
| [**adminGetRegion()**](CommonRegionsApi.md#adminGetRegion) | **GET** /v2/project/{project_id}/admin/region/{region_id} | Get region |
| [**adminGetRegions()**](CommonRegionsApi.md#adminGetRegions) | **GET** /v2/project/{project_id}/admin/region | Get list of regions |
| [**adminUpdateRegion()**](CommonRegionsApi.md#adminUpdateRegion) | **PUT** /v2/project/{project_id}/admin/region/{region_id} | Update region |


## `adminCreateRegion()`

```php
adminCreateRegion($project_id, $admin_create_region_request): \OpenAPI\Client\Model\InlineObject78
```

Create region

Creates region.  You can use a region for managing your regional restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_region_request = new \OpenAPI\Client\Model\AdminCreateRegionRequest(); // \OpenAPI\Client\Model\AdminCreateRegionRequest

try {
    $result = $apiInstance->adminCreateRegion($project_id, $admin_create_region_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonRegionsApi->adminCreateRegion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_region_request** | [**\OpenAPI\Client\Model\AdminCreateRegionRequest**](../Model/AdminCreateRegionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject78**](../Model/InlineObject78.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteRegion()`

```php
adminDeleteRegion($project_id, $region_id)
```

Delete region

Deletes particular region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$region_id = 42; // int | Region ID. Unique region identifier within the project.

try {
    $apiInstance->adminDeleteRegion($project_id, $region_id);
} catch (Exception $e) {
    echo 'Exception when calling CommonRegionsApi->adminDeleteRegion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **region_id** | **int**| Region ID. Unique region identifier within the project. | |

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

## `adminGetRegion()`

```php
adminGetRegion($project_id, $region_id): \OpenAPI\Client\Model\Regions200RegionModel
```

Get region

Gets particular region.  You can use a region for managing your regional restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$region_id = 42; // int | Region ID. Unique region identifier within the project.

try {
    $result = $apiInstance->adminGetRegion($project_id, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonRegionsApi->adminGetRegion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **region_id** | **int**| Region ID. Unique region identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\Regions200RegionModel**](../Model/Regions200RegionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetRegions()`

```php
adminGetRegions($project_id): \OpenAPI\Client\Model\InlineObject77
```

Get list of regions

Gets list of regions.  You can use a region for managing your regional restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->adminGetRegions($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonRegionsApi->adminGetRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject77**](../Model/InlineObject77.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUpdateRegion()`

```php
adminUpdateRegion($project_id, $region_id, $admin_create_region_request)
```

Update region

Updates particular region.  You can use a region for managing your regional restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$region_id = 42; // int | Region ID. Unique region identifier within the project.
$admin_create_region_request = new \OpenAPI\Client\Model\AdminCreateRegionRequest(); // \OpenAPI\Client\Model\AdminCreateRegionRequest

try {
    $apiInstance->adminUpdateRegion($project_id, $region_id, $admin_create_region_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonRegionsApi->adminUpdateRegion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **region_id** | **int**| Region ID. Unique region identifier within the project. | |
| **admin_create_region_request** | [**\OpenAPI\Client\Model\AdminCreateRegionRequest**](../Model/AdminCreateRegionRequest.md)|  | [optional] |

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
