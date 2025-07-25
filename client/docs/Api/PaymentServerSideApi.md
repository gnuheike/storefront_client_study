# OpenAPI\Client\PaymentServerSideApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreatePaymentToken()**](PaymentServerSideApi.md#adminCreatePaymentToken) | **POST** /v3/project/{project_id}/admin/payment/token | Create payment token for purchase |


## `adminCreatePaymentToken()`

```php
adminCreatePaymentToken($project_id, $admin_create_payment_token_request): \OpenAPI\Client\Model\InlineObject21
```

Create payment token for purchase

Generates an order and a payment token for it. The order is generated based on the items passed in the request body.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\"><strong>Notice</strong>    <br><br>    <code>user.country.value</code> parameter is used to select a currency for the order. If user's country is unknown, providing the user's IP in <code>X-User-Ip</code> header is an alternative option. <br> One of these two options is required for the correct work of this method. <br> The selected currency is used for payment methods at <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a></b>.    </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentServerSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_payment_token_request = {"user":{"id":{"value":"user-id"},"name":{"value":"user-name"},"email":{"value":"user@xsolla.com"},"country":{"value":"US","allow_modify":false}},"purchase":{"items":[{"sku":"com.xsolla.cup01","quantity":2},{"sku":"com.xsolla.t-shirt01","quantity":1},{"sku":"com.xsolla.cup01","quantity":1},{"sku":"com.xsolla.hat01","quantity":1}]},"settings":{"language":"de","external_id":"AABBCCDD01","currency":"USD","payment_method":1380,"return_url":"https://developers.xsolla.com/","ui":{"theme":"63295aab2e47fab76f7708e3"}}}; // \OpenAPI\Client\Model\AdminCreatePaymentTokenRequest

try {
    $result = $apiInstance->adminCreatePaymentToken($project_id, $admin_create_payment_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServerSideApi->adminCreatePaymentToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_payment_token_request** | [**\OpenAPI\Client\Model\AdminCreatePaymentTokenRequest**](../Model/AdminCreatePaymentTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject21**](../Model/InlineObject21.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
