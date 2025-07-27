# # GrantEntitlementAdminRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_external_id** | **string** | Unique user identifier. |
**game** | [**\OpenAPI\Client\Model\GrantEntitlementAdminRequestGame**](GrantEntitlementAdminRequestGame.md) |  |
**drm** | [**\OpenAPI\Client\Model\GrantEntitlementAdminRequestDrm**](GrantEntitlementAdminRequestDrm.md) |  |
**code** | **string** | Game code of the game. | [optional]
**mode** | **string** | What type of entitlements should be granted. If the parameter is set to &#x60;sandbox&#x60;, the entitlement will be granted to the user in the sandbox mode. If the parameter is set to &#x60;default&#x60;, the entitlement will be granted to the user in the live mode. |
**user_country** | **string** | User&#39;s country. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
