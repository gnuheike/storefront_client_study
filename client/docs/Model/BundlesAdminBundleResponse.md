# # BundlesAdminBundleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attribute[]**](Attribute.md) | List of attributes. | [optional]
**type** | **string** | Type of item. | [optional]
**bundle_type** | [**\OpenAPI\Client\Model\BundleType**](BundleType.md) |  | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**groups** | [**\OpenAPI\Client\Model\BundlesGroupsResponseInner[]**](BundlesGroupsResponseInner.md) | Groups the item belongs to. | [optional]
**prices** | [**\OpenAPI\Client\Model\BundlesPricesInner[]**](BundlesPricesInner.md) | Prices in real currencies. | [optional]
**virtual_prices** | [**\OpenAPI\Client\Model\BundlesAdminResponseVirtualPrice[]**](BundlesAdminResponseVirtualPrice.md) |  | [optional]
**media_list** | [**ArrayString**](ArrayString.md) |  | [optional]
**order** | **int** | Bundle&#39;s order priority in the list. | [optional] [default to 1]
**is_enabled** | **bool** | If disabled, the item can&#39;t be found and purchased. | [optional] [default to true]
**is_show_in_store** | **bool** | Item is available for purchase. | [optional] [default to false]
**regions** | [**\OpenAPI\Client\Model\BundlesAdminRegionsInner[]**](BundlesAdminRegionsInner.md) |  | [optional]
**content** | [**\OpenAPI\Client\Model\BundlesAdminContentResponse[]**](BundlesAdminContentResponse.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimitResponse**](ItemLimitResponse.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsResponseInner[]**](ItemPeriodsResponseInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. | [optional]
**total_content_price** | [**\OpenAPI\Client\Model\BundlesTotalContentPrice**](BundlesTotalContentPrice.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
