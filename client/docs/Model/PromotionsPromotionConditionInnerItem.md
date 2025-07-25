# # PromotionsPromotionConditionInnerItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **array<string,string>** | Name of item. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;physical_good&#x60;/&#x60;unit&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyInventoryOptions**](VirtualItemsCurrencyInventoryOptions.md) |  | [optional]
**external_id** | **string** | Promotion external ID. Unique promotion identifier within the project. | [optional]
**is_enabled** | **bool** |  | [optional]
**redeem_total_limit** | **int** |  | [optional]
**redeem_user_limit** | **int** |  | [optional]
**redeem_code_limit** | **int** | Number of redemptions per code. | [optional] [default to 10]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
