# OpenAPI\Client\PersonalizedCatalogApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFilterRule()**](PersonalizedCatalogApi.md#createFilterRule) | **POST** /v2/project/{project_id}/admin/user/attribute/rule | Create catalog filter rule |
| [**deleteFilterRuleById()**](PersonalizedCatalogApi.md#deleteFilterRuleById) | **DELETE** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Delete catalog filter rule |
| [**getAllFilterRules()**](PersonalizedCatalogApi.md#getAllFilterRules) | **GET** /v2/project/{project_id}/admin/user/attribute/rule/all | Get all catalog rules for searching on client-side |
| [**getFilterRuleById()**](PersonalizedCatalogApi.md#getFilterRuleById) | **GET** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Get catalog filter rule |
| [**getFilterRules()**](PersonalizedCatalogApi.md#getFilterRules) | **GET** /v2/project/{project_id}/admin/user/attribute/rule | Get list of catalog filter rules |
| [**patchFilterRuleById()**](PersonalizedCatalogApi.md#patchFilterRuleById) | **PATCH** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Patch catalog filter rule |
| [**updateFilterRuleById()**](PersonalizedCatalogApi.md#updateFilterRuleById) | **PUT** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Update catalog filter rule |


## `createFilterRule()`

```php
createFilterRule($project_id, $user_attribute_personalized_catalog_body_required): \OpenAPI\Client\Model\CreateFilterRule201Response
```

Create catalog filter rule

Create rule for user attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$user_attribute_personalized_catalog_body_required = {"name":"Ork race armor rule","is_enabled":true,"attribute_conditions":[{"attribute":"race","operator":"eq","value":"ork","type":"string","can_be_missing":false}],"items":[{"item_id":1}],"is_satisfied_for_unauth":false}; // \OpenAPI\Client\Model\UserAttributePersonalizedCatalogBodyRequired

try {
    $result = $apiInstance->createFilterRule($project_id, $user_attribute_personalized_catalog_body_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->createFilterRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **user_attribute_personalized_catalog_body_required** | [**\OpenAPI\Client\Model\UserAttributePersonalizedCatalogBodyRequired**](../Model/UserAttributePersonalizedCatalogBodyRequired.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateFilterRule201Response**](../Model/CreateFilterRule201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFilterRuleById()`

```php
deleteFilterRuleById($project_id, $rule_id)
```

Delete catalog filter rule

Deletes a specific rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$rule_id = 1; // float | Rule ID.

try {
    $apiInstance->deleteFilterRuleById($project_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->deleteFilterRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **rule_id** | **float**| Rule ID. | |

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

## `getAllFilterRules()`

```php
getAllFilterRules($project_id): \OpenAPI\Client\Model\GetAllFilterRules200Response
```

Get all catalog rules for searching on client-side

Gets a list of all catalog rules for searching on the client-side. <div class=\"notice\"><strong>Attention</strong><br><br>Returns only rule id, name and is_enabled</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->getAllFilterRules($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->getAllFilterRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\GetAllFilterRules200Response**](../Model/GetAllFilterRules200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilterRuleById()`

```php
getFilterRuleById($project_id, $rule_id): \OpenAPI\Client\Model\UserAttributePersonalizedCatalog
```

Get catalog filter rule

Get specific rule applying to user attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$rule_id = 1; // float | Rule ID.

try {
    $result = $apiInstance->getFilterRuleById($project_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->getFilterRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **rule_id** | **float**| Rule ID. | |

### Return type

[**\OpenAPI\Client\Model\UserAttributePersonalizedCatalog**](../Model/UserAttributePersonalizedCatalog.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilterRules()`

```php
getFilterRules($project_id, $limit, $offset, $is_enabled): \OpenAPI\Client\Model\GetFilterRules200Response
```

Get list of catalog filter rules

Gets all rules applying to user attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$is_enabled = 56; // int | Filter elements by `is_enabled` flag.

try {
    $result = $apiInstance->getFilterRules($project_id, $limit, $offset, $is_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->getFilterRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **is_enabled** | **int**| Filter elements by &#x60;is_enabled&#x60; flag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetFilterRules200Response**](../Model/GetFilterRules200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFilterRuleById()`

```php
patchFilterRuleById($project_id, $rule_id, $user_attribute_personalized_catalog_body)
```

Patch catalog filter rule

Updates a specific rule applying to user attributes. The current value will be used for a not specified property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$rule_id = 1; // float | Rule ID.
$user_attribute_personalized_catalog_body = {"is_enabled":false}; // \OpenAPI\Client\Model\UserAttributePersonalizedCatalogBody

try {
    $apiInstance->patchFilterRuleById($project_id, $rule_id, $user_attribute_personalized_catalog_body);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->patchFilterRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **rule_id** | **float**| Rule ID. | |
| **user_attribute_personalized_catalog_body** | [**\OpenAPI\Client\Model\UserAttributePersonalizedCatalogBody**](../Model/UserAttributePersonalizedCatalogBody.md)|  | [optional] |

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

## `updateFilterRuleById()`

```php
updateFilterRuleById($project_id, $rule_id, $user_attribute_personalized_catalog_body_required)
```

Update catalog filter rule

Updates a specific rule applying to user attributes. The default value will be used for a not specified property (if property is not required).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PersonalizedCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$rule_id = 1; // float | Rule ID.
$user_attribute_personalized_catalog_body_required = {"name":"Ork race armor rule","is_enabled":true,"attribute_conditions":[{"attribute":"race","operator":"eq","value":"ork","type":"string","can_be_missing":false}],"items":[{"item_id":1}],"is_satisfied_for_unauth":false}; // \OpenAPI\Client\Model\UserAttributePersonalizedCatalogBodyRequired

try {
    $apiInstance->updateFilterRuleById($project_id, $rule_id, $user_attribute_personalized_catalog_body_required);
} catch (Exception $e) {
    echo 'Exception when calling PersonalizedCatalogApi->updateFilterRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **rule_id** | **float**| Rule ID. | |
| **user_attribute_personalized_catalog_body_required** | [**\OpenAPI\Client\Model\UserAttributePersonalizedCatalogBodyRequired**](../Model/UserAttributePersonalizedCatalogBodyRequired.md)|  | [optional] |

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
