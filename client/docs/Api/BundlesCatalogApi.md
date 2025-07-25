# OpenAPI\Client\BundlesCatalogApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBundle()**](BundlesCatalogApi.md#getBundle) | **GET** /v2/project/{project_id}/items/bundle/sku/{sku} | Get specified bundle |
| [**getBundleList()**](BundlesCatalogApi.md#getBundleList) | **GET** /v2/project/{project_id}/items/bundle | Get list of bundles |
| [**getBundleListInGroup()**](BundlesCatalogApi.md#getBundleListInGroup) | **GET** /v2/project/{project_id}/items/bundle/group/{external_id} | Get list of bundles by specified group |


## `getBundle()`

```php
getBundle($project_id, $sku, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\BundlesClientBundle
```

Get specified bundle

Gets a specified bundle.  <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundlesCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$sku = kg_1; // string | Bundle SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getBundle($project_id, $sku, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesCatalogApi->getBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **sku** | **string**| Bundle SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\BundlesClientBundle**](../Model/BundlesClientBundle.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBundleList()`

```php
getBundleList($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject9
```

Get list of bundles

Gets a list of bundles for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong></div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundlesCatalogApi(
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
    $result = $apiInstance->getBundleList($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesCatalogApi->getBundleList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBundleListInGroup()`

```php
getBundleListInGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject9
```

Get list of bundles by specified group

Gets a list of bundles within a group for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong></div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundlesCatalogApi(
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
    $result = $apiInstance->getBundleListInGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesCatalogApi->getBundleListInGroup: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
