# OpenAPI\Client\RewardChainClientApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimUserRewardChainStepReward()**](RewardChainClientApi.md#claimUserRewardChainStepReward) | **POST** /v2/project/{project_id}/user/reward_chain/{reward_chain_id}/step/{step_id}/claim | Claim step reward |
| [**getRewardChainsList()**](RewardChainClientApi.md#getRewardChainsList) | **GET** /v2/project/{project_id}/user/reward_chain | Get current user&#39;s reward chains |
| [**getUserRewardChainBalance()**](RewardChainClientApi.md#getUserRewardChainBalance) | **GET** /v2/project/{project_id}/user/reward_chain/{reward_chain_id}/balance | Get current user&#39;s value point balance |


## `claimUserRewardChainStepReward()`

```php
claimUserRewardChainStepReward($project_id, $reward_chain_id, $step_id)
```

Claim step reward

Client endpoint. Claims the current user’s step reward from a reward chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.
$step_id = 120; // int | Reward chain step ID.

try {
    $apiInstance->claimUserRewardChainStepReward($project_id, $reward_chain_id, $step_id);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainClientApi->claimUserRewardChainStepReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |
| **step_id** | **int**| Reward chain step ID. | |

### Return type

void (empty response body)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardChainsList()`

```php
getRewardChainsList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject84
```

Get current user's reward chains

Client endpoint. Gets the current user’s reward chains.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getRewardChainsList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainClientApi->getRewardChainsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject84**](../Model/InlineObject84.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRewardChainBalance()`

```php
getUserRewardChainBalance($project_id, $reward_chain_id): \OpenAPI\Client\Model\InlineObject85
```

Get current user's value point balance

Client endpoint. Gets the current user’s value point balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reward_chain_id = 101; // int | Reward chain ID.

try {
    $result = $apiInstance->getUserRewardChainBalance($project_id, $reward_chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardChainClientApi->getUserRewardChainBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reward_chain_id** | **int**| Reward chain ID. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject85**](../Model/InlineObject85.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
