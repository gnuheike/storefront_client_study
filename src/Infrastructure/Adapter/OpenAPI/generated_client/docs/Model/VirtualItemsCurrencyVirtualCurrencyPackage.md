# # VirtualItemsCurrencyVirtualCurrencyPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** |  | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**groups** | [**\OpenAPI\Client\Model\BundlesGroupsResponseInner[]**](BundlesGroupsResponseInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyClientAttributesInner[]**](VirtualItemsCurrencyClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;. | [optional]
**bundle_type** | **string** | Type of bundle: &#x60;standard&#x60;/&#x60;virtual_currency_package&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackagePrice**](VirtualItemsCurrencyVirtualCurrencyPackagePrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner[]**](GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner.md) | Virtual prices. | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**content** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyVirtualCurrencyPackageContentInner[]**](VirtualItemsCurrencyVirtualCurrencyPackageContentInner.md) | Virtual currency package content. | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsResponseInner[]**](ItemPeriodsResponseInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. | [optional]
**vp_rewards** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
