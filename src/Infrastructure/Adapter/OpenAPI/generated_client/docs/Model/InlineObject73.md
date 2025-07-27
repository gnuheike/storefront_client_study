# # InlineObject73

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID that is provided upon item creation. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**groups** | [**\OpenAPI\Client\Model\InlineObject72ItemsInnerGroupsInner[]**](InlineObject72ItemsInnerGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyClientAttributesInner[]**](VirtualItemsCurrencyClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;game_key&#x60;/&#x60;physical_good&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\InlineObject72ItemsInnerPrice**](InlineObject72ItemsInnerPrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\InlineObject73VirtualPricesInner[]**](InlineObject73VirtualPricesInner.md) | Virtual prices. | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\InlineObject72ItemsInnerInventoryOptions**](InlineObject72ItemsInnerInventoryOptions.md) |  | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**virtual_item_type** | **string** | Type of virtual item. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. | [optional]
**vp_rewards** | [**\OpenAPI\Client\Model\ClientItemValuePointRewardInner[]**](ClientItemValuePointRewardInner.md) | Value point item reward. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
