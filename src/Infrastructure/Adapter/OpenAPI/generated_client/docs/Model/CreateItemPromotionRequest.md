# # CreateItemPromotionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs, where key is locale with format \&quot;^[a-z]{2}-[A-Z]{2}$\&quot;, value is string. |
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;. | [optional]
**discount** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestDiscount**](CreateItemPromotionRequestDiscount.md) |  |
**items** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestItemsInner[]**](CreateItemPromotionRequestItemsInner.md) |  |
**attribute_conditions** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestAttributeConditionsInner[]**](CreateItemPromotionRequestAttributeConditionsInner.md) |  | [optional]
**price_conditions** | [**\OpenAPI\Client\Model\PriceConditionsItems[]**](PriceConditionsItems.md) | Array of objects with conditions that set the price range for applying the promotion.&lt;br&gt; The promotion applies only to items whose price meets all the conditions in the array. If you pass this array, set the value of the [items](/api/shop-builder/operation/create-item-promotion/#!path&#x3D;items&amp;t&#x3D;request) object to &#x60;null&#x60;. | [optional]
**limits** | [**\OpenAPI\Client\Model\PromotionsPromotionLimits**](PromotionsPromotionLimits.md) |  | [optional]
**excluded_promotions** | **int[]** | List of promotion IDs to exclude when applying this promotion. &lt;br&gt;Example: &#x60;[12, 789]&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
