# OpenAPI\Client\CommonMerchantApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjects()**](CommonMerchantApi.md#getProjects) | **GET** /v2/merchant/{merchant_id}/projects | Get projects |


## `getProjects()`

```php
getProjects($merchant_id, $limit, $offset): \OpenAPI\Client\Model\GetProjects200Response
```

Get projects

Gets the list of merchant's projects.  <div class=\"notice\">   <p><strong>Notice</strong></p><p>This API call does not contain the <code>project_id</code> path parameter, so you need to use the API key that is valid in all the company’s projects to set up authorization.</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicMerchantAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommonMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 121212; // int | Merchant ID.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getProjects($merchant_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonMerchantApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **int**| Merchant ID. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetProjects200Response**](../Model/GetProjects200Response.md)

### Authorization

[basicMerchantAuth](../../README.md#basicMerchantAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
