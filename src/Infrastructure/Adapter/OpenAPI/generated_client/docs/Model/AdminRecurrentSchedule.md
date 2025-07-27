# # AdminRecurrentSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | [**\OpenAPI\Client\Model\IntervalTypeMonthly**](IntervalTypeMonthly.md) |  | [optional]
**day_of_week** | **int** | Day of the week when the reward chain is reset, where &#x60;1&#x60; is Monday and &#x60;7&#x60; is Sunday. | [optional]
**time** | **string** | Time when the reward chain is reset in the desired time zone (rounding to hours). &lt;br&gt;&lt;br&gt; For example, the set time for the reward chain reset is 01:00 for the Kuala Lumpur time zone (GMT+8). In this case, the value of the &#x60;time&#x60; parameter is &#x60;01:00:00+08:00&#x60;. | [optional]
**reset_next_date** | **int** | Calculated date and time when the reward chain will be reset next time &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/Unix_time\&quot; target&#x3D;\&quot;_blank\&quot;&gt;(Unix Timestamp)&lt;/a&gt;. &lt;br&gt;&lt;br&gt; For example, the reward chain is reset monthly, starting from March 1, 2024, at 01:00 Kuala Lumpur time (GMT+8). The date and time of the next reward chain reset, April 1, 2024 at 01:00 Kuala Lumpur time (GMT+8), which equals March 31, 2024 17:00 GMT+0 or &#x60;1711904400000&#x60; in the Unix Timestamp format. &lt;br&gt;&lt;br&gt; Example: &#x60;1711904400000&#x60; | [optional]
**displayable_reset_start_date** | **\DateTime** | Date and time of the first reset of the reward chain. &lt;br&gt;&lt;br&gt; For example, the date and time of the first reset of the reward chain is March 1, 2024, at 01:00 Kuala Lumpur time, or &#x60;2024-03-01T01:00:00+08:00&#x60; in the &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; Example: &#x60;2024-03-01T01:00:00+08:00&#x60; | [optional]
**displayable_reset_next_date** | **\DateTime** | Calculated date and time when the reward chain will be reset next time &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;(ISO 8601)&lt;/a&gt;. &lt;br&gt;&lt;br&gt; For example, the reward chain is reset monthly, starting from March 1, 2024, at 01:00 Kuala Lumpur time. The date and time of the next reward chain reset: April 1, 2024 at 01:00 Kuala Lumpur time, which equals &#x60;2024-04-01T01:00:00+08:00&#x60; in the &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; Example: &#x60;2024-04-01T01:00:00+08:00&#x60; | [optional]
**day_of_month** | **int** | Day of the month when the reward chain is reset. If the number of days in the month is less than the ordinal number of the specified day, then the reward chain reset occurs on the last day of the month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
