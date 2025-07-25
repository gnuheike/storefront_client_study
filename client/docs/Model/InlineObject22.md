# # InlineObject22

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_id** | **string** | Cart ID. Pass it to query for buy page or payment API endpoints. | [optional]
**price** | [**\OpenAPI\Client\Model\InlineObject22Price**](InlineObject22Price.md) |  | [optional]
**is_free** | **bool** | If &#x60;true&#x60;, a cart is free. | [optional] [default to false]
**items** | [**\OpenAPI\Client\Model\InlineObject22ItemsInner[]**](InlineObject22ItemsInner.md) |  | [optional]
**promotions** | [**\OpenAPI\Client\Model\CatalogItemPromotionsInner[]**](CatalogItemPromotionsInner.md) | Applied promotions for the entire cart. The array is returned in the following cases:  * A promotion affects the total cart amount, such as a promo code with the **Discount on purchase setting**.  * A promotion adds bonus items to the cart.  If no order-level promotions are applied, an empty array is returned. | [optional]
**warnings** | [**\OpenAPI\Client\Model\InlineObject11WarningsInner[]**](InlineObject11WarningsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
