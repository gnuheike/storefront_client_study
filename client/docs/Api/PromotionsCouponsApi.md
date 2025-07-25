# OpenAPI\Client\PromotionsCouponsApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateCoupon()**](PromotionsCouponsApi.md#activateCoupon) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/activate | Activate coupon promotion |
| [**addCouponUserPromotionLimit()**](PromotionsCouponsApi.md#addCouponUserPromotionLimit) | **POST** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Increase coupon limit for specified user |
| [**adminCreateCoupon()**](PromotionsCouponsApi.md#adminCreateCoupon) | **POST** /v2/project/{project_id}/admin/coupon | Create coupon promotion |
| [**createCouponCode()**](PromotionsCouponsApi.md#createCouponCode) | **POST** /v2/project/{project_id}/admin/coupon/{external_id}/code | Create coupon code |
| [**deactivateCoupon()**](PromotionsCouponsApi.md#deactivateCoupon) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/deactivate | Deactivate coupon promotion |
| [**deleteCouponPromotion()**](PromotionsCouponsApi.md#deleteCouponPromotion) | **DELETE** /v2/project/{project_id}/admin/coupon/{external_id} | Delete coupon promotion |
| [**generateCouponCodes()**](PromotionsCouponsApi.md#generateCouponCodes) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/code/generate | Generate coupon codes |
| [**getCoupon()**](PromotionsCouponsApi.md#getCoupon) | **GET** /v2/project/{project_id}/admin/coupon/{external_id} | Get coupon promotion |
| [**getCouponCodeLimit()**](PromotionsCouponsApi.md#getCouponCodeLimit) | **GET** /v2/project/{project_id}/admin/code/limit/coupon/external_id/{external_id} | Get unique coupon code limits |
| [**getCouponCodes()**](PromotionsCouponsApi.md#getCouponCodes) | **GET** /v2/project/{project_id}/admin/coupon/{external_id}/code | Get coupon codes |
| [**getCouponRewardsByCode()**](PromotionsCouponsApi.md#getCouponRewardsByCode) | **GET** /v2/project/{project_id}/coupon/code/{coupon_code}/rewards | Get coupon rewards |
| [**getCouponUserLimit()**](PromotionsCouponsApi.md#getCouponUserLimit) | **GET** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Get coupon limit for specified user |
| [**getCoupons()**](PromotionsCouponsApi.md#getCoupons) | **GET** /v2/project/{project_id}/admin/coupon | Get list of coupon promotions |
| [**redeemCoupon()**](PromotionsCouponsApi.md#redeemCoupon) | **POST** /v2/project/{project_id}/coupon/redeem | Redeem coupon code |
| [**removeCouponUserPromotionLimit()**](PromotionsCouponsApi.md#removeCouponUserPromotionLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Decrease coupon limit for specified user |
| [**setCouponUserPromotionLimit()**](PromotionsCouponsApi.md#setCouponUserPromotionLimit) | **PUT** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Set coupon limit for specified user |
| [**updateCouponPromotion()**](PromotionsCouponsApi.md#updateCouponPromotion) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id} | Update coupon promotion |


## `activateCoupon()`

```php
activateCoupon($project_id, $external_id)
```

Activate coupon promotion

Activates a coupon promotion. Created coupon promotion is disabled by default. It will not be ready for redemption until you activate it. Use this endpoint to enable and activate a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->activateCoupon($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->activateCoupon: ', $e->getMessage(), PHP_EOL;
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

## `addCouponUserPromotionLimit()`

```php
addCouponUserPromotionLimit($project_id, $external_id, $add_coupon_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitCoupon
```

Increase coupon limit for specified user

Increases the remaining number of times the specified user can use the coupon.  User limit API allows you to limit the number of times users can use a coupon. For configuring the user limit itself, go to the Admin section: * [Coupons](https://developers.xsolla.com/api/shop-builder/tag/promotions-coupons/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$add_coupon_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddCouponUserPromotionLimitRequest

try {
    $result = $apiInstance->addCouponUserPromotionLimit($project_id, $external_id, $add_coupon_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->addCouponUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **add_coupon_user_promotion_limit_request** | [**\OpenAPI\Client\Model\AddCouponUserPromotionLimitRequest**](../Model/AddCouponUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitCoupon**](../Model/UserLimitCoupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateCoupon()`

```php
adminCreateCoupon($project_id, $admin_create_coupon_request): \OpenAPI\Client\Model\AdminCreateCoupon201Response
```

Create coupon promotion

Creates a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_coupon_request = {"external_id":"coupon_external_id","date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"redeem_total_limit":100,"redeem_user_limit":1,"redeem_code_limit":1,"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1}]}; // \OpenAPI\Client\Model\AdminCreateCouponRequest

try {
    $result = $apiInstance->adminCreateCoupon($project_id, $admin_create_coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->adminCreateCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_coupon_request** | [**\OpenAPI\Client\Model\AdminCreateCouponRequest**](../Model/AdminCreateCouponRequest.md)|  | [optional] |

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

## `createCouponCode()`

```php
createCouponCode($project_id, $external_id, $create_coupon_code_request): \OpenAPI\Client\Model\InlineObject46CodesInner
```

Create coupon code

Creates coupon code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$create_coupon_code_request = new \OpenAPI\Client\Model\CreateCouponCodeRequest(); // \OpenAPI\Client\Model\CreateCouponCodeRequest

try {
    $result = $apiInstance->createCouponCode($project_id, $external_id, $create_coupon_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->createCouponCode: ', $e->getMessage(), PHP_EOL;
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

## `deactivateCoupon()`

```php
deactivateCoupon($project_id, $external_id)
```

Deactivate coupon promotion

Deactivates a coupon promotion. Created coupon promotion is disabled by default. It will not be ready for redemption until you activate it. Use this endpoint to disable and deactivate a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deactivateCoupon($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->deactivateCoupon: ', $e->getMessage(), PHP_EOL;
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

## `deleteCouponPromotion()`

```php
deleteCouponPromotion($project_id, $external_id)
```

Delete coupon promotion

Deletes [coupon promotion](https://developers.xsolla.com/doc/shop-builder/features/coupons/). The deleted promotion: * Disappears from the list of promotions set up in your project. * Is no longer applied to the item catalog. User can’t get bonus items with this promotion.  After deletion, the promotion can’t be restored. Coupon codes from the deleted promotion can be [added](https://developers.xsolla.com/api/shop-builder/operation/create-coupon-code/) to existing promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deleteCouponPromotion($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->deleteCouponPromotion: ', $e->getMessage(), PHP_EOL;
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

## `generateCouponCodes()`

```php
generateCouponCodes($project_id, $external_id, $generate_coupon_codes_request): \OpenAPI\Client\Model\GenerateCouponCodes200Response
```

Generate coupon codes

Generates coupon codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$generate_coupon_codes_request = new \OpenAPI\Client\Model\GenerateCouponCodesRequest(); // \OpenAPI\Client\Model\GenerateCouponCodesRequest

try {
    $result = $apiInstance->generateCouponCodes($project_id, $external_id, $generate_coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->generateCouponCodes: ', $e->getMessage(), PHP_EOL;
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

## `getCoupon()`

```php
getCoupon($project_id, $external_id): \OpenAPI\Client\Model\AdminPromotions200GetCouponPromotionModel
```

Get coupon promotion

Gets a specified coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $result = $apiInstance->getCoupon($project_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\AdminPromotions200GetCouponPromotionModel**](../Model/AdminPromotions200GetCouponPromotionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponCodeLimit()`

```php
getCouponCodeLimit($project_id, $external_id, $codes, $limit, $offset): \OpenAPI\Client\Model\InlineObject80
```

Get unique coupon code limits

Gets the remaining number of times codes can be used. For filtering the codes, use the `codes` query parameter.  For configuring the code limit itself, go to the Admin section: * [Coupons](https://developers.xsolla.com/api/shop-builder/tag/promotions-coupons/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
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
    $result = $apiInstance->getCouponCodeLimit($project_id, $external_id, $codes, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCouponCodeLimit: ', $e->getMessage(), PHP_EOL;
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

## `getCouponCodes()`

```php
getCouponCodes($project_id, $external_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject46
```

Get coupon codes

Gets coupon codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
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
    $result = $apiInstance->getCouponCodes($project_id, $external_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCouponCodes: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject46**](../Model/InlineObject46.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponRewardsByCode()`

```php
getCouponRewardsByCode($project_id, $coupon_code): \OpenAPI\Client\Model\InlineObject40
```

Get coupon rewards

Gets coupons rewards by its code. Can be used to allow users to choose one of many items as a bonus. The usual case is choosing a DRM if the coupon contains a game as a bonus (`type=unit`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$coupon_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->getCouponRewardsByCode($project_id, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCouponRewardsByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **coupon_code** | **string**| Unique case sensitive code. Contains letters and numbers. | |

### Return type

[**\OpenAPI\Client\Model\InlineObject40**](../Model/InlineObject40.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponUserLimit()`

```php
getCouponUserLimit($project_id, $external_id, $user_external_id): \OpenAPI\Client\Model\UserLimitCoupon
```

Get coupon limit for specified user

Gets the remaining number of times the specified user can use the coupon.  User limit API allows you to limit the number of times users can use a coupon. For configuring the user limit itself, go to the Admin section: * [Coupons](https://developers.xsolla.com/api/shop-builder/tag/promotions-coupons/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$user_external_id = d342dad2-9d59-11e9-a384-42010aa8003f; // string | User external ID

try {
    $result = $apiInstance->getCouponUserLimit($project_id, $external_id, $user_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCouponUserLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **user_external_id** | **string**| User external ID | |

### Return type

[**\OpenAPI\Client\Model\UserLimitCoupon**](../Model/UserLimitCoupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupons()`

```php
getCoupons($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject42
```

Get list of coupon promotions

Gets the list of coupon promotions of a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getCoupons($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject42**](../Model/InlineObject42.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemCoupon()`

```php
redeemCoupon($project_id, $redeem_coupon_request): \OpenAPI\Client\Model\InlineObject37
```

Redeem coupon code

Redeems a coupon code. The user gets a bonus after a coupon is redeemed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$redeem_coupon_request = new \OpenAPI\Client\Model\RedeemCouponRequest(); // \OpenAPI\Client\Model\RedeemCouponRequest

try {
    $result = $apiInstance->redeemCoupon($project_id, $redeem_coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->redeemCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **redeem_coupon_request** | [**\OpenAPI\Client\Model\RedeemCouponRequest**](../Model/RedeemCouponRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject37**](../Model/InlineObject37.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCouponUserPromotionLimit()`

```php
removeCouponUserPromotionLimit($project_id, $external_id, $add_coupon_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitCoupon
```

Decrease coupon limit for specified user

Decreases the remaining number of times the specified user can use a coupon.  User limit API allows you to limit the number of times users can use a coupon. For configuring the user limit itself, go to the Admin section: * [Coupons](https://developers.xsolla.com/api/shop-builder/tag/promotions-coupons/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$add_coupon_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddCouponUserPromotionLimitRequest

try {
    $result = $apiInstance->removeCouponUserPromotionLimit($project_id, $external_id, $add_coupon_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->removeCouponUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **add_coupon_user_promotion_limit_request** | [**\OpenAPI\Client\Model\AddCouponUserPromotionLimitRequest**](../Model/AddCouponUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitCoupon**](../Model/UserLimitCoupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCouponUserPromotionLimit()`

```php
setCouponUserPromotionLimit($project_id, $external_id, $set_coupon_user_promotion_limit_request): \OpenAPI\Client\Model\UserLimitCoupon
```

Set coupon limit for specified user

Sets the number of times the specified user can use a coupon after it was increased or decreased.  User limit API allows you to limit the number of times users can use a coupon. For configuring the user limit itself, go to the Admin section: * [Coupons](https://developers.xsolla.com/api/shop-builder/tag/promotions-coupons/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$set_coupon_user_promotion_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":0}; // \OpenAPI\Client\Model\SetCouponUserPromotionLimitRequest

try {
    $result = $apiInstance->setCouponUserPromotionLimit($project_id, $external_id, $set_coupon_user_promotion_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->setCouponUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **set_coupon_user_promotion_limit_request** | [**\OpenAPI\Client\Model\SetCouponUserPromotionLimitRequest**](../Model/SetCouponUserPromotionLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitCoupon**](../Model/UserLimitCoupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCouponPromotion()`

```php
updateCouponPromotion($project_id, $external_id, $update_coupon_promotion_request)
```

Update coupon promotion

Updates a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$update_coupon_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"redeem_total_limit":100,"redeem_user_limit":1,"redeem_code_limit":1,"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1}]}; // \OpenAPI\Client\Model\UpdateCouponPromotionRequest

try {
    $apiInstance->updateCouponPromotion($project_id, $external_id, $update_coupon_promotion_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsCouponsApi->updateCouponPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **update_coupon_promotion_request** | [**\OpenAPI\Client\Model\UpdateCouponPromotionRequest**](../Model/UpdateCouponPromotionRequest.md)|  | [optional] |

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
