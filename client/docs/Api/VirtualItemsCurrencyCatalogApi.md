# OpenAPI\Client\VirtualItemsCurrencyCatalogApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllVirtualItems()**](VirtualItemsCurrencyCatalogApi.md#getAllVirtualItems) | **GET** /v2/project/{project_id}/items/virtual_items/all | Get all virtual items list |
| [**getItemGroups()**](VirtualItemsCurrencyCatalogApi.md#getItemGroups) | **GET** /v2/project/{project_id}/items/groups | Get item group list |
| [**getVirtualCurrency()**](VirtualItemsCurrencyCatalogApi.md#getVirtualCurrency) | **GET** /v2/project/{project_id}/items/virtual_currency | Get virtual currency list |
| [**getVirtualCurrencyPackage()**](VirtualItemsCurrencyCatalogApi.md#getVirtualCurrencyPackage) | **GET** /v2/project/{project_id}/items/virtual_currency/package | Get virtual currency package list |
| [**getVirtualCurrencyPackageSku()**](VirtualItemsCurrencyCatalogApi.md#getVirtualCurrencyPackageSku) | **GET** /v2/project/{project_id}/items/virtual_currency/package/sku/{virtual_currency_package_sku} | Get virtual currency package by SKU |
| [**getVirtualCurrencySku()**](VirtualItemsCurrencyCatalogApi.md#getVirtualCurrencySku) | **GET** /v2/project/{project_id}/items/virtual_currency/sku/{virtual_currency_sku} | Get virtual currency by SKU |
| [**getVirtualItems()**](VirtualItemsCurrencyCatalogApi.md#getVirtualItems) | **GET** /v2/project/{project_id}/items/virtual_items | Get virtual items list |
| [**getVirtualItemsGroup()**](VirtualItemsCurrencyCatalogApi.md#getVirtualItemsGroup) | **GET** /v2/project/{project_id}/items/virtual_items/group/{external_id} | Get items list by specified group |
| [**getVirtualItemsSku()**](VirtualItemsCurrencyCatalogApi.md#getVirtualItemsSku) | **GET** /v2/project/{project_id}/items/virtual_items/sku/{item_sku} | Get virtual item by SKU |


## `getAllVirtualItems()`

```php
getAllVirtualItems($project_id, $locale, $promo_code): \OpenAPI\Client\Model\InlineObject67
```

Get all virtual items list

Gets a list of all virtual items for searching on client-side.  <div class=\"notice\"><strong>Attention</strong><br><br>Returns only item SKU, name, groups and description</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->getAllVirtualItems($project_id, $locale, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getAllVirtualItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject67**](../Model/InlineObject67.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemGroups()`

```php
getItemGroups($project_id, $promo_code): \OpenAPI\Client\Model\InlineObject70
```

Get item group list

Gets an item group list for building a catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->getItemGroups($project_id, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getItemGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject70**](../Model/InlineObject70.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualCurrency()`

```php
getVirtualCurrency($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyList
```

Get virtual currency list

Gets a virtual currency list for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualCurrency($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyList**](../Model/VirtualItemsCurrencyVirtualCurrencyList.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualCurrencyPackage()`

```php
getVirtualCurrencyPackage($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackages
```

Get virtual currency package list

Gets a virtual currency packages list for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualCurrencyPackage($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualCurrencyPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackages**](../Model/VirtualItemsCurrencyVirtualCurrencyPackages.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualCurrencyPackageSku()`

```php
getVirtualCurrencyPackageSku($project_id, $virtual_currency_package_sku, $locale, $country, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackage
```

Get virtual currency package by SKU

Gets a virtual currency packages by SKU for building a catalog. <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_currency_package_sku = crystal-pack; // string | Virtual currency package SKU.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualCurrencyPackageSku($project_id, $virtual_currency_package_sku, $locale, $country, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualCurrencyPackageSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_currency_package_sku** | **string**| Virtual currency package SKU. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackage**](../Model/VirtualItemsCurrencyVirtualCurrencyPackage.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualCurrencySku()`

```php
getVirtualCurrencySku($project_id, $virtual_currency_sku, $locale, $country, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrency
```

Get virtual currency by SKU

Gets a virtual currency by SKU for building a catalog. <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$virtual_currency_sku = crystal; // string | Virtual currency SKU.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualCurrencySku($project_id, $virtual_currency_sku, $locale, $country, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualCurrencySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **virtual_currency_sku** | **string**| Virtual currency SKU. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrency**](../Model/VirtualItemsCurrencyVirtualCurrency.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualItems()`

```php
getVirtualItems($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyItemList
```

Get virtual items list

Gets a virtual items list for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualItems($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyItemList**](../Model/VirtualItemsCurrencyItemList.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualItemsGroup()`

```php
getVirtualItemsGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject68
```

Get items list by specified group

Gets an items list from the specified group for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 'all'; // string | Group external ID.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualItemsGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualItemsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Group external ID. | [default to &#39;all&#39;] |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\InlineObject68**](../Model/InlineObject68.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualItemsSku()`

```php
getVirtualItemsSku($project_id, $item_sku, $locale, $country, $show_inactive_time_limited_items): \OpenAPI\Client\Model\VirtualItemsCurrencyItem
```

Get virtual item by SKU

Gets a virtual item by SKU for building a catalog. <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualItemsCurrencyCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getVirtualItemsSku($project_id, $item_sku, $locale, $country, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualItemsCurrencyCatalogApi->getVirtualItemsSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\VirtualItemsCurrencyItem**](../Model/VirtualItemsCurrencyItem.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
