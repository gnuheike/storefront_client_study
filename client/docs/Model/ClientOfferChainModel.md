# # ClientOfferChainModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Offer chain ID. | [optional]
**name** | **string** | Offer chain name. | [optional]
**description** | **string** | Offer chain description. | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**date_start** | **\DateTime** | Date when the offer chain starts. | [optional]
**date_end** | **\DateTime** | Date when the offer chain ends. Can be &#x60;null&#x60;. If &#x60;date_end&#x60; is &#x60;null&#x60;, the offer chain will not have a time limit. | [optional]
**steps** | [**\OpenAPI\Client\Model\ClientOfferChainStepModel[]**](ClientOfferChainStepModel.md) |  | [optional]
**recurrent_schedule** | [**\OpenAPI\Client\Model\OfferChainRecurrentScheduleClientSide**](OfferChainRecurrentScheduleClientSide.md) |  | [optional]
**next_step_number** | **int** | Next offer chain step number. &#x60;null&#x60; if the offer chain is completed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
