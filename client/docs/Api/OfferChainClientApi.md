# OpenAPI\Client\OfferChainClientApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimUserOfferChainStepReward()**](OfferChainClientApi.md#claimUserOfferChainStepReward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/claim | Claim free offer chain step |
| [**getOfferChainsList()**](OfferChainClientApi.md#getOfferChainsList) | **GET** /v2/project/{project_id}/user/offer_chain | Get current user&#39;s offer chains |
| [**getUserOfferChainById()**](OfferChainClientApi.md#getUserOfferChainById) | **GET** /v2/project/{project_id}/user/offer_chain/{offer_chain_id} | Get current user&#39;s offer chain by ID |
| [**orderUserOfferChainStepReward()**](OfferChainClientApi.md#orderUserOfferChainStepReward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/order | Create order for paid offer chain step |


## `claimUserOfferChainStepReward()`

```php
claimUserOfferChainStepReward($project_id, $offer_chain_id, $step_number): \OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response
```

Claim free offer chain step

Completes the current user’s progression through the offer chain step and grants the associated reward. <div class=\"notice\">   <strong>Notice</strong><br><br>     Use this call only for free steps in the offer chain.     For steps that require payment in real currency, use the <a href=\"/api/shop-builder/operation/order-user-offer-chain-step-reward\">Create order for paid offer chain step</a> call instead. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.
$step_number = 1; // int | Offer chain step number.

try {
    $result = $apiInstance->claimUserOfferChainStepReward($project_id, $offer_chain_id, $step_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainClientApi->claimUserOfferChainStepReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |
| **step_number** | **int**| Offer chain step number. | |

### Return type

[**\OpenAPI\Client\Model\ClaimUserOfferChainStepReward200Response**](../Model/ClaimUserOfferChainStepReward200Response.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferChainsList()`

```php
getOfferChainsList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject89
```

Get current user's offer chains

Gets the current user’s offer chains. <div class=\"notice\"><strong>Notice</strong><br><br>All projects have a limit on the number of items that can be returned in a single response. The default and maximum value is <strong>30 items per response</strong>. To get more data, use the <code>limit</code> and <code>offset</code> query parameters for pagination.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getOfferChainsList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainClientApi->getOfferChainsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject89**](../Model/InlineObject89.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserOfferChainById()`

```php
getUserOfferChainById($project_id, $offer_chain_id): \OpenAPI\Client\Model\ClientOfferChainModel
```

Get current user's offer chain by ID

Gets the current user’s offer chain by the offer chain's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.

try {
    $result = $apiInstance->getUserOfferChainById($project_id, $offer_chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainClientApi->getUserOfferChainById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |

### Return type

[**\OpenAPI\Client\Model\ClientOfferChainModel**](../Model/ClientOfferChainModel.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderUserOfferChainStepReward()`

```php
orderUserOfferChainStepReward($project_id, $offer_chain_id, $step_number): \OpenAPI\Client\Model\InlineObject15
```

Create order for paid offer chain step

Creates an order for the item associated with the specified paid offer chain step. The created order gets the `new` order status.  To open the payment UI in a new window, use the following link: `https://secure.xsolla.com/paystation4/?token={token}`, where `{token}` is the received token.  For testing purposes, use this URL: `https://sandbox-secure.xsolla.com/paystation4/?token={token}`.  <div class=\"notice\">   <strong>Notice</strong> <br><br>     This method must be used on the client side. The user's IP address is used to determine the country, which affects the currency and available payment methods. Using this method from the server side may result in incorrect currency detection and affect payment methods in <a href=\"https://developers.xsolla.com/doc/pay-station/\">Pay Station</a>. </div><br>  <div class=\"notice\">   <strong>Notice</strong><br><br>     Use this call only for paid offer chain steps.     For free steps, use the <a href=\"/api/shop-builder/operation/claim-user-offer-chain-step-reward\">Claim free offer chain step</a> call instead. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferChainClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$offer_chain_id = 101; // int | Offer chain ID.
$step_number = 1; // int | Offer chain step number.

try {
    $result = $apiInstance->orderUserOfferChainStepReward($project_id, $offer_chain_id, $step_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferChainClientApi->orderUserOfferChainStepReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **offer_chain_id** | **int**| Offer chain ID. | |
| **step_number** | **int**| Offer chain step number. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
