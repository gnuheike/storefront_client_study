# # RecurrentScheduleCreateUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | [**\OpenAPI\Client\Model\IntervalTypeMonthly**](IntervalTypeMonthly.md) |  |
**day_of_week** | **int** | Day of the week when the reward chain is reset, where &#x60;1&#x60; is Monday and &#x60;7&#x60; is Sunday. |
**time** | **string** | Time when the reward chain is reset in the desired time zone (rounding to hours). &lt;br&gt;&lt;br&gt; For example, the set time for the reward chain reset is 01:00 for the Kuala Lumpur time zone (GMT+8). In this case, the value of the &#x60;time&#x60; parameter is &#x60;01:00:00+08:00&#x60;. |
**day_of_month** | **int** | Day of the month when the reward chain is reset. If the number of days in the month is less than the ordinal number of the specified day, then the reward chain reset occurs on the last day of the month. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
