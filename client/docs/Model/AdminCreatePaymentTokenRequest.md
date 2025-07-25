# # AdminCreatePaymentTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sandbox** | **bool** | Set to &#x60;true&#x60; to test out the payment process. In this case, use https://sandbox-secure.xsolla.com to access the test payment UI. | [optional] [default to false]
**user** | [**\OpenAPI\Client\Model\CartPaymentAdminUserRequestBody**](CartPaymentAdminUserRequestBody.md) |  |
**purchase** | [**\OpenAPI\Client\Model\CartAdminPayment**](CartAdminPayment.md) |  |
**settings** | [**\OpenAPI\Client\Model\AdminCreatePaymentTokenRequestSettings**](AdminCreatePaymentTokenRequestSettings.md) |  | [optional]
**custom_parameters** | [**array<string,\OpenAPI\Client\Model\CartPaymentCustomParametersValue>**](CartPaymentCustomParametersValue.md) | Your custom parameters represented as a valid JSON set of key-value pairs.&lt;br&gt; You can pass additional parameters through this field to configure anti-fraud filters. [See Pay Station documentation](https://developers.xsolla.com/doc/pay-station/features/antifraud/). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
