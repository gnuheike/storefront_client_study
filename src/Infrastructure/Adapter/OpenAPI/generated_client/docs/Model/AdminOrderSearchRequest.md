# # AdminOrderSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | A limit on the number of orders included in the response. | [optional] [default to 10]
**offset** | **int** | Number of the order from which the list is generated (the count starts from 0). | [optional] [default to 0]
**created_date_from** | **\DateTime** | Start date or date-time of the order creation period per [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**created_date_until** | **\DateTime** | End date or date-time of the order creation period per [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
