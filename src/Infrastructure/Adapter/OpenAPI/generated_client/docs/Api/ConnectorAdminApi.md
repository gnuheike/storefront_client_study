# OpenAPI\Client\ConnectorAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getItemsImportStatus()**](ConnectorAdminApi.md#getItemsImportStatus) | **GET** /v1/admin/projects/{project_id}/connectors/import_items/import/status | Get status of items import |
| [**importItemsFromExternalFile()**](ConnectorAdminApi.md#importItemsFromExternalFile) | **POST** /v1/projects/{project_id}/import/from_external_file | Import items via JSON file |


## `getItemsImportStatus()`

```php
getItemsImportStatus($project_id): \OpenAPI\Client\Model\InlineObject99
```
### URI(s):
- https://connector.xsolla.com 
Get status of items import

Retrieves information about the progress of importing items into the project. This API call retrieves data on the last import carried out through the API or Publisher Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ConnectorAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getItemsImportStatus($project_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorAdminApi->getItemsImportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject99**](../Model/InlineObject99.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importItemsFromExternalFile()`

```php
importItemsFromExternalFile($project_id, $import_items_from_external_file_request): \OpenAPI\Client\Model\ImportItemsFromExternalFile201Response
```
### URI(s):
- https://connector.xsolla.com 
Import items via JSON file

Imports items into the store from a JSON file via the specified URL. Refer to the [documentation](https://developers.xsolla.com/doc/shop-builder/how-to/json-import/) for more information about import from a JSON file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ConnectorAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$import_items_from_external_file_request = new \OpenAPI\Client\Model\ImportItemsFromExternalFileRequest(); // \OpenAPI\Client\Model\ImportItemsFromExternalFileRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->importItemsFromExternalFile($project_id, $import_items_from_external_file_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorAdminApi->importItemsFromExternalFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **import_items_from_external_file_request** | [**\OpenAPI\Client\Model\ImportItemsFromExternalFileRequest**](../Model/ImportItemsFromExternalFileRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ImportItemsFromExternalFile201Response**](../Model/ImportItemsFromExternalFile201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
