# # InlineObject20OrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order ID. | [optional]
**project_id** | **int** | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | [optional]
**status** | **string** | Order status. | [optional]
**date_created** | **\DateTime** | Order creation date or date-time code per [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**mode** | **string** | Order creation mode. | [optional]
**is_free** | **bool** | Whether the order is free. | [optional]
**invoice_id** | **string** | Invoice ID. | [optional]
**price** | [**\OpenAPI\Client\Model\InlineObject20OrdersInnerPrice**](InlineObject20OrdersInnerPrice.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\InlineObject20OrdersInnerUser**](InlineObject20OrdersInnerUser.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\InlineObject20OrdersInnerItemsInner[]**](InlineObject20OrdersInnerItemsInner.md) | Items list. | [optional]
**promotions** | [**\OpenAPI\Client\Model\InlineObject20OrdersInnerPromotionsInner[]**](InlineObject20OrdersInnerPromotionsInner.md) | Promotions list applied to order. | [optional]
**coupons** | [**\OpenAPI\Client\Model\InlineObject20OrdersInnerCouponsInner[]**](InlineObject20OrdersInnerCouponsInner.md) | Coupons list applied to order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
