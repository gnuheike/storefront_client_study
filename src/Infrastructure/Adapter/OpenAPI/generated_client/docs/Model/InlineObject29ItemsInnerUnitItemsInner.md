# # InlineObject29ItemsInnerUnitItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID that is provided upon item creation. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**type** | **string** | Type of item. In this case it is always &#x60;game_key&#x60;. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**prices** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerUnitItemsInnerPricesInner[]**](InlineObject29ItemsInnerUnitItemsInnerPricesInner.md) | Prices in real currencies. | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerUnitItemsInnerVirtualPricesInner[]**](InlineObject29ItemsInnerUnitItemsInnerVirtualPricesInner.md) |  | [optional]
**order** | **int** | Game order priority in the list. | [optional]
**is_enabled** | **bool** | If disabled, item cannot be purchased and accessed through inventory. | [optional]
**is_show_in_store** | **bool** | Item is available for purchase. | [optional]
**drm_name** | **string** | Game key DRM name. | [optional]
**drm_sku** | **string** | DRM unique ID. | [optional]
**drm_image** | **string** | Game key DRM icon. | [optional]
**drm_id** | **int** | DRM internal unique ID. | [optional]
**keys** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerUnitItemsInnerKeys**](InlineObject29ItemsInnerUnitItemsInnerKeys.md) |  | [optional]
**is_sales_exist** | **bool** | If &#x60;true&#x60;, the game key was purchased by users. | [optional]
**pre_order** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerUnitItemsInnerPreOrder**](InlineObject29ItemsInnerUnitItemsInnerPreOrder.md) |  | [optional]
**regions** | [**\OpenAPI\Client\Model\GameKeysRegionsInner[]**](GameKeysRegionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimitResponse**](ItemLimitResponse.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsResponseInner[]**](ItemPeriodsResponseInner.md) | Item sales period. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attribute[]**](Attribute.md) | List of attributes. | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**groups** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerGroupsInner[]**](InlineObject29ItemsInnerGroupsInner.md) | Groups the item belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
