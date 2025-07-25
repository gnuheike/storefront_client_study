# OpenAPI\Client\UpsellClientApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUpsellForProjectClient()**](UpsellClientApi.md#getUpsellForProjectClient) | **GET** /v2/project/{project_id}/items/upsell | Get list of upsell items in project |


## `getUpsellForProjectClient()`

```php
getUpsellForProjectClient($project_id): \OpenAPI\Client\Model\UpsellItemList
```

Get list of upsell items in project

Gets a list of upsell items in a project if they have already been set up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UpsellClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

try {
    $result = $apiInstance->getUpsellForProjectClient($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellClientApi->getUpsellForProjectClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |

### Return type

[**\OpenAPI\Client\Model\UpsellItemList**](../Model/UpsellItemList.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
