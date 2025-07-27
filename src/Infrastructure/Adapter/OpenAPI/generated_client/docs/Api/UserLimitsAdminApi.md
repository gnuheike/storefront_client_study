# OpenAPI\Client\UserLimitsAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUserItemLimit()**](UserLimitsAdminApi.md#addUserItemLimit) | **POST** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Increase number of items available to specified user |
| [**addUserPromotionLimit()**](UserLimitsAdminApi.md#addUserPromotionLimit) | **POST** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Increase promotion limit for specified user |
| [**getUserItemLimit()**](UserLimitsAdminApi.md#getUserItemLimit) | **GET** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Get number of items available to specified user |
| [**getUserPromotionLimit()**](UserLimitsAdminApi.md#getUserPromotionLimit) | **GET** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Get promotion limit for specified user |
| [**removeUserItemLimit()**](UserLimitsAdminApi.md#removeUserItemLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Decrease number of items available to specified user |
| [**removeUserPromotionLimit()**](UserLimitsAdminApi.md#removeUserPromotionLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Decrease promotion limit for specified user |
| [**resetAllUserItemsLimit()**](UserLimitsAdminApi.md#resetAllUserItemsLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/all | Refresh all purchase limits for specified user |
| [**resetAllUserPromotionsLimit()**](UserLimitsAdminApi.md#resetAllUserPromotionsLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/all | Refresh all promotion limits for specified user |
| [**resetUserItemLimit()**](UserLimitsAdminApi.md#resetUserItemLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku}/all | Refresh purchase limit |
| [**resetUserPromotionLimit()**](UserLimitsAdminApi.md#resetUserPromotionLimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id}/all | Refresh promotion limit for users |
| [**setUserItemLimit()**](UserLimitsAdminApi.md#setUserItemLimit) | **PUT** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Set number of items available to specified user |
| [**setUserPromotionLimit()**](UserLimitsAdminApi.md#setUserPromotionLimit) | **PUT** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Set promotion limit for specified user |


## `addUserItemLimit()`

```php
addUserItemLimit($project_id, $item_sku, $add_user_item_limit_request): \OpenAPI\Client\Model\UserLimitItem
```

Increase number of items available to specified user

Increases the remaining number of items available to the specified user within the limit applied.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$add_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddUserItemLimitRequest

try {
    $result = $apiInstance->addUserItemLimit($project_id, $item_sku, $add_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->addUserItemLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **add_user_item_limit_request** | [**\OpenAPI\Client\Model\AddUserItemLimitRequest**](../Model/AddUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitItem**](../Model/UserLimitItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addUserPromotionLimit()`

```php
addUserPromotionLimit($project_id, $promotion_id, $add_user_item_limit_request): \OpenAPI\Client\Model\UserLimitPromotion
```

Increase promotion limit for specified user

Increases the remaining number of times the specified user can use the promotion within the limit applied.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$add_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddUserItemLimitRequest

try {
    $result = $apiInstance->addUserPromotionLimit($project_id, $promotion_id, $add_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->addUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **add_user_item_limit_request** | [**\OpenAPI\Client\Model\AddUserItemLimitRequest**](../Model/AddUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromotion**](../Model/UserLimitPromotion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserItemLimit()`

```php
getUserItemLimit($project_id, $item_sku, $user_external_id): \OpenAPI\Client\Model\UserLimitItem
```

Get number of items available to specified user

Gets the remaining number of items available to the specified user within the limit applied.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$user_external_id = d342dad2-9d59-11e9-a384-42010aa8003f; // string | User external ID

try {
    $result = $apiInstance->getUserItemLimit($project_id, $item_sku, $user_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->getUserItemLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **user_external_id** | **string**| User external ID | |

### Return type

[**\OpenAPI\Client\Model\UserLimitItem**](../Model/UserLimitItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPromotionLimit()`

```php
getUserPromotionLimit($project_id, $promotion_id, $user_external_id): \OpenAPI\Client\Model\UserLimitPromotion
```

Get promotion limit for specified user

Gets the remaining number of times the specified user can use the promotion within the limit applied.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$user_external_id = d342dad2-9d59-11e9-a384-42010aa8003f; // string | User external ID

try {
    $result = $apiInstance->getUserPromotionLimit($project_id, $promotion_id, $user_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->getUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **user_external_id** | **string**| User external ID | |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromotion**](../Model/UserLimitPromotion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUserItemLimit()`

```php
removeUserItemLimit($project_id, $item_sku, $add_user_item_limit_request): \OpenAPI\Client\Model\UserLimitItem
```

Decrease number of items available to specified user

Decreases the remaining number of items available to the specified user within the limit applied.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$add_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddUserItemLimitRequest

try {
    $result = $apiInstance->removeUserItemLimit($project_id, $item_sku, $add_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->removeUserItemLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **add_user_item_limit_request** | [**\OpenAPI\Client\Model\AddUserItemLimitRequest**](../Model/AddUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitItem**](../Model/UserLimitItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUserPromotionLimit()`

```php
removeUserPromotionLimit($project_id, $promotion_id, $add_user_item_limit_request): \OpenAPI\Client\Model\UserLimitPromotion
```

Decrease promotion limit for specified user

Decreases the remaining number of times the specified user can use a promotion within the limit applied.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$add_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":1}; // \OpenAPI\Client\Model\AddUserItemLimitRequest

try {
    $result = $apiInstance->removeUserPromotionLimit($project_id, $promotion_id, $add_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->removeUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **add_user_item_limit_request** | [**\OpenAPI\Client\Model\AddUserItemLimitRequest**](../Model/AddUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromotion**](../Model/UserLimitPromotion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetAllUserItemsLimit()`

```php
resetAllUserItemsLimit($project_id, $reset_all_user_items_limit_request)
```

Refresh all purchase limits for specified user

Refreshes all purchase limits across all items for a specified user so they can purchase these items again.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reset_all_user_items_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"}}; // \OpenAPI\Client\Model\ResetAllUserItemsLimitRequest

try {
    $apiInstance->resetAllUserItemsLimit($project_id, $reset_all_user_items_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->resetAllUserItemsLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reset_all_user_items_limit_request** | [**\OpenAPI\Client\Model\ResetAllUserItemsLimitRequest**](../Model/ResetAllUserItemsLimitRequest.md)|  | [optional] |

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

## `resetAllUserPromotionsLimit()`

```php
resetAllUserPromotionsLimit($project_id, $reset_all_user_items_limit_request)
```

Refresh all promotion limits for specified user

Refreshes all limits across all promotions for the specified user so they can use these promotions again.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$reset_all_user_items_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"}}; // \OpenAPI\Client\Model\ResetAllUserItemsLimitRequest

try {
    $apiInstance->resetAllUserPromotionsLimit($project_id, $reset_all_user_items_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->resetAllUserPromotionsLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **reset_all_user_items_limit_request** | [**\OpenAPI\Client\Model\ResetAllUserItemsLimitRequest**](../Model/ResetAllUserItemsLimitRequest.md)|  | [optional] |

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

## `resetUserItemLimit()`

```php
resetUserItemLimit($project_id, $item_sku, $reset_user_item_limit_request)
```

Refresh purchase limit

Refreshes the purchase limit for an item so a user can buy it again. If the *user* parameter is `null`, this call refreshes this limit for all users.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$reset_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"}}; // \OpenAPI\Client\Model\ResetUserItemLimitRequest

try {
    $apiInstance->resetUserItemLimit($project_id, $item_sku, $reset_user_item_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->resetUserItemLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **reset_user_item_limit_request** | [**\OpenAPI\Client\Model\ResetUserItemLimitRequest**](../Model/ResetUserItemLimitRequest.md)|  | [optional] |

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

## `resetUserPromotionLimit()`

```php
resetUserPromotionLimit($project_id, $promotion_id, $reset_user_item_limit_request)
```

Refresh promotion limit for users

Refreshes the promotion limit so a user can use this promotion again. If the *user* parameter is `null`, this call refreshes this limit for all users.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$reset_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"}}; // \OpenAPI\Client\Model\ResetUserItemLimitRequest

try {
    $apiInstance->resetUserPromotionLimit($project_id, $promotion_id, $reset_user_item_limit_request);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->resetUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **reset_user_item_limit_request** | [**\OpenAPI\Client\Model\ResetUserItemLimitRequest**](../Model/ResetUserItemLimitRequest.md)|  | [optional] |

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

## `setUserItemLimit()`

```php
setUserItemLimit($project_id, $item_sku, $set_user_item_limit_request): \OpenAPI\Client\Model\UserLimitItem
```

Set number of items available to specified user

Sets the number of items the specified user can buy within the limit applied after it was increased or decreased.  User limit API allows you to sell an item in a limited quantity. To configure the purchase limits, go to the Admin section of the desired item type module: * [Game Keys](https://developers.xsolla.com/api/shop-builder/operation/admin-create-game/) * [Virtual Items & Currency](https://developers.xsolla.com/api/shop-builder/operation/admin-get-virtual-items-list/) * [Bundles](https://developers.xsolla.com/api/shop-builder/operation/admin-get-bundle-list/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$set_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":0}; // \OpenAPI\Client\Model\SetUserItemLimitRequest

try {
    $result = $apiInstance->setUserItemLimit($project_id, $item_sku, $set_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->setUserItemLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **set_user_item_limit_request** | [**\OpenAPI\Client\Model\SetUserItemLimitRequest**](../Model/SetUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitItem**](../Model/UserLimitItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setUserPromotionLimit()`

```php
setUserPromotionLimit($project_id, $promotion_id, $set_user_item_limit_request): \OpenAPI\Client\Model\UserLimitPromotion
```

Set promotion limit for specified user

Sets the number of times the specified user can use a promotion within the limit applied after it was increased or decreased.  User limit API allows you to limit the number of times users can use a promotion. For configuring the user limit itself, go to the Admin section of the desired promotion type: * [Discount Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-discounts/) * [Bonus Promotions](https://developers.xsolla.com/api/shop-builder/tag/promotions-bonuses/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserLimitsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$promotion_id = 111425; // int | Promotion ID. Unique promotion identifier within the project.
$set_user_item_limit_request = {"user":{"user_external_id":"d342dad2-9d59-11e9-a384-42010aa8003f"},"available":0}; // \OpenAPI\Client\Model\SetUserItemLimitRequest

try {
    $result = $apiInstance->setUserPromotionLimit($project_id, $promotion_id, $set_user_item_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLimitsAdminApi->setUserPromotionLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **promotion_id** | **int**| Promotion ID. Unique promotion identifier within the project. | |
| **set_user_item_limit_request** | [**\OpenAPI\Client\Model\SetUserItemLimitRequest**](../Model/SetUserItemLimitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserLimitPromotion**](../Model/UserLimitPromotion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
