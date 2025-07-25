# OpenAPI\Client\BundlesAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateBundle()**](BundlesAdminApi.md#adminCreateBundle) | **POST** /v2/project/{project_id}/admin/items/bundle | Create bundle |
| [**adminDeleteBundle()**](BundlesAdminApi.md#adminDeleteBundle) | **DELETE** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Delete bundle |
| [**adminGetBundle()**](BundlesAdminApi.md#adminGetBundle) | **GET** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Get bundle |
| [**adminGetBundleList()**](BundlesAdminApi.md#adminGetBundleList) | **GET** /v2/project/{project_id}/admin/items/bundle | Get list of bundles (admin) |
| [**adminGetBundleListInGroupByExternalId()**](BundlesAdminApi.md#adminGetBundleListInGroupByExternalId) | **GET** /v2/project/{project_id}/admin/items/bundle/group/external_id/{external_id} | Get list of bundles by specified group external id |
| [**adminGetBundleListInGroupById()**](BundlesAdminApi.md#adminGetBundleListInGroupById) | **GET** /v2/project/{project_id}/admin/items/bundle/group/id/{group_id} | Get list of bundles by specified group id |
| [**adminHideBundle()**](BundlesAdminApi.md#adminHideBundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku}/hide | Hide bundle in catalog |
| [**adminShowBundle()**](BundlesAdminApi.md#adminShowBundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku}/show | Show bundle in catalog |
| [**adminUpdateBundle()**](BundlesAdminApi.md#adminUpdateBundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Update bundle |


## `adminCreateBundle()`

```php
adminCreateBundle($project_id, $bundles_admin_bundle_request): \OpenAPI\Client\Model\InlineObject8
```

Create bundle

Creates a bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$bundles_admin_bundle_request = {"sku":"com.xsolla.armour_chest_1","name":{"en":"Chest of armour","de":"Brustpanzer"},"is_enabled":true,"is_free":true,"order":1,"long_description":{"en":"Chest of armour for soldiers","de":"Brustpanzer für Soldaten"},"description":{"en":"Chest of armour for soldiers","de":"Brustpanzer für Soldaten"},"image_url":"https://picture.bundle-with-many-stuff.png","media_list":[{"type":"image","url":"https://test.com/image0"},{"type":"image","url":"https://test.com/image1"}],"groups":["chests"],"attributes":[{"external_id":"class","name":{"en":"Class"},"values":[{"external_id":"soldier","value":{"en":"Soldier"}},{"external_id":"officer","value":{"en":"Officer"}}]}],"prices":[{"currency":"USD","amount":"9.99","is_default":true,"is_enabled":true},{"currency":"EUR","amount":"9.99","is_default":false,"is_enabled":true}],"vc_prices":[],"content":[{"sku":"com.xsolla.iron_gloves_1","quantity":1},{"sku":"com.xsolla.iron_boots_1","quantity":1},{"sku":"com.xsolla.iron_shield_1","quantity":1},{"sku":"com.xsolla.iron_armour_1","quantity":1},{"sku":"com.xsolla.iron_helmet_1","quantity":1}],"limits":{"per_user":null,"per_item":null},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"type":"lootbox","purchased":0}}; // \OpenAPI\Client\Model\BundlesAdminBundleRequest | Object with bundle data.

try {
    $result = $apiInstance->adminCreateBundle($project_id, $bundles_admin_bundle_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminCreateBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **bundles_admin_bundle_request** | [**\OpenAPI\Client\Model\BundlesAdminBundleRequest**](../Model/BundlesAdminBundleRequest.md)| Object with bundle data. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteBundle()`

```php
adminDeleteBundle($project_id, $sku)
```

Delete bundle

Deletes a bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.

try {
    $apiInstance->adminDeleteBundle($project_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminDeleteBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |

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

## `adminGetBundle()`

```php
adminGetBundle($project_id, $sku, $promo_code): \OpenAPI\Client\Model\BundlesAdminBundleResponse
```

Get bundle

Gets the bundle within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetBundle($project_id, $sku, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminGetBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BundlesAdminBundleResponse**](../Model/BundlesAdminBundleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetBundleList()`

```php
adminGetBundleList($project_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject7
```

Get list of bundles (admin)

Gets the list of bundles within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetBundleList($project_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminGetBundleList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetBundleListInGroupByExternalId()`

```php
adminGetBundleListInGroupByExternalId($project_id, $external_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject7
```

Get list of bundles by specified group external id

Gets the list of bundles within a group for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 'all'; // string | Group external ID.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetBundleListInGroupByExternalId($project_id, $external_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminGetBundleListInGroupByExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Group external ID. | [default to &#39;all&#39;] |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetBundleListInGroupById()`

```php
adminGetBundleListInGroupById($project_id, $group_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject7
```

Get list of bundles by specified group id

Gets the list of bundles within a group for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$group_id = 10; // int | Group ID.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetBundleListInGroupById($project_id, $group_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminGetBundleListInGroupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **group_id** | **int**| Group ID. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminHideBundle()`

```php
adminHideBundle($project_id, $sku)
```

Hide bundle in catalog

Hides a bundle in a catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.

try {
    $apiInstance->adminHideBundle($project_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminHideBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |

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

## `adminShowBundle()`

```php
adminShowBundle($project_id, $sku)
```

Show bundle in catalog

Shows a bundle in a catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.

try {
    $apiInstance->adminShowBundle($project_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminShowBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |

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

## `adminUpdateBundle()`

```php
adminUpdateBundle($project_id, $sku, $bundles_admin_bundle_request)
```

Update bundle

Updates a bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.
$bundles_admin_bundle_request = {"sku":"com.xsolla.armour_chest_1","name":{"en":"Chest of armour","de":"Brustpanzer"},"is_enabled":true,"is_free":true,"order":1,"long_description":{"en":"Chest of armour for soldiers","de":"Brustpanzer für Soldaten"},"description":{"en":"Chest of armour for soldiers","de":"Brustpanzer für Soldaten"},"image_url":"https://picture.bundle-with-many-stuff.png","media_list":[{"type":"image","url":"https://test.com/image0"},{"type":"image","url":"https://test.com/image1"}],"groups":["chests"],"attributes":[{"external_id":"class","name":{"en":"Class"},"values":[{"external_id":"soldier","value":{"en":"Soldier"}},{"external_id":"officer","value":{"en":"Officer"}}]}],"prices":[{"currency":"USD","amount":"9.99","is_default":true,"is_enabled":true},{"currency":"EUR","amount":"9.99","is_default":false,"is_enabled":true}],"vc_prices":[],"content":[{"sku":"com.xsolla.iron_gloves_1","quantity":1},{"sku":"com.xsolla.iron_boots_1","quantity":1},{"sku":"com.xsolla.iron_shield_1","quantity":1},{"sku":"com.xsolla.iron_armour_1","quantity":1},{"sku":"com.xsolla.iron_helmet_1","quantity":1}],"limits":{"per_user":null,"per_item":null},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"type":"lootbox","purchased":0}}; // \OpenAPI\Client\Model\BundlesAdminBundleRequest | Object with bundle data.

try {
    $apiInstance->adminUpdateBundle($project_id, $sku, $bundles_admin_bundle_request);
} catch (Exception $e) {
    echo 'Exception when calling BundlesAdminApi->adminUpdateBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |
| **bundles_admin_bundle_request** | [**\OpenAPI\Client\Model\BundlesAdminBundleRequest**](../Model/BundlesAdminBundleRequest.md)| Object with bundle data. | |

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
