# OpenAPI\Client\RewardChainValuePointsAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateRewardChain()**](RewardChainValuePointsAdminApi.md#adminCreateRewardChain) | **POST** /v2/project/{project_id}/admin/reward_chain | Create reward chain |
| [**adminCreateValuePoints()**](RewardChainValuePointsAdminApi.md#adminCreateValuePoints) | **POST** /v2/project/{project_id}/admin/items/value_points | Create value point |
| [**adminDeleteItemsValuePointReward()**](RewardChainValuePointsAdminApi.md#adminDeleteItemsValuePointReward) | **DELETE** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Delete value points from items |
| [**adminDeleteRewardChain()**](RewardChainValuePointsAdminApi.md#adminDeleteRewardChain) | **DELETE** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Delete reward chain |
| [**adminDeleteValuePoint()**](RewardChainValuePointsAdminApi.md#adminDeleteValuePoint) | **DELETE** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Delete value points |
| [**adminGetItemsValuePointReward()**](RewardChainValuePointsAdminApi.md#adminGetItemsValuePointReward) | **GET** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Get list of items with value points |
| [**adminGetRewardChain()**](RewardChainValuePointsAdminApi.md#adminGetRewardChain) | **GET** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Get reward chain |
| [**adminGetRewardChains()**](RewardChainValuePointsAdminApi.md#adminGetRewardChains) | **GET** /v2/project/{project_id}/admin/reward_chain | Get list of reward chains |
| [**adminGetValuePoint()**](RewardChainValuePointsAdminApi.md#adminGetValuePoint) | **GET** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Get value point |
| [**adminGetValuePointsList()**](RewardChainValuePointsAdminApi.md#adminGetValuePointsList) | **GET** /v2/project/{project_id}/admin/items/value_points | Get list of value points (admin) |
| [**adminPatchItemsValuePointReward()**](RewardChainValuePointsAdminApi.md#adminPatchItemsValuePointReward) | **PATCH** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Partially update value points for items |
| [**adminResetRewardChain()**](RewardChainValuePointsAdminApi.md#adminResetRewardChain) | **POST** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id}/reset | Reset reward chain |
| [**adminSetItemsValuePointReward()**](RewardChainValuePointsAdminApi.md#adminSetItemsValuePointReward) | **PUT** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Set value points for items |
| [**adminToggleRewardChain()**](RewardChainValuePointsAdminApi.md#adminToggleRewardChain) | **PUT** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id}/toggle | Toggle reward chain |
| [**adminUpdateRewardChain()**](RewardChainValuePointsAdminApi.md#adminUpdateRewardChain) | **PUT** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Update reward chain |
| [**adminUpdateValuePoint()**](RewardChainValuePointsAdminApi.md#adminUpdateValuePoint) | **PUT** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Update value point |


## `adminCreateRewardChain()`

```php
adminCreateRewardChain($project_id, $admin_create_reward_chain_request): \OpenAPI\Client\Model\InlineObject91
```

Create reward chain

Creates reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_reward_chain_request = {"name":{"en":"Reward chain"},"description":{"en":"Reward chain description."},"long_description":{"en":"Reward chain long description."},"is_enabled":true,"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","order":1,"date_start":"2020-04-15T18:16:00+05:00","date_end":"2021-04-15T18:16:00+05:00","value_point":{"sku":"com.xsolla.value_point_1"},"steps":[{"name":{"en":"First step of the reward chain"},"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","reward":[{"sku":"com.xsolla.item_1","quantity":5},{"sku":"com.xsolla.item_2","quantity":1}],"price":{"amount":10}},{"name":{"en":"Second step of the reward chain"},"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","reward":[{"sku":"com.xsolla.item_3","quantity":5},{"sku":"com.xsolla.item_4","quantity":1}],"price":{"amount":15}}],"recurrent_schedule":{"interval_type":"weekly","day_of_week":1,"time":"01:00:00+08:00"},"attribute_conditions":[{"attribute":"race","operator":"eq","value":"ork","type":"string","can_be_missing":false}],"is_always_visible":true}; // \OpenAPI\Client\Model\AdminCreateRewardChainRequest

try {
    $result = $apiInstance->adminCreateRewardChain($project_id, $admin_create_reward_chain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminCreateRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_reward_chain_request** | [**\OpenAPI\Client\Model\AdminCreateRewardChainRequest**](../Model/AdminCreateRewardChainRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject91**](../Model/InlineObject91.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateValuePoints()`

```php
adminCreateValuePoints($project_id, $admin_value_points_create): \OpenAPI\Client\Model\InlineObject82
```

Create value point

Creates a value point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_value_points_create = {"sku":"com.xsolla.reward_vp_1","name":{"en":"Reward VP 1"},"is_enabled":true,"description":{"en":"Value points for reward system."},"long_description":{"en":"Value points given to users to get new rewards in a reward chain."},"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","media_list":[],"order":1}; // \OpenAPI\Client\Model\AdminValuePointsCreate

try {
    $result = $apiInstance->adminCreateValuePoints($project_id, $admin_value_points_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminCreateValuePoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_value_points_create** | [**\OpenAPI\Client\Model\AdminValuePointsCreate**](../Model/AdminValuePointsCreate.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject82**](../Model/InlineObject82.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteItemsValuePointReward()`

```php
adminDeleteItemsValuePointReward($project_id, $value_point_sku)
```

Delete value points from items

Removes value point rewards from ALL items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_point_sku = value_point_3; // string | Value Point SKU.

try {
    $apiInstance->adminDeleteItemsValuePointReward($project_id, $value_point_sku);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminDeleteItemsValuePointReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_point_sku** | **string**| Value Point SKU. | |

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

## `adminDeleteRewardChain()`

```php
adminDeleteRewardChain($project_id, $reward_chain_id)
```

Delete reward chain

Deletes particular reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $apiInstance->adminDeleteRewardChain($project_id, $reward_chain_id);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminDeleteRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

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

## `adminDeleteValuePoint()`

```php
adminDeleteValuePoint($project_id, $item_sku)
```

Delete value points

Deletes a value point identified by an SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->adminDeleteValuePoint($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminDeleteValuePoint: ', $e->getMessage(), PHP_EOL;
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

## `adminGetItemsValuePointReward()`

```php
adminGetItemsValuePointReward($project_id, $value_point_sku): \OpenAPI\Client\Model\InlineObject83
```

Get list of items with value points

Gets list of all items with value points within a project for administration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_point_sku = value_point_3; // string | Value Point SKU.

try {
    $result = $apiInstance->adminGetItemsValuePointReward($project_id, $value_point_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminGetItemsValuePointReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_point_sku** | **string**| Value Point SKU. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject83**](../Model/InlineObject83.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetRewardChain()`

```php
adminGetRewardChain($project_id, $reward_chain_id): \OpenAPI\Client\Model\InlineObject92
```

Get reward chain

Gets particular reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $result = $apiInstance->adminGetRewardChain($project_id, $reward_chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminGetRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject92**](../Model/InlineObject92.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetRewardChains()`

```php
adminGetRewardChains($project_id, $limit, $offset, $enabled): \OpenAPI\Client\Model\InlineObject90
```

Get list of reward chains

Gets list of reward chains.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>10 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$enabled = 56; // int | Filter elements by `is_enabled` flag.

try {
    $result = $apiInstance->adminGetRewardChains($project_id, $limit, $offset, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminGetRewardChains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **enabled** | **int**| Filter elements by &#x60;is_enabled&#x60; flag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject90**](../Model/InlineObject90.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetValuePoint()`

```php
adminGetValuePoint($project_id, $item_sku): \OpenAPI\Client\Model\ValuePointItemModel
```

Get value point

Gets a value point by the SKU within a project for administration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $result = $apiInstance->adminGetValuePoint($project_id, $item_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminGetValuePoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |

### Return type

[**\OpenAPI\Client\Model\ValuePointItemModel**](../Model/ValuePointItemModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetValuePointsList()`

```php
adminGetValuePointsList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject81
```

Get list of value points (admin)

Gets the list of value points within a project for administration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->adminGetValuePointsList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminGetValuePointsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject81**](../Model/InlineObject81.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPatchItemsValuePointReward()`

```php
adminPatchItemsValuePointReward($project_id, $value_point_sku, $item_value_point_reward_set_for_patch_inner)
```

Partially update value points for items

Partially updates the number of value points for one or more items by the item’s SKU. Users receive these value points after purchasing the specified items.  Principles of updating value points:   * If an item does not yet have value points, sending a non-zero value in the `amount` field creates them.   * If an item already has value points, sending a non-zero value in the `amount` field updates them.   * If `amount` is set to 0, the existing value points for that item are deleted.  Unlike the `PUT` method ([Set value points for items](https://developers.xsolla.com/api/shop-builder/operation/admin-set-items-value-point-reward/)), this `PATCH` method does not overwrite all existing value points for items in the project, it only updates the specified items.  A single request can update up to 100 items. Duplicate item SKUs cannot be included in the same request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_point_sku = value_point_3; // string | Value Point SKU.
$item_value_point_reward_set_for_patch_inner = [{"sku":"booster_1","amount":100},{"sku":"booster_mega","amount":0}]; // \OpenAPI\Client\Model\ItemValuePointRewardSetForPatchInner[]

try {
    $apiInstance->adminPatchItemsValuePointReward($project_id, $value_point_sku, $item_value_point_reward_set_for_patch_inner);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminPatchItemsValuePointReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_point_sku** | **string**| Value Point SKU. | |
| **item_value_point_reward_set_for_patch_inner** | [**\OpenAPI\Client\Model\ItemValuePointRewardSetForPatchInner[]**](../Model/ItemValuePointRewardSetForPatchInner.md)|  | [optional] |

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

## `adminResetRewardChain()`

```php
adminResetRewardChain($project_id, $reward_chain_id)
```

Reset reward chain

Resets value points and progress of all users in the reward chain.<br> After the reset, you can update the validity period of the reward chain and the user can progress through it again. <div class=\"notice\"><strong>Notice</strong>   <br><br>   You should not reset the reward chain during its validity period. In this case, users may lose earned value points before they claim their reward. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $apiInstance->adminResetRewardChain($project_id, $reward_chain_id);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminResetRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

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

## `adminSetItemsValuePointReward()`

```php
adminSetItemsValuePointReward($project_id, $value_point_sku, $item_value_point_reward_set_inner)
```

Set value points for items

Assigns value points to one or several items by an SKU. Users receive value points after they purchase these items.  Note that this PUT request overwrites all previously set value points for items in the project.  To avoid unintentional deletion of value points, include all items and their respective value points in each PUT request.  If you only want to update the value points for a specific item while preserving the value points of other items, you should retrieve the current set of value points using a GET request, modify the desired item's value points, and then send the modified set of value points back with the updated value points for the specific item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_point_sku = value_point_3; // string | Value Point SKU.
$item_value_point_reward_set_inner = [{"sku":"com.xsolla.booster_1","amount":100},{"sku":"com.xsolla.booster_mega","amount":200}]; // \OpenAPI\Client\Model\ItemValuePointRewardSetInner[]

try {
    $apiInstance->adminSetItemsValuePointReward($project_id, $value_point_sku, $item_value_point_reward_set_inner);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminSetItemsValuePointReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_point_sku** | **string**| Value Point SKU. | |
| **item_value_point_reward_set_inner** | [**\OpenAPI\Client\Model\ItemValuePointRewardSetInner[]**](../Model/ItemValuePointRewardSetInner.md)|  | [optional] |

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

## `adminToggleRewardChain()`

```php
adminToggleRewardChain($project_id, $reward_chain_id)
```

Toggle reward chain

Enable/disable reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $apiInstance->adminToggleRewardChain($project_id, $reward_chain_id);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminToggleRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

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

## `adminUpdateRewardChain()`

```php
adminUpdateRewardChain($project_id, $reward_chain_id, $admin_update_reward_chain_request)
```

Update reward chain

Updates particular reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.
$admin_update_reward_chain_request = {"name":{"en":"Reward chain"},"description":{"en":"Reward chain description."},"long_description":{"en":"Reward chain long description."},"is_enabled":true,"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","order":1,"date_start":"2020-04-15T18:16:00+05:00","date_end":"2021-04-15T18:16:00+05:00","steps":[{"name":{"en":"First step of the reward chain"},"step_id":1,"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","reward":[{"sku":"com.xsolla.item_1","quantity":5},{"sku":"com.xsolla.item_2","quantity":1}],"price":{"amount":10}},{"name":{"en":"Second step of the reward chain"},"step_id":2,"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","reward":[{"sku":"com.xsolla.item_3","quantity":5},{"sku":"com.xsolla.item_4","quantity":1}],"price":{"amount":15}}],"recurrent_schedule":{"interval_type":"weekly","day_of_week":1,"time":"01:00:00+08:00"},"attribute_conditions":[{"attribute":"race","operator":"eq","value":"ork","type":"string","can_be_missing":false}],"is_always_visible":true}; // \OpenAPI\Client\Model\AdminUpdateRewardChainRequest

try {
    $apiInstance->adminUpdateRewardChain($project_id, $reward_chain_id, $admin_update_reward_chain_request);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminUpdateRewardChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |
| **admin_update_reward_chain_request** | [**\OpenAPI\Client\Model\AdminUpdateRewardChainRequest**](../Model/AdminUpdateRewardChainRequest.md)|  | [optional] |

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

## `adminUpdateValuePoint()`

```php
adminUpdateValuePoint($project_id, $item_sku, $admin_value_points_create)
```

Update value point

Updates a value point identified by an SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardChainValuePointsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$admin_value_points_create = {"sku":"com.xsolla.reward_vp_1","name":{"en":"Reward VP 1"},"is_enabled":true,"description":{"en":"Value points for reward system."},"long_description":{"en":"Value points given to users to get new rewards in a reward chain."},"image_url":"https://cdn.xsolla.net/img/misc/images/5c3b8b45c5be5fe7803e59fbc8041be4.png","media_list":[],"order":1}; // \OpenAPI\Client\Model\AdminValuePointsCreate

try {
    $apiInstance->adminUpdateValuePoint($project_id, $item_sku, $admin_value_points_create);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainValuePointsAdminApi->adminUpdateValuePoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **admin_value_points_create** | [**\OpenAPI\Client\Model\AdminValuePointsCreate**](../Model/AdminValuePointsCreate.md)|  | [optional] |

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
