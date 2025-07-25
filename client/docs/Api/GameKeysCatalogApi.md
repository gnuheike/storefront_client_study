# OpenAPI\Client\GameKeysCatalogApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDrmList()**](GameKeysCatalogApi.md#getDrmList) | **GET** /v2/project/{project_id}/items/game/drm | Get DRM list |
| [**getGameBySku()**](GameKeysCatalogApi.md#getGameBySku) | **GET** /v2/project/{project_id}/items/game/sku/{item_sku} | Get game for catalog |
| [**getGameKeyBySku()**](GameKeysCatalogApi.md#getGameKeyBySku) | **GET** /v2/project/{project_id}/items/game/key/sku/{item_sku} | Get game key for catalog |
| [**getGameKeysGroup()**](GameKeysCatalogApi.md#getGameKeysGroup) | **GET** /v2/project/{project_id}/items/game/key/group/{external_id} | Get game keys list by specified group |
| [**getGamesGroup()**](GameKeysCatalogApi.md#getGamesGroup) | **GET** /v2/project/{project_id}/items/game/group/{external_id} | Get games list by specified group |
| [**getGamesList()**](GameKeysCatalogApi.md#getGamesList) | **GET** /v2/project/{project_id}/items/game | Get games list |


## `getDrmList()`

```php
getDrmList($project_id): \OpenAPI\Client\Model\InlineObject28
```

Get DRM list

Gets the list of available DRMs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->getDrmList($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getDrmList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject28**](../Model/InlineObject28.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGameBySku()`

```php
getGameBySku($project_id, $item_sku, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\GetGameBySku200Response
```

Get game for catalog

Gets a game for the catalog.  <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = 'full_game_1'; // string | Item SKU.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getGameBySku($project_id, $item_sku, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getGameBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | [default to &#39;full_game_1&#39;] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\GetGameBySku200Response**](../Model/GetGameBySku200Response.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGameKeyBySku()`

```php
getGameKeyBySku($project_id, $item_sku, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\GetGameKeyBySku200Response
```

Get game key for catalog

Gets a game key for the catalog.  <div class=\"note\"><b>Note</b><br><br>This endpoint, accessible without authorization, returns generic data. However, authorization enriches the response with user-specific details for <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized result</a>, such as available user limits and promotions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = 'xsollus_basic_edition_steam'; // string | Item SKU.
$locale = 'en'; // string | Response language. Two-letter lowercase language code per ISO 639-1.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request.
$country = US; // string | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.
$show_inactive_time_limited_items = 1; // int | Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired.

try {
    $result = $apiInstance->getGameKeyBySku($project_id, $item_sku, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getGameKeyBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | [default to &#39;xsollus_basic_edition_steam&#39;] |
| **locale** | **string**| Response language. Two-letter lowercase language code per ISO 639-1. | [optional] [default to &#39;en&#39;] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. | [optional] |
| **country** | **string**| Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/) and [the process of determining the country](https://developers.xsolla.com/doc/shop-builder/features/pricing-policy/#pricing_policy_country_determination). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |
| **show_inactive_time_limited_items** | **int**| Shows time-limited items that are not available to the user. The validity period of such items has not started or has already expired. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\GetGameKeyBySku200Response**](../Model/GetGameKeyBySku200Response.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGameKeysGroup()`

```php
getGameKeysGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject27
```

Get game keys list by specified group

Gets a game key list from the specified group for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
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
    $result = $apiInstance->getGameKeysGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getGameKeysGroup: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject27**](../Model/InlineObject27.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGamesGroup()`

```php
getGamesGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject26
```

Get games list by specified group

Gets a games list from the specified group for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
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
    $result = $apiInstance->getGamesGroup($project_id, $external_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getGamesGroup: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject26**](../Model/InlineObject26.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGamesList()`

```php
getGamesList($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items): \OpenAPI\Client\Model\InlineObject26
```

Get games list

Gets a games list for building a catalog.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div> <br> <div class=\"note\"><b>Note</b><br><br>In general, the use of catalog of items is available without authorization.<br> Only authorized users can get <a href=\"https://developers.xsolla.com/doc/shop-builder/features/personalization/\" target=\"_blank\">a personalized catalog.</a></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysCatalogApi(
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
    $result = $apiInstance->getGamesList($project_id, $limit, $offset, $locale, $additional_fields, $country, $promo_code, $show_inactive_time_limited_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysCatalogApi->getGamesList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject26**](../Model/InlineObject26.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
