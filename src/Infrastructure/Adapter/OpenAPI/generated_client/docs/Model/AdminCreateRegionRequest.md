# # AdminCreateRegionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** | List of countries to be added in a region. &lt;br&gt;Two-letter uppercase country code per [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). Check the documentation for detailed information about [countries supported by Xsolla](https://developers.xsolla.com/doc/shop-builder/references/supported-countries/). &lt;br&gt;Example: &#x60;[\&quot;JP\&quot;, \&quot;CN\&quot;, \&quot;VN\&quot;]&#x60; |
**name** | **array<string,string>** | Name of region. Should contain key/value pairs where key is a locale with the \&quot;^[a-z]{2}-[A-Z]{2}$\&quot; format, the value is string. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
