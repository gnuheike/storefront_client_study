# # InlineObject27ItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**groups** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseGroupsInner[]**](GetGameBySku200ResponseGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**type** | **string** | Type of item: &#x60;game_key&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**price** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInnerPrice**](GetGameBySku200ResponseUnitItemsInnerPrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner[]**](GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner.md) | Virtual prices. | [optional]
**drm_name** | **string** | DRM name. | [optional]
**drm_sku** | **string** | Unique DRM ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**has_keys** | **bool** | If &#x60;true&#x60;, the game key has keys for sale. | [optional]
**is_pre_order** | **bool** | If &#x60;true&#x60;, the game key is pre-order and the release date hasn&#39;t passed. | [optional]
**release_date** | **string** | Game key release date in the ISO 8601 format. | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsResponseInner[]**](ItemPeriodsResponseInner.md) | Item sales period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
