# # ClientRewardChainItemModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward_chain_id** | **int** | Reward chain ID. | [optional]
**name** | **string** | Reward chain name. | [optional]
**description** | **string** | Reward chain description. | [optional]
**long_description** | **string** | Reward chain long description. | [optional]
**image_url** | **string** | Image URL. | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**date_start** | **\DateTime** | Date when your reward chain starts. | [optional]
**date_end** | **\DateTime** | Date when your reward chain promotion ends. Can be &#x60;null&#x60;. If &#x60;date_end&#x60; is &#x60;null&#x60;, the reward chain will be unlimited by time. | [optional]
**clan_type** | [**\OpenAPI\Client\Model\ClanType**](ClanType.md) |  | [optional]
**top_contributors** | [**\OpenAPI\Client\Model\TopContributors[]**](TopContributors.md) |  | [optional]
**value_point** | [**\OpenAPI\Client\Model\ClientRewardChainItemModelValuePoint**](ClientRewardChainItemModelValuePoint.md) |  | [optional]
**steps** | [**\OpenAPI\Client\Model\ClientRewardChainItemModelStepsInner[]**](ClientRewardChainItemModelStepsInner.md) |  | [optional]
**recurrent_schedule** | [**\OpenAPI\Client\Model\RecurrentScheduleClientSide**](RecurrentScheduleClientSide.md) |  | [optional]
**popup_header** | [**\OpenAPI\Client\Model\PopupHeaderTwoLetterLocale**](PopupHeaderTwoLetterLocale.md) |  | [optional]
**popup_instruction** | [**\OpenAPI\Client\Model\PopupInstructionTwoLetterLocale**](PopupInstructionTwoLetterLocale.md) |  | [optional]
**popup_image_url** | **string** | Image for clan reward chain tooltip popup window. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
