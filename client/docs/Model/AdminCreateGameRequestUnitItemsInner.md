# # AdminCreateGameRequestUnitItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. |
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**groups** | [**\OpenAPI\Client\Model\AdminCreateGameRequestGroupsInner[]**](AdminCreateGameRequestGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attribute[]**](Attribute.md) | List of attributes. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**prices** | [**\OpenAPI\Client\Model\AdminCreateGameRequestUnitItemsInnerPricesInner[]**](AdminCreateGameRequestUnitItemsInnerPricesInner.md) | Prices in real currencies. |
**vc_prices** | [**\OpenAPI\Client\Model\AdminCreateGameRequestUnitItemsInnerVcPricesInner[]**](AdminCreateGameRequestUnitItemsInnerVcPricesInner.md) |  | [optional]
**order** | **int** | Game order priority in the list. | [optional]
**is_enabled** | **bool** | If disabled, item cannot be purchased and accessed through inventory. | [optional]
**is_show_in_store** | **bool** | Item is available for purchase. | [optional]
**drm_sku** | **string** | DRM unique ID. |
**pre_order** | [**\OpenAPI\Client\Model\AdminCreateGameRequestUnitItemsInnerPreOrder**](AdminCreateGameRequestUnitItemsInnerPreOrder.md) |  | [optional]
**regions** | [**\OpenAPI\Client\Model\GameKeysRegionsInner[]**](GameKeysRegionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimit**](ItemLimit.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
