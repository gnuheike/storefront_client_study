# # BundlesClientContentInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, dashes, and underscores. | [optional]
**name** | **string** | Item name. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;. | [optional]
**description** | **string** | Item description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**quantity** | **int** | Quantity of item in a package. | [optional]
**virtual_item_type** | **string** | Type of virtual item. | [optional]
**attributes** | [**\OpenAPI\Client\Model\BundlesClientAttributesInner[]**](BundlesClientAttributesInner.md) | List of attributes and their values corresponding to the item. Can be used for catalog filtering. | [optional]
**price** | [**\OpenAPI\Client\Model\BundlesClientContentInnerPrice**](BundlesClientContentInnerPrice.md) |  | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\BundlesClientContentInnerVirtualPricesInner[]**](BundlesClientContentInnerVirtualPricesInner.md) | Virtual prices. | [optional]
**limits** | [**\OpenAPI\Client\Model\CatalogItemLimits**](CatalogItemLimits.md) |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**groups** | [**\OpenAPI\Client\Model\BundlesGroupsResponseInner[]**](BundlesGroupsResponseInner.md) | Groups the item belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
