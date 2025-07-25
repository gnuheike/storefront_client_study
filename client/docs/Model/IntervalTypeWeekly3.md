# # IntervalTypeWeekly3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | [**\OpenAPI\Client\Model\OfferChainIntervalTypeWeekly**](OfferChainIntervalTypeWeekly.md) |  | [optional]
**day_of_week** | **int** | Day of the week when the offer chain is reset, where &#x60;1&#x60; is Monday and &#x60;7&#x60; is Sunday. | [optional]
**time** | **string** | The time when the offer chain is reset in the specified time zone (rounding to hours). &lt;br&gt;&lt;br&gt; For example, the reset time is set to 01:00 for the Kuala Lumpur time zone (GMT+8), the value of the &#x60;time&#x60; parameter is &#x60;01:00:00+08:00&#x60;. | [optional]
**reset_next_date** | **int** | The calculated date and time when the offer chain will be reset next time, in &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/Unix_time\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Unix Timestamp&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; For example, the monthly offer chain reset starts on March 1, 2024, at 01:00 Kuala Lumpur time (GMT+8). The following reset occurs on April 1, 2024 at 01:00 Kuala Lumpur time (GMT+8), which corresponds to March 31, 2024 17:00 GMT+0 or &#x60;1711904400000&#x60; in the Unix Timestamp format. &lt;br&gt;&lt;br&gt; Example: &#x60;1711904400000&#x60; | [optional]
**displayable_reset_start_date** | **\DateTime** | The date and time of the first reset of the offer chain. &lt;br&gt;&lt;br&gt; For example, the first reset scheduled for March 1, 2024, at 01:00 Kuala Lumpur time corresponds to &#x60;2024-03-01T01:00:00+08:00&#x60; in the &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; Example: &#x60;2024-03-01T01:00:00+08:00&#x60; | [optional]
**displayable_reset_next_date** | **\DateTime** | The calculated date and time when the offer chain will be reset next time per &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; For example, the monthly offer chain reset starts on March 1, 2024, at 01:00 Kuala Lumpur time. The following reset occurs on April 1, 2024 at 01:00 Kuala Lumpur time, which equals &#x60;2024-04-01T01:00:00+08:00&#x60; in the &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format. &lt;br&gt;&lt;br&gt; Example: &#x60;2024-04-01T01:00:00+08:00&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
