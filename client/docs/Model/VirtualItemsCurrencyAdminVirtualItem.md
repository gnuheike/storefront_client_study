# # VirtualItemsCurrencyAdminVirtualItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**attributes** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminAttributes**](VirtualItemsCurrencyAdminAttributes.md) |  | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**groups** | [**\OpenAPI\Client\Model\BundlesGroupsResponseInner[]**](BundlesGroupsResponseInner.md) | Groups the item belongs to. | [optional]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Item&#39;s additional assets such as screenshots, gameplay video and so on. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;physical_good&#x60;/&#x60;unit&#x60;. | [optional]
**prices** | [**\OpenAPI\Client\Model\VirtualItemsAdminPricesInner[]**](VirtualItemsAdminPricesInner.md) |  | [optional]
**vc_prices** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminGetVcPricesInner[]**](VirtualItemsCurrencyAdminGetVcPricesInner.md) |  | [optional]
**image_url** | **string** |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**order** | **int** | Defines arrangement order. | [optional]
**is_enabled** | **bool** |  | [optional]
**is_show_in_store** | **bool** |  | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyInventoryOptions**](VirtualItemsCurrencyInventoryOptions.md) |  | [optional]
**regions** | [**\OpenAPI\Client\Model\BundlesAdminRegionsInner[]**](BundlesAdminRegionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimitResponse**](ItemLimitResponse.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsResponseInner[]**](ItemPeriodsResponseInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
