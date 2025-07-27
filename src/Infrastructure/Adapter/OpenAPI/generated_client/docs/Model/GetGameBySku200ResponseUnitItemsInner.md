# # GetGameBySku200ResponseUnitItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**type** | **string** | Type of item: &#x60;game_key&#x60;. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInnerPrice**](GetGameBySku200ResponseUnitItemsInnerPrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner[]**](GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner.md) | Virtual prices. | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**drm_name** | **string** | DRM name. | [optional]
**drm_sku** | **string** | Unique DRM ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**has_keys** | **bool** | If &#x60;true&#x60;, the game key has keys for sale. | [optional]
**is_pre_order** | **bool** | If &#x60;true&#x60;, the game key is pre-order and the release date hasn&#39;t passed. | [optional]
**release_date** | **string** | Game key release date in the ISO 8601 format. | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]
**vp_rewards** | [**\OpenAPI\Client\Model\ClientItemValuePointRewardInner[]**](ClientItemValuePointRewardInner.md) | Value point item reward. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
