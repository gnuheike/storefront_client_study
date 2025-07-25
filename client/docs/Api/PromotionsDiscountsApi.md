# OpenAPI\Client\PromotionsDiscountsApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemPromotion()**](PromotionsDiscountsApi.md#createItemPromotion) | **POST** /v2/project/{project_id}/admin/promotion/item | Create discount promotion for item |
| [**deleteItemPromotion()**](PromotionsDiscountsApi.md#deleteItemPromotion) | **DELETE** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Delete item promotion |
| [**getItemPromotion()**](PromotionsDiscountsApi.md#getItemPromotion) | **GET** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Get item promotion |
| [**getItemPromotionList()**](PromotionsDiscountsApi.md#getItemPromotionList) | **GET** /v2/project/{project_id}/admin/promotion/item | Get list of item promotions |
| [**updateItemPromotion()**](PromotionsDiscountsApi.md#updateItemPromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Update item promotion |


## `createItemPromotion()`

```php
createItemPromotion($project_id, $create_item_promotion_request): \OpenAPI\Client\Model\InlineObject56
```

Create discount promotion for item

Creates a discount promotion for an item.  Promotions provide a discount (%) on items. The discount will be applied to all prices of the specified items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$create_item_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","discount":{"percent":"10.00"},"items":[{"sku":"com.xsolla.elven_sword_1"},{"sku":"com.xsolla.elven_helmet_1"},{"sku":"com.xsolla.elven_armor_1"}],"name":{"en-US":"Promotion","ru-RU":"Акция"}}; // \OpenAPI\Client\Model\CreateItemPromotionRequest | Object with promotion data.

try {
    $result = $apiInstance->createItemPromotion($project_id, $create_item_promotion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsDiscountsApi->createItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **create_item_promotion_request** | [**\OpenAPI\Client\Model\CreateItemPromotionRequest**](../Model/CreateItemPromotionRequest.md)| Object with promotion data. | |

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

## `deleteItemPromotion()`

```php
deleteItemPromotion($project_id, $promotion_id)
```

Delete item promotion

Deletes [discount promotion](https://developers.xsolla.com/doc/shop-builder/features/discounts/). The deleted promotion: * Disappears from the list of promotions set up in your project. * Is no longer applied to the item catalog and the cart. User can’t buy items with this promotion.  After deletion, the promotion can’t be restored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $apiInstance->deleteItemPromotion($project_id, $promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsDiscountsApi->deleteItemPromotion: ', $e->getMessage(), PHP_EOL;
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

## `getItemPromotion()`

```php
getItemPromotion($project_id, $promotion_id): \OpenAPI\Client\Model\GetItemPromotion200Response
```

Get item promotion

Gets the promotion applied to particular items.  Promotions provide a discount (%) on items. The discount will be applied to all prices of the specified items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.

try {
    $result = $apiInstance->getItemPromotion($project_id, $promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsDiscountsApi->getItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |

### Return type

[**\OpenAPI\Client\Model\GetItemPromotion200Response**](../Model/GetItemPromotion200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPromotionList()`

```php
getItemPromotionList($project_id, $limit, $offset): \OpenAPI\Client\Model\InlineObject55
```

Get list of item promotions

Get the list of item promotions of a project.  Promotions provide a discount (%) on items. The discount will be applied to all prices of the specified items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 59080; // int | Project ID.
$limit = 56; // int | Limit for the number of elements on the page.
$offset = 56; // int | Number of the element from which the list is generated (the count starts from 0).

try {
    $result = $apiInstance->getItemPromotionList($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsDiscountsApi->getItemPromotionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. | [default to 59080] |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject55**](../Model/InlineObject55.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemPromotion()`

```php
updateItemPromotion($project_id, $promotion_id, $create_item_promotion_request)
```

Update item promotion

Updates the promotion.  <div class='note'><b>Note</b><br><br>New data will replace old data. If you want to update only a part of a promotion, you should transfer all required data in request as well.</div>  Promotions provide a discount (%) on items. The discount will be applied to all prices of the specified items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PromotionsDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$create_item_promotion_request = {"date_start":"2020-04-15T18:16:00+05:00","date_end":"2020-04-25T18:16:00+05:00","discount":{"percent":"10.00"},"items":[{"sku":"com.xsolla.elven_sword_1"},{"sku":"com.xsolla.elven_helmet_1"},{"sku":"com.xsolla.elven_armor_1"}],"name":{"en-US":"Promotion","ru-RU":"Акция"}}; // \OpenAPI\Client\Model\CreateItemPromotionRequest | Object with promotion data.

try {
    $apiInstance->updateItemPromotion($project_id, $promotion_id, $create_item_promotion_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsDiscountsApi->updateItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **create_item_promotion_request** | [**\OpenAPI\Client\Model\CreateItemPromotionRequest**](../Model/CreateItemPromotionRequest.md)| Object with promotion data. | |

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
