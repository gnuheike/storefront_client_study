# # CartPaymentAdminUserRequestBodyCountry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Is required if an IP address is not passed in the &#x60;X-User-Ip&#x60; header. Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/). &lt;br&gt;Example: &#x60;country&#x3D;US&#x60; | [optional]
**allow_modify** | **bool** | Whether or not user can change the country in payment UI. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
