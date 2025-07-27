# # AdminOfferChainShortModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique offer chain ID. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**date_start** | **\DateTime** | Date when the offer chain starts. | [optional]
**date_end** | **\DateTime** | Date when the offer chain ends. Can be &#x60;null&#x60;. If &#x60;date_end&#x60; is &#x60;null&#x60;, the offer chain will not have a time limit. | [optional]
**is_enabled** | **bool** |  | [optional]
**recurrent_schedule** | [**\OpenAPI\Client\Model\OfferChainRecurrentSchedule**](OfferChainRecurrentSchedule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
