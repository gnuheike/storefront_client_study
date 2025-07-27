# # UpdateWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL of your server for receiving [Game services](/webhooks/operation/successful-order-payment/) webhooks. The URL  must be publicly accessible and use the HTTPS protocol, for example &#x60;https://example.com&#x60;. You can also specify the URL you find in any tool for testing webhooks.  For [Game services](/webhooks/operation/successful-order-payment/) webhooks, the setting specified in this API call  takes precedence over the setting configured in Publisher Account in [Project Settings &gt; Webhooks](https://publisher.xsolla.com/0/projects/0/edit/webhooks/) section. |
**secret** | **string** | The project secret key for signing [Game services](/webhooks/operation/successful-order-payment/) webhooks.  For [Game services](/webhooks/operation/successful-order-payment/), the key specified in this API call takes precedence over the key generated in Publisher Account in [Project Settings &gt; Webhooks](https://publisher.xsolla.com/0/projects/0/edit/webhooks/) section. |
**is_enabled** | **bool** | Whether [Game services](/webhooks/operation/successful-order-payment/) webhooks are enabled.  For [Game services](/webhooks/operation/successful-order-payment/) webhooks, the setting specified in this API call takes precedence over the setting configured in Publisher Account in [Project Settings &gt; Webhooks](https://publisher.xsolla.com/0/projects/0/edit/webhooks/) section. |
**version** | **int** | Webhooks version. In version &#x60;2&#x60;, the [items](/webhooks/operation/successful-order-payment/#!path&#x3D;items&amp;t&#x3D;request) array includes the parameters &#x60;is_free&#x60;, &#x60;is_bonus&#x60;, and &#x60;is_bundle_content&#x60;, which are not present in version &#x60;1&#x60; (default). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
