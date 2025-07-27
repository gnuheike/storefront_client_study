# # InlineObject30

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID that is provided upon item creation. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**type** | **string** | Type of item. In this case it is always &#x60;unit&#x60;. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Game additional assets such as screenshots, gameplay video and so on. | [optional]
**order** | **int** | Game order priority in the list. | [optional]
**groups** | [**\OpenAPI\Client\Model\InlineObject29ItemsInnerGroupsInner[]**](InlineObject29ItemsInnerGroupsInner.md) | Groups the item belongs to. | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attribute[]**](Attribute.md) | List of attributes. | [optional]
**is_enabled** | **bool** |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**is_show_in_store** | **bool** |  | [optional]
**unit_items** | [**\OpenAPI\Client\Model\InlineObject30UnitItemsInner[]**](InlineObject30UnitItemsInner.md) | Game keys for different DRMs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
