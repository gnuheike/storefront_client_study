# # AdminPostPutAttributeItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Unique attribute ID. The &#x60;external_id&#x60; may contain only lowercase and uppercase Latin alphanumeric characters, dashes, and underscores. |
**name** | **array<string,string>** | Object with localizations for attribute&#39;s name. Keys are specified in ISO 3166-1. | [optional]
**values** | [**\OpenAPI\Client\Model\AttributeValue[]**](AttributeValue.md) | &lt;div class&#x3D;\&quot;notice\&quot;&gt;&lt;strong&gt;Attention.&lt;/strong&gt; You &lt;strong&gt;can&#39;t create more than 6 values&lt;/strong&gt; for each attribute. Any attempts to exceed the limit result in an error.&lt;/div&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
