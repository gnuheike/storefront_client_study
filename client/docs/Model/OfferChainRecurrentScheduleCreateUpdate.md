# # OfferChainRecurrentScheduleCreateUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | [**\OpenAPI\Client\Model\OfferChainIntervalTypeMonthly**](OfferChainIntervalTypeMonthly.md) |  |
**day_of_week** | **int** | Day of the week when the offer chain is reset, where &#x60;1&#x60; is Monday and &#x60;7&#x60; is Sunday. |
**time** | **string** | The time when the offer chain is reset in the specified time zone (rounding to hours). &lt;br&gt;&lt;br&gt; For example, the reset time is set to 01:00 for the Kuala Lumpur time zone (GMT+8), the value of the &#x60;time&#x60; parameter is &#x60;01:00:00+08:00&#x60;. |
**day_of_month** | **int** | The day of the month when the offer chain is reset. If a month has fewer days than the specified day, the reset will occur on the last day of the month. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
