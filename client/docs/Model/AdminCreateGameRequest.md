# # AdminCreateGameRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. |
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  |
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Game additional assets such as screenshots, gameplay video, etc. | [optional]
**order** | **int** | Game order priority in the list. | [optional]
**groups** | [**\OpenAPI\Client\Model\AdminCreateGameRequestGroupsInner[]**](AdminCreateGameRequestGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\AdminPostPutAttributeItem[]**](AdminPostPutAttributeItem.md) | List of attributes. &lt;div class&#x3D;\&quot;notice\&quot;&gt;&lt;strong&gt;Attention.&lt;/strong&gt; You &lt;strong&gt;can&#39;t specify more than 20 attributes&lt;/strong&gt; for the item. Any attempts to exceed the limit result in an error.&lt;/div&gt; | [optional]
**is_enabled** | **bool** | If disabled, item cannot be purchased and accessed through inventory. | [optional]
**is_show_in_store** | **bool** | Item is available for purchase. | [optional]
**unit_items** | [**\OpenAPI\Client\Model\AdminCreateGameRequestUnitItemsInner[]**](AdminCreateGameRequestUnitItemsInner.md) | Game keys for different DRMs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
