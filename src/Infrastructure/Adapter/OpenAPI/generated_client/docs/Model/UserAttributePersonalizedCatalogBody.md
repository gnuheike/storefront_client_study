# # UserAttributePersonalizedCatalogBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Readable name of a rule. Used to display a rule in Publisher Account. | [optional]
**is_enabled** | **bool** | If rule is enabled. | [optional]
**is_satisfied_for_unauth** | **bool** | Whether the item is displayed to unauthorized users. If &#x60;true&#x60;, the item is displayed to the unauthorized user regardless of catalog display rules. &#x60;false&#x60; by default. | [optional]
**attribute_conditions** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestAttributeConditionsInner**](CreateItemPromotionRequestAttributeConditionsInner.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\UserAttributePersonalizedCatalogBodyRequiredItemsInner[]**](UserAttributePersonalizedCatalogBodyRequiredItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
