# # Promotions200GetPromotionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Promotion ID. Unique promotion identifier within the project. | [optional]
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;.  If &#x60;date_end&#x60; is &#x60;null&#x60;, promotion will be unlimited by time. | [optional]
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. | [optional]
**bonus** | [**\OpenAPI\Client\Model\Promotions200CouponBonusReward[]**](Promotions200CouponBonusReward.md) |  | [optional]
**condition** | [**\OpenAPI\Client\Model\PromotionsPromotionConditionInner[]**](PromotionsPromotionConditionInner.md) |  | [optional]
**is_enabled** | **bool** |  | [optional] [default to true]
**type** | **string** | Promotion type. | [optional]
**discount** | [**\OpenAPI\Client\Model\Promotions200GetPromotionModelDiscount**](Promotions200GetPromotionModelDiscount.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\PromotionsPromotionLimitsResponse**](PromotionsPromotionLimitsResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
