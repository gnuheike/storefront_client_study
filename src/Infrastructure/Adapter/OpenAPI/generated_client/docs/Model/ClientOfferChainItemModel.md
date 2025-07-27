# # ClientOfferChainItemModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;unit&#x60;. | [optional]
**name** | **string** | Item name. | [optional]
**description** | **string** | Item description. | [optional]
**bundle_type** | **string** |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, the item is free. | [optional] [default to false]
**quantity** | **int** | Amount of items. | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**content** | [**\OpenAPI\Client\Model\ClientOfferChainItemModel[]**](ClientOfferChainItemModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
