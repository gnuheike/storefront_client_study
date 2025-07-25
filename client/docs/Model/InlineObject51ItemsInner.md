# # InlineObject51ItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** |  | [optional]
**groups** | [**\OpenAPI\Client\Model\InlineObject10ItemsInnerGroupsInner[]**](InlineObject10ItemsInnerGroupsInner.md) |  | [optional]
**name** | **string** |  | [optional]
**type** | **string** |  | [optional]
**virtual_item_type** | **string** | Type of virtual item. | [optional]
**virtual_prices** | **string[]** |  | [optional]
**description** | **string** |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**image_url** | **string** |  | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyInventoryOptions**](VirtualItemsCurrencyInventoryOptions.md) |  | [optional]
**quantity** | **int** |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\InlineObject37ItemsInnerPrice**](InlineObject37ItemsInnerPrice.md) |  | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**vp_rewards** | [**\OpenAPI\Client\Model\ClientItemValuePointRewardInner[]**](ClientItemValuePointRewardInner.md) | Value point item reward. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
