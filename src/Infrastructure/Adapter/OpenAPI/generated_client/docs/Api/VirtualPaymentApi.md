# OpenAPI\Client\VirtualPaymentApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrderWithItemForVirtualCurrency()**](VirtualPaymentApi.md#createOrderWithItemForVirtualCurrency) | **POST** /v2/project/{project_id}/payment/item/{item_sku}/virtual/{virtual_currency_sku} | Create order with specified item purchased by virtual currency |


## `createOrderWithItemForVirtualCurrency()`

```php
createOrderWithItemForVirtualCurrency($project_id, $item_sku, $virtual_currency_sku, $platform, $create_order_with_item_for_virtual_currency_request): \OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response
```

Create order with specified item purchased by virtual currency

Creates item purchase using virtual currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VirtualPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$virtual_currency_sku = crystal; // string | Virtual currency SKU.
$platform = 'xsolla'; // string | Publishing platform the user plays on: `xsolla` (default), `playstation_network`, `xbox_live`, `pc_standalone`, `nintendo_shop`, `google_play`, `app_store_ios`, `android_standalone`, `ios_standalone`, `android_other`, `ios_other`, `pc_other`.
$create_order_with_item_for_virtual_currency_request = {"custom_parameters":{"array_param":[{"object1":{"param":"https://xsolla.com"},"property":{"int_property":112,"string_property":"xsolla"}},{"object2":{"param":"https://developers.xsolla.com"},"property":{"int_property":112,"string_property":"email@example.com"}}],"object_param":{"key":"value"},"bool_param":true,"int_param":100,"null_param":null}}; // \OpenAPI\Client\Model\CreateOrderWithItemForVirtualCurrencyRequest

try {
    $result = $apiInstance->createOrderWithItemForVirtualCurrency($project_id, $item_sku, $virtual_currency_sku, $platform, $create_order_with_item_for_virtual_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualPaymentApi->createOrderWithItemForVirtualCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **virtual_currency_sku** | **string**| Virtual currency SKU. | |
| **platform** | **string**| Publishing platform the user plays on: &#x60;xsolla&#x60; (default), &#x60;playstation_network&#x60;, &#x60;xbox_live&#x60;, &#x60;pc_standalone&#x60;, &#x60;nintendo_shop&#x60;, &#x60;google_play&#x60;, &#x60;app_store_ios&#x60;, &#x60;android_standalone&#x60;, &#x60;ios_standalone&#x60;, &#x60;android_other&#x60;, &#x60;ios_other&#x60;, &#x60;pc_other&#x60;. | [optional] [default to &#39;xsolla&#39;] |
| **create_order_with_item_for_virtual_currency_request** | [**\OpenAPI\Client\Model\CreateOrderWithItemForVirtualCurrencyRequest**](../Model/CreateOrderWithItemForVirtualCurrencyRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response**](../Model/ClaimUserOfferChainStepReward200Response.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
