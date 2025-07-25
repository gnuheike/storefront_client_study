# OpenAPI\Client\GameKeysEntitlementApi

All URIs are relative to https://store.xsolla.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGames()**](GameKeysEntitlementApi.md#getUserGames) | **GET** /v2/project/{project_id}/entitlement | Get list of games owned by user |
| [**grantEntitlementAdmin()**](GameKeysEntitlementApi.md#grantEntitlementAdmin) | **POST** /v2/project/{project_id}/admin/entitlement/grant | Grant entitlement (admin) |
| [**redeemGamePinCode()**](GameKeysEntitlementApi.md#redeemGamePinCode) | **POST** /v2/project/{project_id}/entitlement/redeem | Redeem game code by client |
| [**revokeEntitlementAdmin()**](GameKeysEntitlementApi.md#revokeEntitlementAdmin) | **POST** /v2/project/{project_id}/admin/entitlement/revoke | Revoke entitlement (admin) |


## `getUserGames()`

```php
getUserGames($project_id, $limit, $offset, $sandbox, $additional_fields): \OpenAPI\Client\Model\InlineObject32
```

Get list of games owned by user

Get the list of games owned by the user. The response will contain an array of games owned by a particular user.  <div class=\"notice\"><strong>Attention</strong><br><br>All projects have the limitation to the number of items that you can get in the response. The default and maximum value is <strong>50 items per response.</strong> To get more data page by page, use <b>limit</b> and <b>offset</b> fields.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$limit = 50; // int | Limit for the number of elements on the page.
$offset = 0; // int | Number of the element from which the list is generated (the count starts from 0).
$sandbox = 0; // int | What type of entitlements should be returned. If the parameter is set to 1, the entitlements received by the user in the sandbox mode only are returned. If the parameter isn't passed or is set to 0, the entitlements received by the user in the live mode only are returned.
$additional_fields = array('additional_fields_example'); // string[] | The list of additional fields. These fields will be in the response if you send them in your request. Available fields `attributes`.

try {
    $result = $apiInstance->getUserGames($project_id, $limit, $offset, $sandbox, $additional_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysEntitlementApi->getUserGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **limit** | **int**| Limit for the number of elements on the page. | [optional] |
| **offset** | **int**| Number of the element from which the list is generated (the count starts from 0). | [optional] |
| **sandbox** | **int**| What type of entitlements should be returned. If the parameter is set to 1, the entitlements received by the user in the sandbox mode only are returned. If the parameter isn&#39;t passed or is set to 0, the entitlements received by the user in the live mode only are returned. | [optional] [default to 0] |
| **additional_fields** | [**string[]**](../Model/string.md)| The list of additional fields. These fields will be in the response if you send them in your request. Available fields &#x60;attributes&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InlineObject32**](../Model/InlineObject32.md)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantEntitlementAdmin()`

```php
grantEntitlementAdmin($project_id, $grant_entitlement_admin_request)
```

Grant entitlement (admin)

Grants entitlement to user.  <div class=\"notice\"><strong>Attention</strong><br><br>Game codes or games for DRM free platform can be granted only.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$grant_entitlement_admin_request = new \OpenAPI\Client\Model\GrantEntitlementAdminRequest(); // \OpenAPI\Client\Model\GrantEntitlementAdminRequest

try {
    $apiInstance->grantEntitlementAdmin($project_id, $grant_entitlement_admin_request);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysEntitlementApi->grantEntitlementAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **grant_entitlement_admin_request** | [**\OpenAPI\Client\Model\GrantEntitlementAdminRequest**](../Model/GrantEntitlementAdminRequest.md)|  | |

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

## `redeemGamePinCode()`

```php
redeemGamePinCode($project_id, $redeem_game_pin_code_request)
```

Redeem game code by client

Grants entitlement by a provided game code.  <div class=\"notice\"><strong>Attention</strong><br><br>You can redeem codes only for the DRM-free platform.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: XsollaLoginUserJWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameKeysEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$redeem_game_pin_code_request = new \OpenAPI\Client\Model\RedeemGamePinCodeRequest(); // \OpenAPI\Client\Model\RedeemGamePinCodeRequest

try {
    $apiInstance->redeemGamePinCode($project_id, $redeem_game_pin_code_request);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysEntitlementApi->redeemGamePinCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **redeem_game_pin_code_request** | [**\OpenAPI\Client\Model\RedeemGamePinCodeRequest**](../Model/RedeemGamePinCodeRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[XsollaLoginUserJWT](../../README.md#XsollaLoginUserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeEntitlementAdmin()`

```php
revokeEntitlementAdmin($project_id, $revoke_entitlement_admin_request)
```

Revoke entitlement (admin)

Revokes entitlement of user.  <div class=\"notice\"><strong>Attention</strong><br><br>Game codes or games for DRM free platform can be revoked only.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GameKeysEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$revoke_entitlement_admin_request = new \OpenAPI\Client\Model\RevokeEntitlementAdminRequest(); // \OpenAPI\Client\Model\RevokeEntitlementAdminRequest

try {
    $apiInstance->revokeEntitlementAdmin($project_id, $revoke_entitlement_admin_request);
} catch (Exception $e) {
    echo 'Exception when calling GameKeysEntitlementApi->revokeEntitlementAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | |
| **revoke_entitlement_admin_request** | [**\OpenAPI\Client\Model\RevokeEntitlementAdminRequest**](../Model/RevokeEntitlementAdminRequest.md)|  | |

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
