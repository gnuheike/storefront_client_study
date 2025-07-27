# OpenAPI\Client\OfferChainAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateOfferChain()**](OfferChainAdminApi.md#adminCreateOfferChain) | **POST** /v2/project/{project_id}/admin/offer_chain | Create offer chain |
| [**adminDeleteOfferChain()**](OfferChainAdminApi.md#adminDeleteOfferChain) | **DELETE** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Delete offer chain |
| [**adminGetOfferChain()**](OfferChainAdminApi.md#adminGetOfferChain) | **GET** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Get offer chain |
| [**adminGetOfferChains()**](OfferChainAdminApi.md#adminGetOfferChains) | **GET** /v2/project/{project_id}/admin/offer_chain | Get list of offer chains |
| [**adminToggleOfferChain()**](OfferChainAdminApi.md#adminToggleOfferChain) | **PUT** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id}/toggle | Toggle offer chain |
| [**adminUpdateOfferChain()**](OfferChainAdminApi.md#adminUpdateOfferChain) | **PUT** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Update offer chain |


## `adminCreateOfferChain()`

```php
adminCreateOfferChain($project_id, $create_offer_chain_model): \OpenAPI\Client\Model\InlineObject95
```

Create offer chain

Creates an offer chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_offer_chain_model = {"name":{"en":"New offer chain","ru":"Новая цепочка товаров"},"description":{"en":"New offer chain short description"},"order":4,"date_start":"2023-04-15T18:16:00+05:00","date_end":null,"recurrent_schedule":null,"is_enabled":true,"steps":[{"step_number":1,"is_free":false,"items":[{"sku":"vg_enabled_shown_in_store_1","quantity":2}]},{"step_number":2,"is_free":false,"items":[{"sku":"bundle_enabled_shown_in_store_with_2_enabled_shown_in_store_vg","quantity":2}]},{"step_number":3,"is_free":false,"items":[{"sku":"vcp_enabled_shown_in_store_1_of_10_vc_enabled_shown_in_store_1","quantity":2}]},{"step_number":4,"is_free":true,"items":[{"sku":"vg_enabled_shown_in_store_1","quantity":1}]},{"step_number":5,"is_free":true,"items":[{"sku":"bundle_enabled_shown_in_store_with_2_enabled_shown_in_store_vg","quantity":1}]},{"step_number":6,"is_free":true,"items":[{"sku":"vcp_enabled_shown_in_store_1_of_10_vc_enabled_shown_in_store_1","quantity":1}]}]}; // \OpenAPI\Client\Model\CreateOfferChainModel

try {
    $result = $apiInstance->adminCreateOfferChain($project_id, $create_offer_chain_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminCreateOfferChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_offer_chain_model** | [**\OpenAPI\Client\Model\CreateOfferChainModel**](../Model/CreateOfferChainModel.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject95**](../Model/InlineObject95.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteOfferChain()`

```php
adminDeleteOfferChain($project_id, $offer_chain_id)
```

Delete offer chain

Deletes a particular offer chain.  After deletion:<ul><li>All rewards already received by users are retained.</li><li>Uncompleted steps become unavailable, and their rewards can no longer be obtained.</li></ul>  Unlike disabling the offer chain via the <a href=\"/api/shop-builder/operation/admin-toggle-offer-chain\">Toggle offer chain</a> call, deletion is irreversible and user progress is not preserved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.

try {
    $apiInstance->adminDeleteOfferChain($project_id, $offer_chain_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminDeleteOfferChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |

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

## `adminGetOfferChain()`

```php
adminGetOfferChain($project_id, $offer_chain_id): \OpenAPI\Client\Model\AdminOfferChainLongModel
```

Get offer chain

Gets a particular offer chain for administration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.

try {
    $result = $apiInstance->adminGetOfferChain($project_id, $offer_chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminGetOfferChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |

### Return type

[**\OpenAPI\Client\Model\AdminOfferChainLongModel**](../Model/AdminOfferChainLongModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetOfferChains()`

```php
adminGetOfferChains($project_id, $limit, $offset, $enabled): \OpenAPI\Client\Model\InlineObject94
```

Get list of offer chains

Gets list of offer chains for administration. <div class=\"notice\"><strong>Notice</strong><br><br>All projects have a limit on to the number of items that can be returned in a single response. The default and maximum value is <strong>10 items per response</strong>. To get more data, use the <code>limit</code> and <code>offset</code> query parameters for pagination.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
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
    $result = $apiInstance->adminGetOfferChains($project_id, $limit, $offset, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminGetOfferChains: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject94**](../Model/InlineObject94.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminToggleOfferChain()`

```php
adminToggleOfferChain($project_id, $offer_chain_id)
```

Toggle offer chain

Enables or disables an offer chain.  When the offer chain is disabled, users temporarily lose access to it, but their progress is preserved.  After the offer chain is re-enabled, users can continue from the step where they left off.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.

try {
    $apiInstance->adminToggleOfferChain($project_id, $offer_chain_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminToggleOfferChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |

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

## `adminUpdateOfferChain()`

```php
adminUpdateOfferChain($project_id, $offer_chain_id, $modify_offer_chain_model)
```

Update offer chain

Updates a particular offer chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OfferChainAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.
$modify_offer_chain_model = {"name":{"en":"Updated offer chain","ru":"Обновленная цепочка товаров"},"description":{"en":"Updated offer chain description"},"order":4,"date_start":"2023-04-15T18:16:00+05:00","date_end":null,"is_enabled":true,"steps":[{"step_number":1,"is_free":false,"items":[{"sku":"vg_enabled_shown_in_store_1","quantity":1}]},{"step_number":2,"is_free":false,"items":[{"sku":"vg_enabled_shown_in_store_2","quantity":1}]},{"step_id":10,"step_number":3,"is_free":true,"items":[{"sku":"vg_not_shown_in_store","quantity":1}]},{"step_id":8,"step_number":4,"is_free":false,"items":[{"sku":"bundle_enabled_shown_in_store_with_2_enabled_shown_in_store_vg","quantity":1}]},{"step_number":5,"is_free":true,"items":[{"sku":"vcp_enabled_shown_in_store_1_of_10_vc_enabled_shown_in_store_1","quantity":1}]}]}; // \OpenAPI\Client\Model\ModifyOfferChainModel

try {
    $apiInstance->adminUpdateOfferChain($project_id, $offer_chain_id, $modify_offer_chain_model);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainAdminApi->adminUpdateOfferChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |
| **modify_offer_chain_model** | [**\OpenAPI\Client\Model\ModifyOfferChainModel**](../Model/ModifyOfferChainModel.md)|  | [optional] |

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
