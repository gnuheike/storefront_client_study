# # GameKeysEntitlementItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Game package name. | [optional]
**description** | **string** | Game package description. | [optional]
**project_id** | **int** | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project. | [optional]
**game_sku** | **string** | Unique key package ID. | [optional]
**drm** | [**\OpenAPI\Client\Model\GameKeysDrmSku**](GameKeysDrmSku.md) |  | [optional]
**image_url** | **string** | Image URL. | [optional]
**is_pre_order** | **bool** | Whether the game is in pre-order status or is not. | [optional]
**attributes** | [**\OpenAPI\Client\Model\GameKeysClientAttributesInner[]**](GameKeysClientAttributesInner.md) | List of attributes and their values corresponding to the Game.  &lt;div class&#x3D;\&quot;notice\&quot;&gt;&lt;strong&gt;Attention.&lt;/strong&gt; This part of response is available only if you send the &#x60;additional_fields[]&#x3D;attributes&#x60; query parameter.&lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
