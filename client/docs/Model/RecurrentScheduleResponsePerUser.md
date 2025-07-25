# # RecurrentScheduleResponsePerUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | **string** | Recurrent refresh period type. | [optional]
**day_of_week** | **int** | Day of the week when the limits refresh. Where 1 is Monday and 7 is Sunday. Not &#x60;null&#x60; only for &#x60;weekly&#x60; limit refresh period type. | [optional]
**day_of_month** | **int** | Day of the month when limits refresh. If there&#39;s no selected day of the month as it&#39;s shorter, then the refresh will occur on the last day of the month. Not &#x60;null&#x60; only for &#x60;monthly&#x60; limit refresh period type. | [optional]
**time** | **string** | Time of limit refresh in the desired time zone (rounding to hours). | [optional]
**reset_next_date** | **int** | Date and time when limits refresh (Unix Timestamp). | [optional]
**displayable_reset_start_date** | **\DateTime** | Date and time of the first limit refresh (ISO 8601). | [optional]
**displayable_reset_next_date** | **\DateTime** | Date and time when limits should reset (ISO 8601). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
