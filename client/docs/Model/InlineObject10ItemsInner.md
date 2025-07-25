# # InlineObject10ItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** |  | [optional]
**groups** | [**\OpenAPI\Client\Model\InlineObject10ItemsInnerGroupsInner[]**](InlineObject10ItemsInnerGroupsInner.md) |  | [optional]
**name** | **string** |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** |  | [optional]
**description** | **string** |  | [optional]
**image_url** | **string** |  | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyInventoryOptions**](VirtualItemsCurrencyInventoryOptions.md) |  | [optional]
**quantity** | **int** |  | [optional]
**price** | [**\OpenAPI\Client\Model\InlineObject10ItemsInnerPrice**](InlineObject10ItemsInnerPrice.md) |  | [optional]
**virtual_item_type** | **string** | Type of item. | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\BundlesVirtualPricesInner[]**](BundlesVirtualPricesInner.md) | Virtual prices. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**is_bonus** | **bool** |  | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**vp_rewards** | [**\OpenAPI\Client\Model\ClientItemValuePointRewardInner[]**](ClientItemValuePointRewardInner.md) | Value point item reward. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
