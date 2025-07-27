# # BundlesClientBundle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**groups** | [**\OpenAPI\Client\Model\BundlesGroupsResponseInner[]**](BundlesGroupsResponseInner.md) | Groups the item belongs to. | [optional]
**description** | **string** | Item description. | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** | Type of item. | [optional]
**bundle_type** | [**\OpenAPI\Client\Model\BundlesBundleType**](BundlesBundleType.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\BundlesPrice**](BundlesPrice.md) |  | [optional]
**total_content_price** | [**\OpenAPI\Client\Model\BundlesTotalContentPrice**](BundlesTotalContentPrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\BundlesVirtualPricesInner[]**](BundlesVirtualPricesInner.md) | Virtual prices. | [optional]
**can_be_bought** | **bool** | If &#x60;true&#x60;, the user can buy an item. | [optional]
**content** | [**\OpenAPI\Client\Model\BundlesClientContentInner[]**](BundlesClientContentInner.md) | Bundle package content. | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for specific items in the cart. The array is returned in the following cases:  * A discount promotion is configured for a specific item.  * A promo code with the **Discount on selected items** setting is applied.  If no item-level promotions are applied, an empty array is returned. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. | [optional]
**vp_rewards** | [**\OpenAPI\Client\Model\ClientItemValuePointRewardInner[]**](ClientItemValuePointRewardInner.md) | Value point item reward. | [optional]
**order** | **int** | Bundle&#39;s order priority in the list. | [optional] [default to 1]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Bundle&#39;s additional assets. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
