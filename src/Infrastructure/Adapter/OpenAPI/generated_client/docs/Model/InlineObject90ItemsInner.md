# # InlineObject90ItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward_chain_id** | **int** | Unique reward chain ID. | [optional]
**name** | [**\OpenAPI\Client\Model\NameLocalizationObject**](NameLocalizationObject.md) |  | [optional]
**order** | **int** | Defines arrangement order. | [optional]
**description** | [**\OpenAPI\Client\Model\DescriptionLocalizationObject**](DescriptionLocalizationObject.md) |  | [optional]
**long_description** | [**\OpenAPI\Client\Model\LongDescriptionLocalizationObject**](LongDescriptionLocalizationObject.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**date_start** | **\DateTime** | Date when your reward chain starts. | [optional]
**date_end** | **\DateTime** | Date when your reward chain promotion ends. Can be &#x60;null&#x60;. If &#x60;date_end&#x60; is &#x60;null&#x60;, the reward chain will be unlimited by time. | [optional]
**is_enabled** | **bool** |  | [optional]
**value_point** | [**\OpenAPI\Client\Model\AdminGetRewardChainItemClanBasicModelAllOfValuePoint**](AdminGetRewardChainItemClanBasicModelAllOfValuePoint.md) |  | [optional]
**recurrent_schedule** | [**\OpenAPI\Client\Model\AdminRecurrentSchedule**](AdminRecurrentSchedule.md) |  | [optional]
**attribute_conditions** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestAttributeConditionsInner**](CreateItemPromotionRequestAttributeConditionsInner.md) |  | [optional]
**is_always_visible** | **bool** | Whether the reward chain is visible to all users: * If &#x60;true&#x60;, the chain is always displayed, regardless of the user&#39;s authentication status or attributes. * If &#x60;false&#x60;, the chain is displayed only if no suitable reward chain is found. For example, if the user is not authenticated or their attributes don’t match any personalized chain.  Applies only in the context of personalized reward chains and is used if the &#x60;attribute_conditions&#x60; array is not passed. | [optional] [default to true]
**popup_header** | [**\OpenAPI\Client\Model\PopupHeaderTwoLetterLocale**](PopupHeaderTwoLetterLocale.md) |  | [optional]
**popup_instruction** | [**\OpenAPI\Client\Model\PopupInstructionTwoLetterLocale**](PopupInstructionTwoLetterLocale.md) |  | [optional]
**popup_image_url** | **string** | Image for clan reward chain tooltip popup window. | [optional]
**clan_type** | [**\OpenAPI\Client\Model\ClanType**](ClanType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
