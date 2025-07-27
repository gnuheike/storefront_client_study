# # GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Internal unique item ID. | [optional]
**sku** | **string** | Unique item ID. The SKU may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional]
**type** | **string** | Type of item: &#x60;virtual_good&#x60;/&#x60;virtual_currency&#x60;/&#x60;bundle&#x60;/&#x60;unit&#x60;. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**bundle_type** | [**\OpenAPI\Client\Model\BundleType**](BundleType.md) |  | [optional]
**unit_type** | **string** | Type of unit: &#x60;game&#x60;. | [optional]
**unit_items** | [**\OpenAPI\Client\Model\GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInnerUnitItemsInner[]**](GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInnerUnitItemsInner.md) | Game keys for different DRMs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
