# # PromotionsDiscountedItemsVerifyInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;physical_good&#x60;/&#x60;unit&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**unit_items** | [**\OpenAPI\Client\Model\PromotionsDiscountedItemsVerifyInnerUnitItemsInner[]**](PromotionsDiscountedItemsVerifyInnerUnitItemsInner.md) | If the item has the unit type, it includes all items in the unit. In the most cases the user should choose one of them as a promo code bonus. | [optional]
**discount** | [**\OpenAPI\Client\Model\PromotionsDiscountedItemsVerifyInnerDiscount**](PromotionsDiscountedItemsVerifyInnerDiscount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
