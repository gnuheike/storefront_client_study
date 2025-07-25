# # CatalogItemLimitsPerItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total number of items that can be purchased. You can set this number in Publisher Account or use admin endpoints for Store entities (limits object). | [optional]
**available** | **int** | Available number of items for a user. The number decreases after every successful purchase. If no authorization is provided in the request,  the &#x60;available&#x60; number of items is set to match the &#x60;total&#x60; number of items. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
