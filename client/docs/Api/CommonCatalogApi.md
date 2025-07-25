# OpenAPI\Client\CommonCatalogApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSellableItemById()**](CommonCatalogApi.md#getSellableItemById) | **GET** /v2/project/{project_id}/items/id/{item_id} | Get sellable item by ID |
| [**getSellableItemBySku()**](CommonCatalogApi.md#getSellableItemBySku) | **GET** /v2/project/{project_id}/items/sku/{sku} | Get sellable item by SKU |
| [**getSellableItems()**](CommonCatalogApi.md#getSellableItems) | **GET** /v2/project/{project_id}/items | Get sellable items list |
| [**getSellableItemsGroup()**](CommonCatalogApi.md#getSellableItemsGroup) | **GET** /v2/project/{project_id}/items/group/{external_id} | Get sellable items list by specified group |


## `getSellableItemById()`

```php
getSellableItemById($project_id, $item_id, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject73
```

Get sellable item by ID

Gets a sellable item by its ID. <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommonCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 59080; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 259774; // string | Item ID.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getSellableItemById($project_id, $item_id, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonCatalogApi->getSellableItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\InlineObject73**](../Model/InlineObject73.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellableItemBySku()`

```php
getSellableItemBySku($project_id, $sku, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject73
```

Get sellable item by SKU

Gets a sellable item by SKU for building a catalog. <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommonCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 59080; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = electric_shield; // string | Item SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getSellableItemBySku($project_id, $sku, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonCatalogApi->getSellableItemBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Item SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\InlineObject73**](../Model/InlineObject73.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellableItems()`

```php
getSellableItems($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject72
```

Get sellable items list

Gets a sellable items list for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommonCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 59080; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getSellableItems($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonCatalogApi->getSellableItems: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject72**](../Model/InlineObject72.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellableItemsGroup()`

```php
getSellableItemsGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject76
```

Get sellable items list by specified group

Gets a sellable items list from the specified group for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommonCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 59080; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 'armour'; // string | Group external ID.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getSellableItemsGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonCatalogApi->getSellableItemsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **string**| Group external ID. | [default to &#39;armour&#39;] |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\InlineObject76**](../Model/InlineObject76.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
