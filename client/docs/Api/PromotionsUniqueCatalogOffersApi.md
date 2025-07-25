# OpenAPI\Client\PromotionsUniqueCatalogOffersApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateUniqueCatalogOffer()**](PromotionsUniqueCatalogOffersApi.md#activateUniqueCatalogOffer) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/activate | Activate unique catalog offer promotion |
| [**adminCreateUniqueCatalogOffer()**](PromotionsUniqueCatalogOffersApi.md#adminCreateUniqueCatalogOffer) | **POST** /v2/project/{project_id}/admin/unique_catalog_offer | Create unique catalog offer promotion |
| [**createUniqueCatalogOfferCode()**](PromotionsUniqueCatalogOffersApi.md#createUniqueCatalogOfferCode) | **POST** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code | Create unique catalog offer code |
| [**deactivateUniqueCatalogOffer()**](PromotionsUniqueCatalogOffersApi.md#deactivateUniqueCatalogOffer) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/deactivate | Deactivate unique catalog offer promotion |
| [**deleteUniqueCatalogOfferPromotion()**](PromotionsUniqueCatalogOffersApi.md#deleteUniqueCatalogOfferPromotion) | **DELETE** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Delete unique catalog offer promotion |
| [**generateUniqueCatalogOfferCodes()**](PromotionsUniqueCatalogOffersApi.md#generateUniqueCatalogOfferCodes) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code/generate | Generate unique catalog offer codes |
| [**getUniqueCatalogOffer()**](PromotionsUniqueCatalogOffersApi.md#getUniqueCatalogOffer) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Get unique catalog offer promotion |
| [**getUniqueCatalogOfferCodes()**](PromotionsUniqueCatalogOffersApi.md#getUniqueCatalogOfferCodes) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code | Get unique catalog offer codes |
| [**getUniqueCatalogOffers()**](PromotionsUniqueCatalogOffersApi.md#getUniqueCatalogOffers) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer | Get list of unique catalog offer promotions |
| [**updateUniqueCatalogOfferPromotion()**](PromotionsUniqueCatalogOffersApi.md#updateUniqueCatalogOfferPromotion) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Update unique catalog offer promotion |


## `activateUniqueCatalogOffer()`

```php
activateUniqueCatalogOffer($project_id, $external_id)
```

Activate unique catalog offer promotion

Activates a unique catalog offer promotion. The created unique catalog offer promotion is disabled by default. It cannot be redeemed until you activate it. Use this endpoint to enable and activate a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->activateUniqueCatalogOffer($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->activateUniqueCatalogOffer: ', $e->getMessage(), PHP_EOL;
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

## `adminCreateUniqueCatalogOffer()`

```php
adminCreateUniqueCatalogOffer($project_id, $admin_create_unique_catalog_offer_request): \OpenAPI\Client\Model\AdminCreateCoupon201Response
```

Create unique catalog offer promotion

Creates a unique catalog offer promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_unique_catalog_offer_request = {"external_id":"offer_external_id","date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Offer","de-DE":"Neujahrsangebot"},"items":["elven_sword","elven_boots"]}; // \OpenAPI\Client\Model\AdminCreateUniqueCatalogOfferRequest

try {
    $result = $apiInstance->adminCreateUniqueCatalogOffer($project_id, $admin_create_unique_catalog_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->adminCreateUniqueCatalogOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_unique_catalog_offer_request** | [**\OpenAPI\Client\Model\AdminCreateUniqueCatalogOfferRequest**](../Model/AdminCreateUniqueCatalogOfferRequest.md)|  | [optional] |

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

## `createUniqueCatalogOfferCode()`

```php
createUniqueCatalogOfferCode($project_id, $external_id, $create_coupon_code_request): \OpenAPI\Client\Model\InlineObject46CodesInner
```

Create unique catalog offer code

Creates unique catalog offer code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$create_coupon_code_request = new \OpenAPI\Client\Model\CreateCouponCodeRequest(); // \OpenAPI\Client\Model\CreateCouponCodeRequest

try {
    $result = $apiInstance->createUniqueCatalogOfferCode($project_id, $external_id, $create_coupon_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->createUniqueCatalogOfferCode: ', $e->getMessage(), PHP_EOL;
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

## `deactivateUniqueCatalogOffer()`

```php
deactivateUniqueCatalogOffer($project_id, $external_id)
```

Deactivate unique catalog offer promotion

Deactivates a unique catalog offer promotion. The created unique catalog offer promotion is disabled by default. It cannot be redeemed until you activate it. Use this endpoint to disable and deactivate a coupon promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deactivateUniqueCatalogOffer($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->deactivateUniqueCatalogOffer: ', $e->getMessage(), PHP_EOL;
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

## `deleteUniqueCatalogOfferPromotion()`

```php
deleteUniqueCatalogOfferPromotion($project_id, $external_id)
```

Delete unique catalog offer promotion

Deletes [unique catalog offer promotion](https://developers.xsolla.com/doc/shop-builder/features/unique-offer/). The deleted promotion: * Disappears from the list of promotions set up in your project. * Is no longer applied to the item catalog and the cart. User can’t buy items with this promotion.  After deletion, the promotion can’t be restored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $apiInstance->deleteUniqueCatalogOfferPromotion($project_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->deleteUniqueCatalogOfferPromotion: ', $e->getMessage(), PHP_EOL;
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

## `generateUniqueCatalogOfferCodes()`

```php
generateUniqueCatalogOfferCodes($project_id, $external_id, $generate_coupon_codes_request): \OpenAPI\Client\Model\GenerateCouponCodes200Response
```

Generate unique catalog offer codes

Generates unique catalog offer codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$generate_coupon_codes_request = new \OpenAPI\Client\Model\GenerateCouponCodesRequest(); // \OpenAPI\Client\Model\GenerateCouponCodesRequest

try {
    $result = $apiInstance->generateUniqueCatalogOfferCodes($project_id, $external_id, $generate_coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->generateUniqueCatalogOfferCodes: ', $e->getMessage(), PHP_EOL;
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

## `getUniqueCatalogOffer()`

```php
getUniqueCatalogOffer($project_id, $external_id): \OpenAPI\Client\Model\Promotions200GetUniqueCatalogOfferPromotionModel
```

Get unique catalog offer promotion

Gets the specified unique catalog offer promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.

try {
    $result = $apiInstance->getUniqueCatalogOffer($project_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->getUniqueCatalogOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\Promotions200GetUniqueCatalogOfferPromotionModel**](../Model/Promotions200GetUniqueCatalogOfferPromotionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueCatalogOfferCodes()`

```php
getUniqueCatalogOfferCodes($project_id, $external_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject97
```

Get unique catalog offer codes

Gets unique catalog offer codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
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
    $result = $apiInstance->getUniqueCatalogOfferCodes($project_id, $external_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->getUniqueCatalogOfferCodes: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineObject97**](../Model/InlineObject97.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueCatalogOffers()`

```php
getUniqueCatalogOffers($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject96
```

Get list of unique catalog offer promotions

Gets the list of unique catalog offer promotions of a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getUniqueCatalogOffers($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->getUniqueCatalogOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject96**](../Model/InlineObject96.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUniqueCatalogOfferPromotion()`

```php
updateUniqueCatalogOfferPromotion($project_id, $external_id, $update_unique_catalog_offer_promotion_request)
```

Update unique catalog offer promotion

Updates the unique catalog offer promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsUniqueCatalogOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$external_id = 56; // int | Promotion external ID. Unique promotion identifier within the project.
$update_unique_catalog_offer_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Offer","de-DE":"Neujahrsangebot"},"items":["elven_sword","elven_boots"]}; // \OpenAPI\Client\Model\UpdateUniqueCatalogOfferPromotionRequest

try {
    $apiInstance->updateUniqueCatalogOfferPromotion($project_id, $external_id, $update_unique_catalog_offer_promotion_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsUniqueCatalogOffersApi->updateUniqueCatalogOfferPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **external_id** | **int**| Promotion external ID. Unique promotion identifier within the project. | |
| **update_unique_catalog_offer_promotion_request** | [**\OpenAPI\Client\Model\UpdateUniqueCatalogOfferPromotionRequest**](../Model/UpdateUniqueCatalogOfferPromotionRequest.md)|  | [optional] |

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
