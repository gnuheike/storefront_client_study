# OpenAPI\Client\VirtualItemsCurrencyAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateVirtualCurrency()**](VirtualItemsCurrencyAdminApi.md#adminCreateVirtualCurrency) | **POST** /v2/project/{project_id}/admin/items/virtual_currency | Create virtual currency |
| [**adminCreateVirtualCurrencyPackage()**](VirtualItemsCurrencyAdminApi.md#adminCreateVirtualCurrencyPackage) | **POST** /v2/project/{project_id}/admin/items/virtual_currency/package | Create virtual currency package |
| [**adminCreateVirtualItem()**](VirtualItemsCurrencyAdminApi.md#adminCreateVirtualItem) | **POST** /v2/project/{project_id}/admin/items/virtual_items | Create virtual item |
| [**adminDeleteVirtualCurrency()**](VirtualItemsCurrencyAdminApi.md#adminDeleteVirtualCurrency) | **DELETE** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Delete virtual currency |
| [**adminDeleteVirtualCurrencyPackage()**](VirtualItemsCurrencyAdminApi.md#adminDeleteVirtualCurrencyPackage) | **DELETE** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Delete virtual currency package |
| [**adminDeleteVirtualItem()**](VirtualItemsCurrencyAdminApi.md#adminDeleteVirtualItem) | **DELETE** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Delete virtual item |
| [**adminGetVirtualCurrenciesList()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualCurrenciesList) | **GET** /v2/project/{project_id}/admin/items/virtual_currency | Get list of virtual currencies (admin) |
| [**adminGetVirtualCurrency()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualCurrency) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Get virtual currency |
| [**adminGetVirtualCurrencyPackage()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualCurrencyPackage) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Get virtual currency package |
| [**adminGetVirtualCurrencyPackagesList()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualCurrencyPackagesList) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/package | Get list of virtual currency packages (admin) |
| [**adminGetVirtualItem()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualItem) | **GET** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Get virtual item |
| [**adminGetVirtualItemsList()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualItemsList) | **GET** /v2/project/{project_id}/admin/items/virtual_items | Get list of virtual items (admin) |
| [**adminGetVirtualItemsListByGroupExternalId()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualItemsListByGroupExternalId) | **GET** /v2/project/{project_id}/admin/items/virtual_items/group/external_id/{external_id} | Get list of virtual items by specified group external id |
| [**adminGetVirtualItemsListByGroupId()**](VirtualItemsCurrencyAdminApi.md#adminGetVirtualItemsListByGroupId) | **GET** /v2/project/{project_id}/admin/items/virtual_items/group/id/{group_id} | Get list of virtual items by specified group id |
| [**adminUpdateVirtualCurrency()**](VirtualItemsCurrencyAdminApi.md#adminUpdateVirtualCurrency) | **PUT** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Update virtual currency |
| [**adminUpdateVirtualCurrencyPackage()**](VirtualItemsCurrencyAdminApi.md#adminUpdateVirtualCurrencyPackage) | **PUT** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Update virtual currency package |
| [**adminUpdateVirtualItem()**](VirtualItemsCurrencyAdminApi.md#adminUpdateVirtualItem) | **PUT** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Update virtual item |


## `adminCreateVirtualCurrency()`

```php
adminCreateVirtualCurrency($project_id, $virtual_items_currency_admin_create_virtual_currency): \OpenAPI\Client\Model\InlineObject64
```

Create virtual currency

Creates a virtual currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_items_currency_admin_create_virtual_currency = {"sku":"com.xsolla.coin_1","name":{"en-US":"Gold coin","de-DE":"Goldmünze"},"is_enabled":true,"is_free":false,"groups":["gold"],"order":1,"description":{"en-US":"The main currency of your kingdom","de-DE":"Die Hauptwährung deines Königreichs"},"prices":[{"amount":100,"currency":"USD","is_enabled":true,"is_default":true}],"attributes":[{"external_id":"material","name":{"en-US":"Material"},"values":[{"external_id":"gold","value":{"en-US":"Gold"}}]}],"limits":{"per_user":5,"per_item":10000},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency

try {
    $result = $apiInstance->adminCreateVirtualCurrency($project_id, $virtual_items_currency_admin_create_virtual_currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminCreateVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_items_currency_admin_create_virtual_currency** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency**](../Model/VirtualItemsCurrencyAdminCreateVirtualCurrency.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject64**](../Model/InlineObject64.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateVirtualCurrencyPackage()`

```php
adminCreateVirtualCurrencyPackage($project_id, $virtual_items_currency_admin_create_virtual_currency_package): \OpenAPI\Client\Model\InlineObject64
```

Create virtual currency package

Creates a virtual currency package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_items_currency_admin_create_virtual_currency_package = {"sku":"com.xsolla.novigrad_crown_500","name":{"en-US":"500x Novigradian crown","ru-RU":"500x Новиградских крон"},"is_enabled":true,"is_free":false,"groups":["witcher"],"order":1,"long_description":{"en-US":"Long Test new","ru-RU":"Длинное описание"},"description":{"en-US":"The Crown (also known as the Novigradian crown) is a monetary unit which is used in some Northern Kingdoms","ru-RU":"Крона (Также известна как Новиградская крона) - платежная единица, используемая в северных королевствах"},"image_url":"https://vignette.wikia.nocookie.net/witcher/images/7/7c/Items_Orens.png/revision/latest?cb=20081113120917","media_list":[{"type":"image","url":"https://test.com/image0"},{"type":"image","url":"https://test.com/image1"}],"attributes":[{"external_id":"event","name":{"en-US":"Event"},"values":[{"external_id":"10-anniversary","value":{"en-US":"10th anniversary"}},{"external_id":"christmas","value":{"en-US":"Christmas"}}]}],"prices":[{"currency":"USD","amount":99.99,"is_default":true},{"currency":"EUR","amount":80.03,"is_enabled":false}],"vc_prices":null,"content":[{"sku":"com.xsolla.novigrad_crown","quantity":500}],"limits":{"per_user":null,"per_item":null},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage

try {
    $result = $apiInstance->adminCreateVirtualCurrencyPackage($project_id, $virtual_items_currency_admin_create_virtual_currency_package);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminCreateVirtualCurrencyPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_items_currency_admin_create_virtual_currency_package** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage**](../Model/VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject64**](../Model/InlineObject64.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateVirtualItem()`

```php
adminCreateVirtualItem($project_id, $virtual_items_currency_admin_create_virtual_item): \OpenAPI\Client\Model\InlineObject64
```

Create virtual item

Creates a virtual item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_items_currency_admin_create_virtual_item = {"sku":"com.xsolla.sword_1","name":{"en":"Sword","de":"Schwert"},"is_enabled":true,"is_free":false,"groups":["weapons"],"order":1,"description":{"en":"A sword is a bladed melee weapon intended for cutting or thrusting that is longer than a knife or dagger, consisting of a long blade attached to a hilt.","de":"Ein Schwert ist eine Nahkampfwaffe mit Klinge, die zum Schneiden oder Stechen bestimmt ist, länger als ein Messer oder Dolch ist und aus einer langen Klinge besteht, die an einem Griff befestigt ist."},"prices":[{"amount":100,"currency":"USD","is_enabled":true,"is_default":true},{"amount":200,"currency":"CZK","country_iso":"CZ","is_enabled":false,"is_default":true}],"vc_prices":[],"is_show_in_store":true,"attributes":[{"external_id":"craft-materials","name":{"en":"Craft materials"},"values":[{"external_id":"steel","value":{"en-US":"5"}},{"external_id":"leather","value":{"en-US":"1"}}]}],"limits":{"per_user":5,"per_item":100},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem

try {
    $result = $apiInstance->adminCreateVirtualItem($project_id, $virtual_items_currency_admin_create_virtual_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminCreateVirtualItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_items_currency_admin_create_virtual_item** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem**](../Model/VirtualItemsCurrencyAdminCreateVirtualItem.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject64**](../Model/InlineObject64.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteVirtualCurrency()`

```php
adminDeleteVirtualCurrency($project_id, $virtual_currency_sku)
```

Delete virtual currency

Deletes a virtual currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_currency_sku = crystal; // string | Virtual currency SKU.

try {
    $apiInstance->adminDeleteVirtualCurrency($project_id, $virtual_currency_sku);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminDeleteVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_currency_sku** | **string**| Virtual currency SKU. | |

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

## `adminDeleteVirtualCurrencyPackage()`

```php
adminDeleteVirtualCurrencyPackage($project_id, $item_sku)
```

Delete virtual currency package

Deletes a virtual currency package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->adminDeleteVirtualCurrencyPackage($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminDeleteVirtualCurrencyPackage: ', $e->getMessage(), PHP_EOL;
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

## `adminDeleteVirtualItem()`

```php
adminDeleteVirtualItem($project_id, $item_sku)
```

Delete virtual item

Deletes a virtual item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->adminDeleteVirtualItem($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminDeleteVirtualItem: ', $e->getMessage(), PHP_EOL;
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

## `adminGetVirtualCurrenciesList()`

```php
adminGetVirtualCurrenciesList($project_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject65
```

Get list of virtual currencies (admin)

Gets the list of virtual currencies within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
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
    $result = $apiInstance->adminGetVirtualCurrenciesList($project_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualCurrenciesList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject65**](../Model/InlineObject65.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualCurrency()`

```php
adminGetVirtualCurrency($project_id, $virtual_currency_sku, $promo_code): \OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrency
```

Get virtual currency

Gets the virtual currency within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_currency_sku = crystal; // string | Virtual currency SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetVirtualCurrency($project_id, $virtual_currency_sku, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_currency_sku** | **string**| Virtual currency SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrency**](../Model/VirtualItemsCurrencyAdminVirtualCurrency.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualCurrencyPackage()`

```php
adminGetVirtualCurrencyPackage($project_id, $item_sku): \OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrencyPackage
```

Get virtual currency package

Gets the virtual currency package within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $result = $apiInstance->adminGetVirtualCurrencyPackage($project_id, $item_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualCurrencyPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualCurrencyPackage**](../Model/VirtualItemsCurrencyAdminVirtualCurrencyPackage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualCurrencyPackagesList()`

```php
adminGetVirtualCurrencyPackagesList($project_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject66
```

Get list of virtual currency packages (admin)

Gets the list of virtual currency packages within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
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
    $result = $apiInstance->adminGetVirtualCurrencyPackagesList($project_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualCurrencyPackagesList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject66**](../Model/InlineObject66.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualItem()`

```php
adminGetVirtualItem($project_id, $item_sku, $promo_code): \OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualItem
```

Get virtual item

Gets the virtual item within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetVirtualItem($project_id, $item_sku, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminVirtualItem**](../Model/VirtualItemsCurrencyAdminVirtualItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualItemsList()`

```php
adminGetVirtualItemsList($project_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject63
```

Get list of virtual items (admin)

Gets the list of virtual items within a project for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
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
    $result = $apiInstance->adminGetVirtualItemsList($project_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualItemsList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject63**](../Model/InlineObject63.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualItemsListByGroupExternalId()`

```php
adminGetVirtualItemsListByGroupExternalId($project_id, $external_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject63
```

Get list of virtual items by specified group external id

Gets the list of virtual items within a group for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
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
    $result = $apiInstance->adminGetVirtualItemsListByGroupExternalId($project_id, $external_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualItemsListByGroupExternalId: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject63**](../Model/InlineObject63.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetVirtualItemsListByGroupId()`

```php
adminGetVirtualItemsListByGroupId($project_id, $group_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject63
```

Get list of virtual items by specified group id

Gets the list of virtual items within a group for administration.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
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
    $result = $apiInstance->adminGetVirtualItemsListByGroupId($project_id, $group_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminGetVirtualItemsListByGroupId: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject63**](../Model/InlineObject63.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUpdateVirtualCurrency()`

```php
adminUpdateVirtualCurrency($project_id, $virtual_currency_sku, $virtual_items_currency_admin_create_virtual_currency)
```

Update virtual currency

Updates a virtual currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_currency_sku = crystal; // string | Virtual currency SKU.
$virtual_items_currency_admin_create_virtual_currency = {"sku":"com.xsolla.coin_1","name":{"en-US":"Gold coin","de-DE":"Goldmünze"},"is_enabled":true,"is_free":false,"groups":["gold"],"order":1,"description":{"en-US":"The main currency of your kingdom","de-DE":"Die Hauptwährung deines Königreichs"},"prices":[{"amount":100,"currency":"USD","is_enabled":true,"is_default":true}],"attributes":[{"external_id":"material","name":{"en-US":"Material"},"values":[{"external_id":"gold","value":{"en-US":"Gold"}}]}],"limits":{"per_user":5,"per_item":10000},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency

try {
    $apiInstance->adminUpdateVirtualCurrency($project_id, $virtual_currency_sku, $virtual_items_currency_admin_create_virtual_currency);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminUpdateVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_currency_sku** | **string**| Virtual currency SKU. | |
| **virtual_items_currency_admin_create_virtual_currency** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrency**](../Model/VirtualItemsCurrencyAdminCreateVirtualCurrency.md)|  | [optional] |

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

## `adminUpdateVirtualCurrencyPackage()`

```php
adminUpdateVirtualCurrencyPackage($project_id, $item_sku, $promo_code, $virtual_items_currency_admin_create_virtual_currency_package)
```

Update virtual currency package

Updates a virtual currency package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$virtual_items_currency_admin_create_virtual_currency_package = {"sku":"com.xsolla.novigrad_crown_500","name":{"en-US":"500x Novigradian crown","ru-RU":"500x Новиградских крон"},"is_enabled":true,"is_free":false,"groups":["witcher"],"order":1,"long_description":{"en-US":"Long Test new","ru-RU":"Длинное описание"},"description":{"en-US":"The Crown (also known as the Novigradian crown) is a monetary unit which is used in some Northern Kingdoms","ru-RU":"Крона (Также известна как Новиградская крона) - платежная единица, используемая в северных королевствах"},"image_url":"https://vignette.wikia.nocookie.net/witcher/images/7/7c/Items_Orens.png/revision/latest?cb=20081113120917","media_list":[{"type":"image","url":"https://test.com/image0"},{"type":"image","url":"https://test.com/image1"}],"attributes":[{"external_id":"event","name":{"en-US":"Event"},"values":[{"external_id":"10-anniversary","value":{"en-US":"10th anniversary"}},{"external_id":"christmas","value":{"en-US":"Christmas"}}]}],"prices":[{"currency":"USD","amount":99.99,"is_default":true},{"currency":"EUR","amount":80.03,"is_enabled":false}],"vc_prices":null,"content":[{"sku":"com.xsolla.novigrad_crown","quantity":500}],"limits":{"per_user":null,"per_item":null},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage

try {
    $apiInstance->adminUpdateVirtualCurrencyPackage($project_id, $item_sku, $promo_code, $virtual_items_currency_admin_create_virtual_currency_package);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminUpdateVirtualCurrencyPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **virtual_items_currency_admin_create_virtual_currency_package** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage**](../Model/VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage.md)|  | [optional] |

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

## `adminUpdateVirtualItem()`

```php
adminUpdateVirtualItem($project_id, $item_sku, $virtual_items_currency_admin_create_virtual_item)
```

Update virtual item

Updates a virtual item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$virtual_items_currency_admin_create_virtual_item = {"sku":"com.xsolla.sword_1","name":{"en":"Sword","de":"Schwert"},"is_enabled":true,"is_free":false,"groups":["weapons"],"order":1,"description":{"en":"A sword is a bladed melee weapon intended for cutting or thrusting that is longer than a knife or dagger, consisting of a long blade attached to a hilt.","de":"Ein Schwert ist eine Nahkampfwaffe mit Klinge, die zum Schneiden oder Stechen bestimmt ist, länger als ein Messer oder Dolch ist und aus einer langen Klinge besteht, die an einem Griff befestigt ist."},"prices":[{"amount":100,"currency":"USD","is_enabled":true,"is_default":true},{"amount":200,"currency":"CZK","country_iso":"CZ","is_enabled":false,"is_default":true}],"vc_prices":[],"is_show_in_store":true,"attributes":[{"external_id":"craft-materials","name":{"en":"Craft materials"},"values":[{"external_id":"steel","value":{"en-US":"5"}},{"external_id":"leather","value":{"en-US":"1"}}]}],"limits":{"per_user":5,"per_item":100},"periods":[{"date_from":"2020-08-11T10:00:00+03:00","date_until":"2020-08-11T20:00:00+03:00"}],"custom_attributes":{"purchased":0,"attr":"value"}}; // \OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem

try {
    $apiInstance->adminUpdateVirtualItem($project_id, $item_sku, $virtual_items_currency_admin_create_virtual_item);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyAdminApi->adminUpdateVirtualItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **virtual_items_currency_admin_create_virtual_item** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVirtualItem**](../Model/VirtualItemsCurrencyAdminCreateVirtualItem.md)|  | [optional] |

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
