# # ValuePointItemModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**media_list** | [**\OpenAPI\Client\Model\AdminCreateGameRequestMediaListInner[]**](AdminCreateGameRequestMediaListInner.md) | Item&#39;s additional assets such as screenshots, gameplay video and so on. | [optional]
**type** | **string** | Type of item. | [optional]
**image_url** | **string** |  | [optional]
**is_enabled** | **bool** |  | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**can_delete** | **bool** | Whether a value point can be deleted. If &#x60;false&#x60;, you can not delete the value point as there are one or more reward chains in which it is used. To delete the value point, first [delete](https://developers.xsolla.com/api/shop-builder/operation/admin-delete-reward-chain/) all reward chains containing it.  If &#x60;true&#x60;, the value point is not used in any reward chain and you can [delete](https://developers.xsolla.com/api/shop-builder/operation/admin-delete-value-point/) it. | [optional]
**is_clan** | **bool** | Whether the value point is used in clan reward chains. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
