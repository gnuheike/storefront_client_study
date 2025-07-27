# OpenAPI\Client\ClanRewardChainClientApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserClanTopContributors()**](ClanRewardChainClientApi.md#getUserClanTopContributors) | **GET** /v2/project/{project_id}/user/clan/contributors/{reward_chain_id}/top | Get top 10 contributors to reward chain under clan |
| [**userClanUpdate()**](ClanRewardChainClientApi.md#userClanUpdate) | **PUT** /v2/project/{project_id}/user/clan/update | Update current user&#39;s clan |


## `getUserClanTopContributors()`

```php
getUserClanTopContributors($project_id, $reward_chain_id): \OpenAPI\Client\Model\GetUserClanTopContributors200ResponseInner[]
```

Get top 10 contributors to reward chain under clan

Retrieves the list of top 10 contributors to the specific reward chain under the current user's clan. If a user doesn't belong to a clan, the call returns an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClanRewardChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $result = $apiInstance->getUserClanTopContributors($project_id, $reward_chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClanRewardChainClientApi->getUserClanTopContributors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

### Return type

[**\OpenAPI\Client\Model\GetUserClanTopContributors200ResponseInner[]**](../Model/GetUserClanTopContributors200ResponseInner.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userClanUpdate()`

```php
userClanUpdate($project_id): \OpenAPI\Client\Model\InlineObject88
```

Update current user's clan

Updates a current user's clan via user attributes. Claims all rewards from reward chains that were not claimed for a previous clan and returns them in the response. If the user was in a clan and now is not — their inclusion in the clan will be revoked. If the user changed the clan — the clan will be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClanRewardChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID.

try {
    $result = $apiInstance->userClanUpdate($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClanRewardChainClientApi->userClanUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. | [default to 44056] |

### Return type

[**\OpenAPI\Client\Model\InlineObject88**](../Model/InlineObject88.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
