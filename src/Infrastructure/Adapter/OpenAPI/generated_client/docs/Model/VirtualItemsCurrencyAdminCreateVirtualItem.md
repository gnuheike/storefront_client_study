# # VirtualItemsCurrencyAdminCreateVirtualItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Item&#39;s additional assets such as screenshots, gameplay video and so on. | [optional]
**groups** | **string[]** | Groups the item belongs to. &lt;div class&#x3D;\&quot;note\&quot;&gt;&lt;strong&gt;Note.&lt;/strong&gt; The string value refers to group &#x60;external_id&#x60;.&lt;/div&gt; | [optional]
**attributes** | [**\OpenAPI\Client\Model\AdminPostPutAttributeItem[]**](AdminPostPutAttributeItem.md) | List of attributes. &lt;div class&#x3D;\&quot;notice\&quot;&gt;&lt;strong&gt;Attention.&lt;/strong&gt; You &lt;strong&gt;can&#39;t specify more than 20 attributes&lt;/strong&gt; for the item. Any attempts to exceed the limit result in an error.&lt;/div&gt; | [optional]
**prices** | [**\OpenAPI\Client\Model\VirtualItemsAdminPricesInner[]**](VirtualItemsAdminPricesInner.md) |  | [optional]
**vc_prices** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminCreateVcPricesInner[]**](VirtualItemsCurrencyAdminCreateVcPricesInner.md) |  | [optional]
**is_enabled** | **bool** |  | [optional]
**is_deleted** | **bool** |  | [optional]
**is_show_in_store** | **bool** |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**order** | **int** | Defines arrangement order. | [optional]
**inventory_options** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyInventoryOptions**](VirtualItemsCurrencyInventoryOptions.md) |  | [optional]
**pre_order** | [**\OpenAPI\Client\Model\VirtualItemsCurrencyAdminPreOrder**](VirtualItemsCurrencyAdminPreOrder.md) |  | [optional]
**regions** | [**\OpenAPI\Client\Model\BundlesAdminRegionsInner[]**](BundlesAdminRegionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ItemLimit**](ItemLimit.md) |  | [optional]
**periods** | [**\OpenAPI\Client\Model\ItemPeriodsInner[]**](ItemPeriodsInner.md) | Item sales period. | [optional]
**custom_attributes** | **object** | A JSON object containing item attributes and values. Attributes allow you to add more info to items like the player&#39;s required level to use the item. Attributes enrich your game&#39;s internal logic and are accessible through dedicated GET methods and webhooks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
