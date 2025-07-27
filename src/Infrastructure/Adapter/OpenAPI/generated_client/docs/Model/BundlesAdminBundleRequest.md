# # BundlesAdminBundleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. |
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  |
**groups** | **string[]** | Groups the item belongs to. &lt;div class&#x3D;\&quot;note\&quot;&gt;&lt;strong&gt;Note.&lt;/strong&gt; The string value refers to group &#x60;external_id&#x60;.&lt;/div&gt; | [optional]
**attributes** | [**\OpenAPI\Client\Model\AdminPostPutAttributeItem[]**](AdminPostPutAttributeItem.md) | List of attributes. &lt;div class&#x3D;\&quot;notice\&quot;&gt;&lt;strong&gt;Attention.&lt;/strong&gt; You &lt;strong&gt;can&#39;t specify more than 20 attributes&lt;/strong&gt; for the item. Any attempts to exceed the limit result in an error.&lt;/div&gt; | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  |
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**prices** | [**\OpenAPI\Client\Model\BundlesPricesInner[]**](BundlesPricesInner.md) | Prices in real currencies. | [optional]
**vc_prices** | [**ArrayString**](ArrayString.md) |  | [optional]
**bundle_type** | [**\OpenAPI\Client\Model\BundlesBundleType**](BundlesBundleType.md) |  | [optional]
**content** | [**\OpenAPI\Client\Model\BundlesAdminContentRequestInner[]**](BundlesAdminContentRequestInner.md) |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**is_enabled** | **bool** | If disabled, the item can&#39;t be found and purchased. | [optional] [default to true]
**is_show_in_store** | **bool** | Item is available for purchase. | [optional] [default to false]
**media_list** | [**ArrayString**](ArrayString.md) |  | [optional]
**order** | **int** | Bundle&#39;s order priority in the list. | [optional] [default to 1]
**regions** | [**\OpenAPI\Client\Model\BundlesAdminRegionsInner[]**](BundlesAdminRegionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimit**](ItemLimit.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. Attributes allow you to add more info to items like the player&#39;s required level to use the item. Attributes enrich your game&#39;s internal logic and are accessible through dedicated GET methods and webhooks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
