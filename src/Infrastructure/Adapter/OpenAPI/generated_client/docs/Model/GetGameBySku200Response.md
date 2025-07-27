# # GetGameBySku200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**groups** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseGroupsInner[]**](GetGameBySku200ResponseGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;physical_good&#x60;/&#x60;unit&#x60;. | [optional]
**unit_type** | **string** | Type of unit: &#x60;game&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**unit_items** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInner[]**](GetGameBySku200ResponseUnitItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
