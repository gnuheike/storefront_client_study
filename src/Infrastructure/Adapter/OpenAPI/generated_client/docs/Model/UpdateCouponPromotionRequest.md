# # UpdateCouponPromotionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;.  If &#x60;date_end&#x60; is &#x60;null&#x60;, promotion will be unlimited by time. | [optional]
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. |
**bonus** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequestBonusInner[]**](CreateBonusPromotionRequestBonusInner.md) |  | [optional]
**redeem_total_limit** | **int** | Limits total numbers of coupons. | [optional] [default to 10]
**redeem_user_limit** | **int** | Limits total numbers of coupons redeemed by single user. | [optional] [default to 10]
**redeem_code_limit** | **int** | Number of redemptions per code. | [optional] [default to 10]
**attribute_conditions** | [**\OpenAPI\Client\Model\AdminCreateCouponRequestAttributeConditions**](AdminCreateCouponRequestAttributeConditions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
