# # RedeemPromoCodeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coupon_code** | **string** | Unique code of promo code. Contains letters and numbers. | [optional] [default to 'SUMMER2021']
**cart** | [**\OpenAPI\Client\Model\RedeemPromoCodeRequestCart**](RedeemPromoCodeRequestCart.md) |  | [optional]
**selected_unit_items** | **array<string,string>** | The reward that is selected by a user. Object key is an SKU of a unit, and value is an SKU of one of the items in a unit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
