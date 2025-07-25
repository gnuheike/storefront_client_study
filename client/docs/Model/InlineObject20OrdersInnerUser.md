# # InlineObject20OrdersInnerUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | User ID passed when creating the order. | [optional]
**country** | **string** | Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/). | [optional]
**email** | **string** | User email formatted according to the [RFC 822](https://www.w3.org/Protocols/rfc822/#z8) protocol. | [optional]
**region_id** | **int** | User&#39;s region ID. It is returned if regional sales restrictions are set up. The user&#39;s country, passed when creating the order, is matched with the list of countries specified when [creating the region](https://developers.xsolla.com/api/shop-builder/operation/admin-create-region/). Refer to the [documentation](https://developers.xsolla.com/doc/shop-builder/features/regional-restrictions/) for more information about regional sales restrictions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
