# # CartPaymentSettingsUiDesktopHeader

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_visible** | **bool** | Whether to show the header in the payment UI. | [optional]
**visible_logo** | **bool** | If &#x60;true&#x60;, the logo is displayed in the header. To upload the image, open your project in [Publisher Account](https://publisher.xsolla.com/) and go to the &lt;b&gt;Pay Station &gt; Settings section&lt;/b&gt;. | [optional]
**visible_name** | **bool** | Whether to show the project name in the header. | [optional]
**visible_purchase** | **bool** | Whether to show the purchase description (&#x60;purchase.description.value&#x60;) in the header. &#x60;true&#x60; by default. | [optional] [default to true]
**type** | **string** | How to show the header. Can be &#x60;compact&#x60; (hides project name and user ID) or &#x60;normal&#x60; (default). | [optional] [default to 'normal']
**close_button** | **bool** | Whether to show a **Close** button in desktop payment UI. The button closes the payment UI and redirects the user to the URL specified in the &#x60;settings.return_url&#x60; parameter. &#x60;false&#x60; by default. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
