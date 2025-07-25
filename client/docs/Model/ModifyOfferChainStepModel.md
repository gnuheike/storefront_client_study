# # ModifyOfferChainStepModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**step_id** | **int** | Unique chain step ID. Specify it during update to retain user progress for this step. | [optional]
**step_number** | **int** | Step number. |
**is_free** | **bool** | Indicates whether the offer chain step is free:&lt;ul&gt;&lt;li&gt;If &lt;code&gt;true&lt;/code&gt;, the step must be claimed using the &lt;a href&#x3D;\&quot;/api/shop-builder/operation/claim-user-offer-chain-step-reward\&quot;&gt;Claim free offer chain step&lt;/a&gt; call.&lt;/li&gt;&lt;li&gt;If &lt;code&gt;false&lt;/code&gt;, it must be purchased using the &lt;a href&#x3D;\&quot;/api/shop-builder/operation/order-user-offer-chain-step-reward\&quot;&gt;Create order for paid offer chain step&lt;/a&gt; call.&lt;/li&gt;&lt;/ul&gt; |
**items** | [**\OpenAPI\Client\Model\ModifyOfferChainItemModel[]**](ModifyOfferChainItemModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
