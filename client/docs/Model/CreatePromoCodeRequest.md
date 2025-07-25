# # CreatePromoCodeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Unique promotion ID. The &#x60;external_id&#x60; may contain only lowercase and uppercase Latin alphanumeric characters, periods, dashes, and underscores. | [default to 'coupon_external_id']
**date_start** | **\DateTime** | Date when your promotion will be started. | [optional]
**date_end** | **\DateTime** | Date when your promotion will be finished. Can be &#x60;null&#x60;.  If &#x60;date_end&#x60; is &#x60;null&#x60;, promotion will be unlimited by time. | [optional]
**name** | **array<string,string>** | Name of promotion. Should contain key/value pairs where key is a locale with \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, value is string. |
**bonus** | [**\OpenAPI\Client\Model\CreateBonusPromotionRequestBonusInner[]**](CreateBonusPromotionRequestBonusInner.md) |  | [optional]
**redeem_total_limit** | **int** | Limits total numbers of coupons. | [optional] [default to 10]
**redeem_user_limit** | **int** | Limits total numbers of coupons redeemed by single user. | [optional] [default to 10]
**redeem_code_limit** | **int** | Number of redemptions per code. | [optional] [default to 10]
**discount** | [**\OpenAPI\Client\Model\CreatePromoCodeRequestDiscount**](CreatePromoCodeRequestDiscount.md) |  | [optional]
**discounted_items** | [**\OpenAPI\Client\Model\PromotionsDiscountedItemsInner[]**](PromotionsDiscountedItemsInner.md) | List of items that are discounted by a promo code. | [optional]
**attribute_conditions** | [**\OpenAPI\Client\Model\AdminCreateCouponRequestAttributeConditions**](AdminCreateCouponRequestAttributeConditions.md) |  | [optional]
**price_conditions** | [**\OpenAPI\Client\Model\PriceConditionsItems[]**](PriceConditionsItems.md) | Array of objects with conditions that set the price range for applying the promotion to the entire cart.&lt;br&gt; The total price of all items in the user&#39;s cart is compared with the price range specified in the condition. [Bonuses](/api/shop-builder/operation/create-promo-code/#!path&#x3D;bonus&amp;t&#x3D;request) and [discounts](/api/shop-builder/operation/create-promo-code/#!path&#x3D;discount&amp;t&#x3D;request) are applied to all items in the cart if the price of the cart meets the specified condition.&lt;br&gt; If you pass this array, set the value of the [discounted_items](/api/shop-builder/operation/create-promo-code/#!path&#x3D;discounted_items&amp;t&#x3D;request) array to &#x60;null&#x60;. | [optional]
**item_price_conditions** | [**\OpenAPI\Client\Model\PriceConditionsItems[]**](PriceConditionsItems.md) | Array of objects with conditions that set the price range for applying the promotion to certain items in the cart.&lt;br&gt; The price of each item in the user&#39;s cart is compared with the price range specified in the condition. [Bonuses](/api/shop-builder/operation/create-promo-code/#!path&#x3D;bonus&amp;t&#x3D;request) and [discounts](/api/shop-builder/operation/create-promo-code/#!path&#x3D;discount&amp;t&#x3D;request) are applied only to those items in the cart whose price meets the condition.&lt;br&gt; If you pass this array, set the value of the [discounted_items](/api/shop-builder/operation/create-promo-code/#!path&#x3D;discounted_items&amp;t&#x3D;request) array to &#x60;null&#x60;. | [optional]
**excluded_promotions** | **int[]** | List of promotion IDs to exclude when applying this promotion. &lt;br&gt;Example: &#x60;[12, 789]&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
