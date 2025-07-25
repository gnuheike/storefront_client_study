# OpenAPI\Client\PromotionsPromoCodesApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activatePromoCode()**](PromotionsPromoCodesApi.md#activatePromoCode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/activate | Activate promo code promotion |
| [**addPromoCodeUserPromotionLimit()**](PromotionsPromoCodesApi.md#addPromoCodeUserPromotionLimit) | **POST** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Increase promo code limit for specified user |
| [**createPromoCode()**](PromotionsPromoCodesApi.md#createPromoCode) | **POST** /v2/project/{project_id}/admin/promocode | Create promo code promotion |
| [**createPromoCodeCode()**](PromotionsPromoCodesApi.md#createPromoCodeCode) | **POST** /v2/project/{project_id}/admin/promocode/{external_id}/code | Create code for promo code promotion |
| [**deactivatePromoCode()**](PromotionsPromoCodesApi.md#deactivatePromoCode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/deactivate | Deactivate promo code promotion |
| [**deletePromoCode()**](PromotionsPromoCodesApi.md#deletePromoCode) | **DELETE** /v2/project/{project_id}/admin/promocode/{external_id} | Delete promo code promotion |
| [**generatePromoCodeCodes()**](PromotionsPromoCodesApi.md#generatePromoCodeCodes) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/code/generate | Generate codes for promo code promotion |
| [**getPromoCode()**](PromotionsPromoCodesApi.md#getPromoCode) | **GET** /v2/project/{project_id}/admin/promocode/{external_id} | Get promo code promotion |
| [**getPromoCodeCodeLimit()**](PromotionsPromoCodesApi.md#getPromoCodeCodeLimit) | **GET** /v2/project/{project_id}/admin/code/limit/promocode/external_id/{external_id} | Get promo code limit for codes |
| [**getPromoCodeRewardsByCode()**](PromotionsPromoCodesApi.md#getPromoCodeRewardsByCode) | **GET** /v2/project/{project_id}/promocode/code/{promocode_code}/rewards | Get promo code rewards |
| [**getPromoCodeUserLimit()**](PromotionsPromoCodesApi.md#getPromoCodeUserLimit) | **GET** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Get promo code limit for specified user |
| [**getPromoCodes()**](PromotionsPromoCodesApi.md#getPromoCodes) | **GET** /v2/project/{project_id}/admin/promocode | Get list of promo code promotions |
| [**getPromocodeCodes()**](PromotionsPromoCodesApi.md#getPromocodeCodes) | **GET** /v2/project/{project_id}/admin/promocode/{external_id}/code | Get codes of promo code promotion |
| [**redeemPromoCode()**](PromotionsPromoCodesApi.md#redeemPromoCode) | **POST** /v2/project/{project_id}/promocode/redeem | Redeem promo code |
| [**removeCartPromoCode()**](PromotionsPromoCodesApi.md#removeCartPromoCode) | **PUT** /v2/project/{project_id}/promocode/remove | Remove promo code from cart |
| [**removePromoCodeUserPromotionLimit()**](PromotionsPromoCodesApi.md#removePromoCodeUserPromotionLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Decrease promo code limit for specified user |
| [**setPromoCodeUserPromotionLimit()**](PromotionsPromoCodesApi.md#setPromoCodeUserPromotionLimit) | **PUT** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Set promo code limit for specified user |
| [**updatePromoCode()**](PromotionsPromoCodesApi.md#updatePromoCode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id} | Update promo code promotion |


## `activatePromoCode()`

```php
activatePromoCode($project_id, $external_id)
```

Activate promo code promotion

Activates a promo code promotion.  Created promo code promotion is disabled by default. It will not be ready for redemption until you activate it. Use this endpoint to enable and activate a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->activatePromoCode($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->activatePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

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

## `addPromoCodeUserPromotionLimit()`

```php
addPromoCodeUserPromotionLimit($project_id, $external_id, $add_promo_code_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitPromoCode
```

Increase promo code limit for specified user

Increases the remaining number of times the specified user can use the promo code.  User limit API allows you to limit the number of times users can use a promo code. For configuring the user limit itself, go to the Admin section: * [Promo Codes](https://developers.xsolla.com/api/shop-builder/tag/promotions-promo-codes/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$add_promo_code_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddPromoCodeUserPromotionLimitRequest

try {
    $result = $apiInstance->addPromoCodeUserPromotionLimit($project_id, $external_id, $add_promo_code_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->addPromoCodeUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **add_promo_code_user_promotion_limit_request** | [**\OpenAPI\Client\Model\AddPromoCodeUserPromotionLimitRequest**](../Model/AddPromoCodeUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromoCode**](../Model/UserLimitPromoCode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromoCode()`

```php
createPromoCode($project_id, $create_promo_code_request): \OpenAPI\Client\Model\AdminCreateCoupon201Response
```

Create promo code promotion

Creates a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_promo_code_request = {"external_id":"promo_code_external_id","date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"redeem_total_limit":100,"redeem_user_limit":1,"redeem_code_limit":1,"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1},{"sku":"com.xsolla.elven_shield_1","quantity":2},{"sku":"com.xsolla.elven_gloves_1","quantity":2}]}; // \OpenAPI\Client\Model\CreatePromoCodeRequest

try {
    $result = $apiInstance->createPromoCode($project_id, $create_promo_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->createPromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_promo_code_request** | [**\OpenAPI\Client\Model\CreatePromoCodeRequest**](../Model/CreatePromoCodeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdminCreateCoupon201Response**](../Model/AdminCreateCoupon201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromoCodeCode()`

```php
createPromoCodeCode($project_id, $external_id, $create_coupon_code_request): \OpenAPI\Client\Model\InlineObject46CodesInner
```

Create code for promo code promotion

Creates code for a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$create_coupon_code_request = new \OpenAPI\Client\Model\CreateCouponCodeRequest(); // \OpenAPI\Client\Model\CreateCouponCodeRequest

try {
    $result = $apiInstance->createPromoCodeCode($project_id, $external_id, $create_coupon_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->createPromoCodeCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **create_coupon_code_request** | [**\OpenAPI\Client\Model\CreateCouponCodeRequest**](../Model/CreateCouponCodeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject46CodesInner**](../Model/InlineObject46CodesInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivatePromoCode()`

```php
deactivatePromoCode($project_id, $external_id)
```

Deactivate promo code promotion

Deactivates a promo code promotion.  Created promo code promotion is disabled by default. It will not be ready for redemption until you activate it. Use this endpoint to disable and deactivate a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deactivatePromoCode($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->deactivatePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

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

## `deletePromoCode()`

```php
deletePromoCode($project_id, $external_id)
```

Delete promo code promotion

Deletes [promo code promotion](https://developers.xsolla.com/doc/shop-builder/features/promo-codes/). The deleted promotion: * Disappears from the list of promotions set up in your project. * Is no longer applied to the item catalog and the cart. User can’t get bonus items or purchase items using this promotion.  After deletion, the promotion can’t be restored. Promo codes from the deleted promotion can be [added](https://developers.xsolla.com/api/shop-builder/operation/create-promo-code-code/) to existing promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deletePromoCode($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->deletePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

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

## `generatePromoCodeCodes()`

```php
generatePromoCodeCodes($project_id, $external_id, $generate_coupon_codes_request): \OpenAPI\Client\Model\GenerateCouponCodes200Response
```

Generate codes for promo code promotion

Generates codes for a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$generate_coupon_codes_request = new \OpenAPI\Client\Model\GenerateCouponCodesRequest(); // \OpenAPI\Client\Model\GenerateCouponCodesRequest

try {
    $result = $apiInstance->generatePromoCodeCodes($project_id, $external_id, $generate_coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->generatePromoCodeCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **generate_coupon_codes_request** | [**\OpenAPI\Client\Model\GenerateCouponCodesRequest**](../Model/GenerateCouponCodesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateCouponCodes200Response**](../Model/GenerateCouponCodes200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoCode()`

```php
getPromoCode($project_id, $external_id): \OpenAPI\Client\Model\Promotions200GetPromocodePromotionModel
```

Get promo code promotion

Gets a specified promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $result = $apiInstance->getPromoCode($project_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\Promotions200GetPromocodePromotionModel**](../Model/Promotions200GetPromocodePromotionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoCodeCodeLimit()`

```php
getPromoCodeCodeLimit($project_id, $external_id, $codes, $limit, $offset): \OpenAPI\Client\Model\InlineObject80
```

Get promo code limit for codes

Gets the remaining number of times codes can be used. For filtering the codes, use the `codes` query parameter.  For configuring the code limit itself, go to the Admin section: * [Promo Codes](https://developers.xsolla.com/api/shop-builder/tag/promotions-promo-codes/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$codes = array('codes_example'); // string[] | Unique case-sensitive codes. Contain only letters and numbers.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getPromoCodeCodeLimit($project_id, $external_id, $codes, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromoCodeCodeLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **codes** | [**string[]**](../Model/string.md)| Unique case-sensitive codes. Contain only letters and numbers. | [optional] |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject80**](../Model/InlineObject80.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoCodeRewardsByCode()`

```php
getPromoCodeRewardsByCode($project_id, $promocode_code): \OpenAPI\Client\Model\PromoCodeRewards
```

Get promo code rewards

Gets promo code rewards by its code. Can be used to allow users to choose one of many items as a bonus. The usual case is choosing a DRM if the promo code contains a game as a bonus (`type=unit`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promocode_code = SO6rew99j9; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->getPromoCodeRewardsByCode($project_id, $promocode_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromoCodeRewardsByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promocode_code** | **string**| Unique case sensitive code. Contains letters and numbers. | |

### Return type

[**\OpenAPI\Client\Model\PromoCodeRewards**](../Model/PromoCodeRewards.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoCodeUserLimit()`

```php
getPromoCodeUserLimit($project_id, $external_id, $user_external_id): \OpenAPI\Client\Model\UserLimitPromoCode
```

Get promo code limit for specified user

Gets the remaining number of times the specified user can use the promo code.  User limit API allows you to limit the number of times users can use a promo code. For configuring the user limit itself, go to the Admin section: * [Promo Codes](https://developers.xsolla.com/api/shop-builder/tag/promotions-promo-codes/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$user_external_id = d342dad2-9d59-11e9-a384-42010aa8003f; // string | User external ID

try {
    $result = $apiInstance->getPromoCodeUserLimit($project_id, $external_id, $user_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromoCodeUserLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **user_external_id** | **string**| User external ID | |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromoCode**](../Model/UserLimitPromoCode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoCodes()`

```php
getPromoCodes($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject53
```

Get list of promo code promotions

Gets the list of promo codes of a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getPromoCodes($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromoCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject53**](../Model/InlineObject53.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromocodeCodes()`

```php
getPromocodeCodes($project_id, $external_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject54
```

Get codes of promo code promotion

Gets codes of a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getPromocodeCodes($project_id, $external_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->getPromocodeCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject54**](../Model/InlineObject54.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemPromoCode()`

```php
redeemPromoCode($project_id, $redeem_promo_code_request): \OpenAPI\Client\Model\InlineObject49
```

Redeem promo code

Redeems a code of promo code promotion. After redeeming a promo code, the user will get free items and/or the price of the cart and/or particular items will be decreased.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$redeem_promo_code_request = new \OpenAPI\Client\Model\RedeemPromoCodeRequest(); // \OpenAPI\Client\Model\RedeemPromoCodeRequest

try {
    $result = $apiInstance->redeemPromoCode($project_id, $redeem_promo_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->redeemPromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **redeem_promo_code_request** | [**\OpenAPI\Client\Model\RedeemPromoCodeRequest**](../Model/RedeemPromoCodeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject49**](../Model/InlineObject49.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCartPromoCode()`

```php
removeCartPromoCode($project_id, $remove_cart_promo_code_request): \OpenAPI\Client\Model\InlineObject51
```

Remove promo code from cart

Removes a promo code from a cart. After the promo code is removed, the total price of all items in the cart will be recalculated without bonuses and discounts provided by a promo code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AuthForCart
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$remove_cart_promo_code_request = new \OpenAPI\Client\Model\RemoveCartPromoCodeRequest(); // \OpenAPI\Client\Model\RemoveCartPromoCodeRequest

try {
    $result = $apiInstance->removeCartPromoCode($project_id, $remove_cart_promo_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->removeCartPromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **remove_cart_promo_code_request** | [**\OpenAPI\Client\Model\RemoveCartPromoCodeRequest**](../Model/RemoveCartPromoCodeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject51**](../Model/InlineObject51.md)

### Authorization

[AuthForCart](../../README.md#AuthForCart)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePromoCodeUserPromotionLimit()`

```php
removePromoCodeUserPromotionLimit($project_id, $external_id, $add_promo_code_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitPromoCode
```

Decrease promo code limit for specified user

Decreases the remaining number of times the specified user can use a promo code.  User limit API allows you to limit the number of times users can use a promo code. For configuring the user limit itself, go to the Admin section: * [Promo Codes](https://developers.xsolla.com/api/shop-builder/tag/promotions-promo-codes/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$add_promo_code_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddPromoCodeUserPromotionLimitRequest

try {
    $result = $apiInstance->removePromoCodeUserPromotionLimit($project_id, $external_id, $add_promo_code_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->removePromoCodeUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **add_promo_code_user_promotion_limit_request** | [**\OpenAPI\Client\Model\AddPromoCodeUserPromotionLimitRequest**](../Model/AddPromoCodeUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromoCode**](../Model/UserLimitPromoCode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPromoCodeUserPromotionLimit()`

```php
setPromoCodeUserPromotionLimit($project_id, $external_id, $set_promo_code_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitPromoCode
```

Set promo code limit for specified user

Sets the number of times the specified user can use a promo code after it was increased or decreased.  User limit API allows you to limit the number of times users can use a promo code. For configuring the user limit itself, go to the Admin section: * [Promo Codes](https://developers.xsolla.com/api/shop-builder/tag/promotions-promo-codes/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$set_promo_code_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":0}; // \OpenAPI\Client\Model\SetPromoCodeUserPromotionLimitRequest

try {
    $result = $apiInstance->setPromoCodeUserPromotionLimit($project_id, $external_id, $set_promo_code_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->setPromoCodeUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **set_promo_code_user_promotion_limit_request** | [**\OpenAPI\Client\Model\SetPromoCodeUserPromotionLimitRequest**](../Model/SetPromoCodeUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromoCode**](../Model/UserLimitPromoCode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromoCode()`

```php
updatePromoCode($project_id, $external_id, $update_promo_code_request)
```

Update promo code promotion

Updates a promo code promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsPromoCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$update_promo_code_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"redeem_total_limit":100,"redeem_user_limit":1,"redeem_code_limit":1,"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1},{"sku":"com.xsolla.elven_shield_1","quantity":2},{"sku":"com.xsolla.elven_gloves_1","quantity":2}]}; // \OpenAPI\Client\Model\UpdatePromoCodeRequest

try {
    $apiInstance->updatePromoCode($project_id, $external_id, $update_promo_code_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsPromoCodesApi->updatePromoCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **update_promo_code_request** | [**\OpenAPI\Client\Model\UpdatePromoCodeRequest**](../Model/UpdatePromoCodeRequest.md)|  | [optional] |

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
