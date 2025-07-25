# OpenAPI\Client\PromotionsCommonApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activatePromotion()**](PromotionsCommonApi.md#activatePromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/activate | Activate promotion |
| [**deactivatePromotion()**](PromotionsCommonApi.md#deactivatePromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/deactivate | Deactivate promotion |
| [**getPromotionList()**](PromotionsCommonApi.md#getPromotionList) | **GET** /v2/project/{project_id}/admin/promotion | Get all promotion list |
| [**getRedeemablePromotionByCode()**](PromotionsCommonApi.md#getRedeemablePromotionByCode) | **GET** /v2/project/{project_id}/admin/promotion/redeemable/code/{code} | Get redeemable promotion by code |
| [**verifyPromotionCode()**](PromotionsCommonApi.md#verifyPromotionCode) | **GET** /v2/project/{project_id}/promotion/code/{code}/verify | Verify promotion code |


## `activatePromotion()`

```php
activatePromotion($project_id, $promotion_id)
```

Activate promotion

Activates a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $apiInstance->activatePromotion($project_id, $promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCommonApi->activatePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |

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

## `deactivatePromotion()`

```php
deactivatePromotion($project_id, $promotion_id)
```

Deactivate promotion

Deactivates a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $apiInstance->deactivatePromotion($project_id, $promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCommonApi->deactivatePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |

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

## `getPromotionList()`

```php
getPromotionList($project_id, $limit, $offset, $enabled): \OpenAPI\Client\Model\InlineObject33
```

Get all promotion list

Gets the list of promotions of a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCommonApi(
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
    $result = $apiInstance->getPromotionList($project_id, $limit, $offset, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCommonApi->getPromotionList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedeemablePromotionByCode()`

```php
getRedeemablePromotionByCode($project_id, $code): \OpenAPI\Client\Model\AdminPromotions200GetRedeemableCouponPromotionModel
```

Get redeemable promotion by code

Gets the promotion by a promo code or coupon code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$code = WINTER2021; // string | Unique case-sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->getRedeemablePromotionByCode($project_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCommonApi->getRedeemablePromotionByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **code** | **string**| Unique case-sensitive code. Contains letters and numbers. | |

### Return type

[**\OpenAPI\Client\Model\AdminPromotions200GetRedeemableCouponPromotionModel**](../Model/AdminPromotions200GetRedeemableCouponPromotionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyPromotionCode()`

```php
verifyPromotionCode($project_id, $code): \OpenAPI\Client\Model\InlineObject60
```

Verify promotion code

Determines if the code is a promo code or coupon code and if the user can apply it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsCommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$code = WINTER2021; // string | Unique case-sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->verifyPromotionCode($project_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCommonApi->verifyPromotionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **code** | **string**| Unique case-sensitive code. Contains letters and numbers. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject60**](../Model/InlineObject60.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
