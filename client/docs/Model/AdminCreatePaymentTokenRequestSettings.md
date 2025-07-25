# # AdminCreatePaymentTokenRequestSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ui** | [**\OpenAPI\Client\Model\CartPaymentSettingsUi**](CartPaymentSettingsUi.md) |  | [optional]
**currency** | **string** | Preferred payment currency. Three-letter currency code per [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). Check the documentation for detailed information about [currencies supported by Xsolla](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/). | [optional]
**language** | **string** | Interface language. Two-letter lowercase [language code](https://developers.xsolla.com/doc/pay-station/features/localization/). | [optional]
**external_id** | **string** | Transaction external ID. | [optional]
**payment_method** | **int** | Payment method ID. It determines the display of currency in the payment interface, as some payment methods may only support certain currencies. | [optional]
**return_url** | **string** | Page to redirect the user to after payment. Parameters &#x60;user_id&#x60;, &#x60;foreigninvoice&#x60;, &#x60;invoice_id&#x60; and &#x60;status&#x60; will be automatically added to the link. | [optional]
**redirect_policy** | [**\OpenAPI\Client\Model\CartPaymentRedirectPolicy**](CartPaymentRedirectPolicy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
