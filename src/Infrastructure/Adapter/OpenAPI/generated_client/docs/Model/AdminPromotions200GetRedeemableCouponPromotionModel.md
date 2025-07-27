# # AdminPromotions200GetRedeemableCouponPromotionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Unique promotion ID. The &#x60;external_id&#x60; may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [optional] [default to 'coupon_external_id']
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;.  If &#x60;date_end&#x60; is &#x60;null&#x60;, promotion will be unlimited by time. | [optional]
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. | [optional]
**bonus** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequestBonusInner[]**](CreateBonusPromotionRequestBonusInner.md) |  | [optional]
**is_enabled** | **bool** |  | [optional] [default to true]
**redeem_total_limit** | **int** | Limits total numbers of coupons. | [optional] [default to 10]
**redeem_user_limit** | **int** | Limits total numbers of coupons redeemed by single user. | [optional] [default to 10]
**redeem_code_limit** | **int** | Number of redemptions per code. | [optional] [default to 10]
**total_limit_state** | [**\OpenAPI\Client\Model\PromotionsCouponTotalLimitState**](PromotionsCouponTotalLimitState.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\AdminPromotions200GetRedeemableCouponPromotionModelDiscount**](AdminPromotions200GetRedeemableCouponPromotionModelDiscount.md) |  | [optional]
**discounted_items** | [**\OpenAPI\Client\Model\AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInner[]**](AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInner.md) | List of items that are discounted by a promo code. Only for promo codes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
