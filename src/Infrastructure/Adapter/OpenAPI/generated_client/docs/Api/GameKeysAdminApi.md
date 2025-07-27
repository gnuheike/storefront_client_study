# OpenAPI\Client\GameKeysAdminApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminCreateGame()**](GameKeysAdminApi.md#adminCreateGame) | **POST** /v2/project/{project_id}/admin/items/game | Create game |
| [**adminDeleteCodesById()**](GameKeysAdminApi.md#adminDeleteCodesById) | **DELETE** /v2/project/{project_id}/admin/items/game/key/delete/id/{item_id} | Delete codes by ID |
| [**adminDeleteCodesBySku()**](GameKeysAdminApi.md#adminDeleteCodesBySku) | **DELETE** /v2/project/{project_id}/admin/items/game/key/delete/sku/{item_sku} | Delete codes |
| [**adminDeleteGameById()**](GameKeysAdminApi.md#adminDeleteGameById) | **DELETE** /v2/project/{project_id}/admin/items/game/id/{item_id} | Delete game by ID |
| [**adminDeleteGameBySku()**](GameKeysAdminApi.md#adminDeleteGameBySku) | **DELETE** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Delete game by SKU |
| [**adminGetCodesById()**](GameKeysAdminApi.md#adminGetCodesById) | **GET** /v2/project/{project_id}/admin/items/game/key/request/id/{item_id} | Get codes by ID |
| [**adminGetCodesBySku()**](GameKeysAdminApi.md#adminGetCodesBySku) | **GET** /v2/project/{project_id}/admin/items/game/key/request/sku/{item_sku} | Get codes |
| [**adminGetCodesSession()**](GameKeysAdminApi.md#adminGetCodesSession) | **GET** /v2/project/{project_id}/admin/items/game/key/upload/session/{session_id} | Get codes loading session information |
| [**adminGetGameById()**](GameKeysAdminApi.md#adminGetGameById) | **GET** /v2/project/{project_id}/admin/items/game/id/{item_id} | Get game by ID (admin) |
| [**adminGetGameBySku()**](GameKeysAdminApi.md#adminGetGameBySku) | **GET** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Get game (admin) |
| [**adminGetGameList()**](GameKeysAdminApi.md#adminGetGameList) | **GET** /v2/project/{project_id}/admin/items/game | Get list of games (admin) |
| [**adminUpdateGameById()**](GameKeysAdminApi.md#adminUpdateGameById) | **PUT** /v2/project/{project_id}/admin/items/game/id/{item_id} | Update game by ID |
| [**adminUpdateGameBySku()**](GameKeysAdminApi.md#adminUpdateGameBySku) | **PUT** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Update game by SKU |
| [**adminUploadCodesById()**](GameKeysAdminApi.md#adminUploadCodesById) | **POST** /v2/project/{project_id}/admin/items/game/key/upload/id/{item_id} | Upload codes by ID |
| [**adminUploadCodesBySku()**](GameKeysAdminApi.md#adminUploadCodesBySku) | **POST** /v2/project/{project_id}/admin/items/game/key/upload/sku/{item_sku} | Upload codes |


## `adminCreateGame()`

```php
adminCreateGame($project_id, $admin_create_game_request): \OpenAPI\Client\Model\AdminCreateGame201Response
```

Create game

Creates a game in the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_game_request = new \OpenAPI\Client\Model\AdminCreateGameRequest(); // \OpenAPI\Client\Model\AdminCreateGameRequest | Object with game data.

try {
    $result = $apiInstance->adminCreateGame($project_id, $admin_create_game_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminCreateGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **admin_create_game_request** | [**\OpenAPI\Client\Model\AdminCreateGameRequest**](../Model/AdminCreateGameRequest.md)| Object with game data. | |

### Return type

[**\OpenAPI\Client\Model\AdminCreateGame201Response**](../Model/AdminCreateGame201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteCodesById()`

```php
adminDeleteCodesById($project_id, $item_id, $user_email, $reason, $region_id): string
```

Delete codes by ID

Deletes all codes by game key ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.
$user_email = email@email.com; // string | User email.
$reason = Very important; // string | Reason receiving codes.
$region_id = 1; // int | Region ID.

try {
    $result = $apiInstance->adminDeleteCodesById($project_id, $item_id, $user_email, $reason, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminDeleteCodesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **user_email** | **string**| User email. | |
| **reason** | **string**| Reason receiving codes. | |
| **region_id** | **int**| Region ID. | [optional] [default to 1] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteCodesBySku()`

```php
adminDeleteCodesBySku($project_id, $item_sku, $user_email, $reason, $region_id): string
```

Delete codes

Deletes all codes by game key SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$user_email = email@email.com; // string | User email.
$reason = Very important; // string | Reason receiving codes.
$region_id = 1; // int | Region ID.

try {
    $result = $apiInstance->adminDeleteCodesBySku($project_id, $item_sku, $user_email, $reason, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminDeleteCodesBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **user_email** | **string**| User email. | |
| **reason** | **string**| Reason receiving codes. | |
| **region_id** | **int**| Region ID. | [optional] [default to 1] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteGameById()`

```php
adminDeleteGameById($project_id, $item_id)
```

Delete game by ID

Deletes a game in the project by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.

try {
    $apiInstance->adminDeleteGameById($project_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminDeleteGameById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |

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

## `adminDeleteGameBySku()`

```php
adminDeleteGameBySku($project_id, $item_sku)
```

Delete game by SKU

Deletes a game in the project by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.

try {
    $apiInstance->adminDeleteGameBySku($project_id, $item_sku);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminDeleteGameBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |

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

## `adminGetCodesById()`

```php
adminGetCodesById($project_id, $item_id, $user_email, $quantity, $reason, $region_id): string
```

Get codes by ID

Gets a certain number of codes by game key ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.
$user_email = email@email.com; // string | User email.
$quantity = 100; // int | Codes quantity.
$reason = Very important; // string | Reason receiving codes.
$region_id = 1; // int | Region ID.

try {
    $result = $apiInstance->adminGetCodesById($project_id, $item_id, $user_email, $quantity, $reason, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetCodesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **user_email** | **string**| User email. | |
| **quantity** | **int**| Codes quantity. | |
| **reason** | **string**| Reason receiving codes. | |
| **region_id** | **int**| Region ID. | [optional] [default to 1] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetCodesBySku()`

```php
adminGetCodesBySku($project_id, $item_sku, $user_email, $quantity, $reason, $region_id): string
```

Get codes

Gets a certain number of codes by game key SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$user_email = email@email.com; // string | User email.
$quantity = 100; // int | Codes quantity.
$reason = Very important; // string | Reason receiving codes.
$region_id = 1; // int | Region ID.

try {
    $result = $apiInstance->adminGetCodesBySku($project_id, $item_sku, $user_email, $quantity, $reason, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetCodesBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **user_email** | **string**| User email. | |
| **quantity** | **int**| Codes quantity. | |
| **reason** | **string**| Reason receiving codes. | |
| **region_id** | **int**| Region ID. | [optional] [default to 1] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetCodesSession()`

```php
adminGetCodesSession($project_id, $session_id): \OpenAPI\Client\Model\InlineObject31
```

Get codes loading session information

Gets codes loading session information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$session_id = 'fc7105b6e8ee01339582970b37697242'; // string | Session ID.

try {
    $result = $apiInstance->adminGetCodesSession($project_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetCodesSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **session_id** | **string**| Session ID. | [default to &#39;fc7105b6e8ee01339582970b37697242&#39;] |

### Return type

[**\OpenAPI\Client\Model\InlineObject31**](../Model/InlineObject31.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetGameById()`

```php
adminGetGameById($project_id, $item_id, $promo_code): \OpenAPI\Client\Model\InlineObject30
```

Get game by ID (admin)

Gets a game for administration. Game consists of game keys which could be purchased by a user.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetGameById($project_id, $item_id, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetGameById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject30**](../Model/InlineObject30.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetGameBySku()`

```php
adminGetGameBySku($project_id, $item_sku, $promo_code): \OpenAPI\Client\Model\InlineObject30
```

Get game (admin)

Gets a game for administration. Game consists of game keys which could be purchased by a user.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetGameBySku($project_id, $item_sku, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetGameBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject30**](../Model/InlineObject30.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetGameList()`

```php
adminGetGameList($project_id, $limit, $offset, $promo_code): \OpenAPI\Client\Model\InlineObject29
```

Get list of games (admin)

Gets the list of games within a project for administration. Game consists of game keys which could be purchased by a user.  <div class=\"note\"><b>Note</b><br><br>Do not use this endpoint for building a store catalog.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$promo_code = WINTER2021; // string | Unique case sensitive code. Contains letters and numbers.

try {
    $result = $apiInstance->adminGetGameList($project_id, $limit, $offset, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminGetGameList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **promo_code** | **string**| Unique case sensitive code. Contains letters and numbers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject29**](../Model/InlineObject29.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUpdateGameById()`

```php
adminUpdateGameById($project_id, $item_id, $admin_create_game_request)
```

Update game by ID

Updates a game in the project by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.
$admin_create_game_request = new \OpenAPI\Client\Model\AdminCreateGameRequest(); // \OpenAPI\Client\Model\AdminCreateGameRequest | Object with game data.

try {
    $apiInstance->adminUpdateGameById($project_id, $item_id, $admin_create_game_request);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminUpdateGameById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **admin_create_game_request** | [**\OpenAPI\Client\Model\AdminCreateGameRequest**](../Model/AdminCreateGameRequest.md)| Object with game data. | |

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

## `adminUpdateGameBySku()`

```php
adminUpdateGameBySku($project_id, $item_sku, $admin_create_game_request)
```

Update game by SKU

Updates a game in the project by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$admin_create_game_request = new \OpenAPI\Client\Model\AdminCreateGameRequest(); // \OpenAPI\Client\Model\AdminCreateGameRequest | Object with game data.

try {
    $apiInstance->adminUpdateGameBySku($project_id, $item_sku, $admin_create_game_request);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminUpdateGameBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **admin_create_game_request** | [**\OpenAPI\Client\Model\AdminCreateGameRequest**](../Model/AdminCreateGameRequest.md)| Object with game data. | |

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

## `adminUploadCodesById()`

```php
adminUploadCodesById($project_id, $item_id, $file, $region_id): \OpenAPI\Client\Model\InlineObject31
```

Upload codes by ID

Uploads codes by game key ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_id = 656; // string | Item ID.
$file = '/path/to/file.txt'; // \SplFileObject | File with codes.
$region_id = 56; // int | Region ID.

try {
    $result = $apiInstance->adminUploadCodesById($project_id, $item_id, $file, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminUploadCodesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_id** | **string**| Item ID. | |
| **file** | **\SplFileObject****\SplFileObject**| File with codes. | |
| **region_id** | **int**| Region ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject31**](../Model/InlineObject31.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUploadCodesBySku()`

```php
adminUploadCodesBySku($project_id, $item_sku, $file, $region_id): \OpenAPI\Client\Model\InlineObject31
```

Upload codes

Uploads codes by game key SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$item_sku = booster_mega_1; // string | Item SKU.
$file = '/path/to/file.txt'; // \SplFileObject | File with codes.
$region_id = 56; // int | Region ID.

try {
    $result = $apiInstance->adminUploadCodesBySku($project_id, $item_sku, $file, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysAdminApi->adminUploadCodesBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **item_sku** | **string**| Item SKU. | |
| **file** | **\SplFileObject****\SplFileObject**| File with codes. | |
| **region_id** | **int**| Region ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject31**](../Model/InlineObject31.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
