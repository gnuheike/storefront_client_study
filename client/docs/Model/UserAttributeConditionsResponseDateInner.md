# # UserAttributeConditionsResponseDateInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute** | **string** | User attribute code. | [optional]
**type** | [**\OpenAPI\Client\Model\UserAttributeConditionsPropertiesTypeDate**](UserAttributeConditionsPropertiesTypeDate.md) |  | [optional]
**operator** | [**\OpenAPI\Client\Model\UserAttributeConditionsPropertiesOperator**](UserAttributeConditionsPropertiesOperator.md) |  | [optional]
**value** | **string** | Condition value which user attribute value will be compared to. Type depends on attribute type. | [optional]
**can_be_missing** | **bool** | Indicates that the condition is met even if attribute is missing from user attributes. Pass &#x60;true&#x60; to show the item to users who don&#39;t have this attribute. Users who have the attribute, but the value does not match that specified in the condition, will not see the item. &#x60;false&#x60; — users who have the attribute, but the value does not match that specified in the condition, or the attribute is missing, will not see the item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
