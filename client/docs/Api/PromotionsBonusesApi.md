# OpenAPI\Client\PromotionsBonusesApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBonusPromotion()**](PromotionsBonusesApi.md#createBonusPromotion) | **POST** /v2/project/{project_id}/admin/promotion/bonus | Create bonus promotion |
| [**deleteBonusPromotion()**](PromotionsBonusesApi.md#deleteBonusPromotion) | **DELETE** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Delete bonus promotion |
| [**getBonusPromotion()**](PromotionsBonusesApi.md#getBonusPromotion) | **GET** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Get bonus promotion |
| [**getBonusPromotionList()**](PromotionsBonusesApi.md#getBonusPromotionList) | **GET** /v2/project/{project_id}/admin/promotion/bonus | Get list of bonus promotions |
| [**updateBonusPromotion()**](PromotionsBonusesApi.md#updateBonusPromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Update bonus promotion |


## `createBonusPromotion()`

```php
createBonusPromotion($project_id, $create_bonus_promotion_request): \OpenAPI\Client\Model\InlineObject56
```

Create bonus promotion

Creates the bonus promotion.  Promotion adds free bonus items to the purchase made by a user. The promotion can be applied to every purchase within a project or to a purchase that includes particular items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsBonusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_bonus_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"condition":[{"sku":"com.xsolla.elven_boots_1"},{"sku":"com.xsolla.elven_knife_1"}],"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1},{"sku":"com.xsolla.elven_shield_1","quantity":2},{"sku":"com.xsolla.elven_gloves_1","quantity":2}]}; // \OpenAPI\Client\Model\CreateBonusPromotionRequest

try {
    $result = $apiInstance->createBonusPromotion($project_id, $create_bonus_promotion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsBonusesApi->createBonusPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_bonus_promotion_request** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequest**](../Model/CreateBonusPromotionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject56**](../Model/InlineObject56.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBonusPromotion()`

```php
deleteBonusPromotion($project_id, $promotion_id)
```

Delete bonus promotion

Deletes [bonus promotion](https://developers.xsolla.com/doc/shop-builder/features/bonuses/). The deleted promotion: * Disappears from the list of promotions set up in your project. * Is no longer applied to the item catalog and the cart. User can’t get bonus items with this promotion.  After deletion, the promotion can’t be restored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsBonusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $apiInstance->deleteBonusPromotion($project_id, $promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsBonusesApi->deleteBonusPromotion: ', $e->getMessage(), PHP_EOL;
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

## `getBonusPromotion()`

```php
getBonusPromotion($project_id, $promotion_id): \OpenAPI\Client\Model\Promotions200GetBonusPromotionModel
```

Get bonus promotion

Gets the bonus promotion.  Promotion adds free bonus items to the purchase made by a user. The promotion can be applied to every purchase within a project or to a purchase that includes particular items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsBonusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $result = $apiInstance->getBonusPromotion($project_id, $promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsBonusesApi->getBonusPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\Promotions200GetBonusPromotionModel**](../Model/Promotions200GetBonusPromotionModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBonusPromotionList()`

```php
getBonusPromotionList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject58
```

Get list of bonus promotions

Gets the list of bonus promotions of a project.  Promotion adds free bonus items to the purchase made by a user. The promotion can be applied to every purchase within a project or to a purchase that includes particular items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsBonusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getBonusPromotionList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsBonusesApi->getBonusPromotionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject58**](../Model/InlineObject58.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBonusPromotion()`

```php
updateBonusPromotion($project_id, $promotion_id, $create_bonus_promotion_request)
```

Update bonus promotion

Updates the promotion.  <div class='note'><b>Note</b><br><br>New data will replace old data. If you want to update only a part of a promotion, you should transfer all required data in request as well.</div>  Promotion adds free bonus items to the purchase made by a user. The promotion can be applied to every purchase within a project or to a purchase that includes particular items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsBonusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$create_bonus_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","name":{"en-US":"New Year Bonus","de-DE":"Neujahrsbonus"},"condition":[{"sku":"com.xsolla.elven_boots_1"},{"sku":"com.xsolla.elven_knife_1"}],"bonus":[{"sku":"com.xsolla.elven_sword_1","quantity":1},{"sku":"com.xsolla.elven_shield_1","quantity":2},{"sku":"com.xsolla.elven_gloves_1","quantity":2}]}; // \OpenAPI\Client\Model\CreateBonusPromotionRequest

try {
    $apiInstance->updateBonusPromotion($project_id, $promotion_id, $create_bonus_promotion_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsBonusesApi->updateBonusPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **create_bonus_promotion_request** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequest**](../Model/CreateBonusPromotionRequest.md)|  | [optional] |

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
