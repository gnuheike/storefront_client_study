# # Promotions200GetBonusPromotionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Promotion ID. Unique promotion identifier within the project. | [optional]
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;. If &#x60;date_end&#x60; is &#x60;null&#x60;, promotion will be unlimited by time. | [optional]
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. | [optional]
**is_enabled** | **bool** |  | [optional] [default to true]
**condition** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequestConditionInner[]**](CreateBonusPromotionRequestConditionInner.md) | Set of items required to be included in the purchase for applying a promotion. If this parameters is &#x60;null&#x60;, a promotion will be applied to any purchases within a project. | [optional]
**bonus** | [**\OpenAPI\Client\Model\Promotions200GetBonusPromotionModelBonusInner[]**](Promotions200GetBonusPromotionModelBonusInner.md) |  | [optional]
**attribute_conditions** | [**\OpenAPI\Client\Model\CreateItemPromotionRequestAttributeConditionsInner**](CreateItemPromotionRequestAttributeConditionsInner.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\PromotionsPromotionLimitsResponse**](PromotionsPromotionLimitsResponse.md) |  | [optional]
**excluded_promotions** | **int[]** | List of promotion IDs to exclude when applying this promotion. &lt;br&gt;Example: &#x60;[12, 789]&#x60; | [optional]
**price_conditions** | [**\OpenAPI\Client\Model\PriceConditionsItems[]**](PriceConditionsItems.md) | Array of objects with conditions that set the price range for applying the promotion.&lt;br&gt; The promotion applies only to items whose price meets all the conditions in the array. If you pass this array, set the value of the [condition](/api/shop-builder/operation/create-bonus-promotion/#!path&#x3D;condition&amp;t&#x3D;request) object to &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
