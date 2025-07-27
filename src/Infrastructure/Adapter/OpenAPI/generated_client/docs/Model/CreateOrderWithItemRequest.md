# # CreateOrderWithItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Order price currency. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/). | [optional]
**locale** | **string** | Response language. | [optional]
**sandbox** | **bool** | Creates an order in the sandbox mode. The option is available for those users who are specified in the list of company users. | [optional] [default to false]
**quantity** | **int** | Item quantity. | [optional] [default to 1]
**promo_code** | **string** | Redeems a code of a promo code promotion with payment. | [optional]
**settings** | [**\OpenAPI\Client\Model\CreateOrderByCartIdRequestSettings**](CreateOrderByCartIdRequestSettings.md) |  | [optional]
**custom_parameters** | **object** | Project specific parameters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
