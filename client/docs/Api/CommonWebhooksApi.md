# OpenAPI\Client\CommonWebhooksApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebhook()**](CommonWebhooksApi.md#getWebhook) | **GET** /v2/project/{project_id}/admin/webhook | Get information about webhook settings |
| [**updateWebhook()**](CommonWebhooksApi.md#updateWebhook) | **PUT** /v2/project/{project_id}/admin/webhook | Update information about webhook settings |


## `getWebhook()`

```php
getWebhook($project_id): \OpenAPI\Client\Model\GetWebhook200Response
```

Get information about webhook settings

Gets the information about the webhook settings in Store. Check webhooks [documentation](https://developers.xsolla.com/doc/shop-builder/integration-guide/set-up-webhooks/) to learn more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->getWebhook($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonWebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\GetWebhook200Response**](../Model/GetWebhook200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($project_id, $update_webhook_request)
```

Update information about webhook settings

Updates the information about the webhook settings in Store. Check webhooks [documentation](/doc/shop-builder/integration-guide/set-up-webhooks/) to learn more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$update_webhook_request = new \OpenAPI\Client\Model\UpdateWebhookRequest(); // \OpenAPI\Client\Model\UpdateWebhookRequest | Information about webhook settings.

try {
    $apiInstance->updateWebhook($project_id, $update_webhook_request);
} catch (Exception $e) {
    echo 'Exception when calling CommonWebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **update_webhook_request** | [**\OpenAPI\Client\Model\UpdateWebhookRequest**](../Model/UpdateWebhookRequest.md)| Information about webhook settings. | |

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
