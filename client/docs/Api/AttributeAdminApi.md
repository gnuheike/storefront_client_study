# OpenAPI\Client\AttributeAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateAttribute()**](AttributeAdminApi.md#adminCreateAttribute) | **POST** /v2/project/{project_id}/admin/attribute | Create attribute |
| [**adminCreateAttributeValue()**](AttributeAdminApi.md#adminCreateAttributeValue) | **POST** /v2/project/{project_id}/admin/attribute/{external_id}/value | Create attribute value |
| [**adminDeleteAllAttributeValue()**](AttributeAdminApi.md#adminDeleteAllAttributeValue) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id}/value | Delete all values of attribute |
| [**adminDeleteAttributeValue()**](AttributeAdminApi.md#adminDeleteAttributeValue) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id}/value/{value_external_id} | Delete attribute value |
| [**adminGetAttribute()**](AttributeAdminApi.md#adminGetAttribute) | **GET** /v2/project/{project_id}/admin/attribute/{external_id} | Get specified attribute |
| [**adminGetAttributeList()**](AttributeAdminApi.md#adminGetAttributeList) | **GET** /v2/project/{project_id}/admin/attribute | Get list of attributes (admin) |
| [**adminUpdateAttribute()**](AttributeAdminApi.md#adminUpdateAttribute) | **PUT** /v2/project/{project_id}/admin/attribute/{external_id} | Update attribute |
| [**adminUpdateAttributeValue()**](AttributeAdminApi.md#adminUpdateAttributeValue) | **PUT** /v2/project/{project_id}/admin/attribute/{external_id}/value/{value_external_id} | Update attribute value |
| [**deleteAttribute()**](AttributeAdminApi.md#deleteAttribute) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id} | Delete attribute |


## `adminCreateAttribute()`

```php
adminCreateAttribute($project_id, $admin_create_attribute_request): \OpenAPI\Client\Model\InlineObject2
```

Create attribute

Creates an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_attribute_request = {"external_id":"genre","name":{"en":"Genre","de":"Genre"}}; // \OpenAPI\Client\Model\AdminCreateAttributeRequest

try {
    $result = $apiInstance->adminCreateAttribute($project_id, $admin_create_attribute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminCreateAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_attribute_request** | [**\OpenAPI\Client\Model\AdminCreateAttributeRequest**](../Model/AdminCreateAttributeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateAttributeValue()`

```php
adminCreateAttributeValue($project_id, $external_id, $request_attribute_value): \OpenAPI\Client\Model\InlineObject4
```

Create attribute value

Creates an attribute value.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of attribute values. The default and maximum value is <strong>20 values per attribute.</strong></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = attribute_id; // string | Attribute external ID.
$request_attribute_value = {"external_id":"weapon_class_sword_value","value":{"en":"Sword","de":"Schwert"}}; // \OpenAPI\Client\Model\RequestAttributeValue

try {
    $result = $apiInstance->adminCreateAttributeValue($project_id, $external_id, $request_attribute_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminCreateAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Attribute external ID. | |
| **request_attribute_value** | [**\OpenAPI\Client\Model\RequestAttributeValue**](../Model/RequestAttributeValue.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteAllAttributeValue()`

```php
adminDeleteAllAttributeValue($project_id, $external_id)
```

Delete all values of attribute

Deletes all values of the attribute. <div class=\"notice\"><strong>Notice</strong><br><br>If you delete an attribute's value, all connections between the attribute and items will be lost. To change the attribute value for an item, use the <a href=\"https://developers.xsolla.com/api/shop-builder/operation/admin-update-attribute-value/\" target=\"_blank\">Update attribute value</a> API call instead of deleting the value and creating a new one.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = attribute_id; // string | Attribute external ID.

try {
    $apiInstance->adminDeleteAllAttributeValue($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminDeleteAllAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Attribute external ID. | |

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

## `adminDeleteAttributeValue()`

```php
adminDeleteAttributeValue($project_id, $value_external_id, $external_id)
```

Delete attribute value

Deletes an attribute value. <div class=\"notice\"><strong>Notice</strong><br><br>If you delete an attribute's value, all connections  between the attribute and items will be lost. To change the attribute value for an item, use the <a href=\"https://developers.xsolla.com/api/shop-builder/operation/admin-update-attribute-value/\" target=\"_blank\">Update attribute value</a> API call instead of deleting the value and creating a new one.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_external_id = value_id; // string | Attribute value external ID.
$external_id = attribute_id; // string | Attribute external ID.

try {
    $apiInstance->adminDeleteAttributeValue($project_id, $value_external_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminDeleteAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_external_id** | **string**| Attribute value external ID. | |
| **external_id** | **string**| Attribute external ID. | |

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

## `adminGetAttribute()`

```php
adminGetAttribute($project_id, $external_id): \OpenAPI\Client\Model\AdminAttributeResponse
```

Get specified attribute

Gets a specified attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = attribute_id; // string | Attribute external ID.

try {
    $result = $apiInstance->adminGetAttribute($project_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminGetAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Attribute external ID. | |

### Return type

[**\OpenAPI\Client\Model\AdminAttributeResponse**](../Model/AdminAttributeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetAttributeList()`

```php
adminGetAttributeList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject
```

Get list of attributes (admin)

Gets the list of attributes from a project for administration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->adminGetAttributeList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminGetAttributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUpdateAttribute()`

```php
adminUpdateAttribute($project_id, $external_id, $admin_create_attribute_request)
```

Update attribute

Updates an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = attribute_id; // string | Attribute external ID.
$admin_create_attribute_request = {"external_id":"genre","name":{"en":"Genre","de":"Genre"}}; // \OpenAPI\Client\Model\AdminCreateAttributeRequest

try {
    $apiInstance->adminUpdateAttribute($project_id, $external_id, $admin_create_attribute_request);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminUpdateAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Attribute external ID. | |
| **admin_create_attribute_request** | [**\OpenAPI\Client\Model\AdminCreateAttributeRequest**](../Model/AdminCreateAttributeRequest.md)|  | [optional] |

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

## `adminUpdateAttributeValue()`

```php
adminUpdateAttributeValue($project_id, $value_external_id, $external_id, $request_attribute_value)
```

Update attribute value

Updates an attribute values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$value_external_id = value_id; // string | Attribute value external ID.
$external_id = attribute_id; // string | Attribute external ID.
$request_attribute_value = {"external_id":"weapon_class_sword_value","value":{"en":"Sword","de":"Schwert"}}; // \OpenAPI\Client\Model\RequestAttributeValue

try {
    $apiInstance->adminUpdateAttributeValue($project_id, $value_external_id, $external_id, $request_attribute_value);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminUpdateAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **value_external_id** | **string**| Attribute value external ID. | |
| **external_id** | **string**| Attribute external ID. | |
| **request_attribute_value** | [**\OpenAPI\Client\Model\RequestAttributeValue**](../Model/RequestAttributeValue.md)|  | [optional] |

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

## `deleteAttribute()`

```php
deleteAttribute($project_id, $external_id)
```

Delete attribute

Deletes an attribute. <div class=\"notice\"><strong>Notice</strong><br><br>If you delete an item attribute, all its data and connections with items will be lost.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = attribute_id; // string | Attribute external ID.

try {
    $apiInstance->deleteAttribute($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Attribute external ID. | |

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
