# # CartPaymentSettingsUi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**theme** | **string** | Payment UI theme. Can be &#x60;63295a9a2e47fab76f7708e1&#x60; for the light theme (default) or &#x60;63295aab2e47fab76f7708e3&#x60; for the dark theme. You can also [create a custom theme](https://developers.xsolla.com/doc/pay-station/features/ui-theme-customization/#pay_station_ui_theme_customization_in_token) and pass its ID in this parameter. | [optional] [default to '63295a9a2e47fab76f7708e1']
**desktop** | [**\OpenAPI\Client\Model\CartPaymentSettingsUiDesktop**](CartPaymentSettingsUiDesktop.md) |  | [optional]
**mode** | **string** | Interface mode in payment UI. Can be &#x60;user_account&#x60; only. The header contains only the account navigation menu, and the user cannot select a product or make a payment. This mode is only available on the desktop. | [optional]
**user_account** | [**\OpenAPI\Client\Model\CartPaymentSettingsUiUserAccount**](CartPaymentSettingsUiUserAccount.md) |  | [optional]
**header** | [**\OpenAPI\Client\Model\CartPaymentSettingsUiHeader**](CartPaymentSettingsUiHeader.md) |  | [optional]
**mobile** | [**\OpenAPI\Client\Model\CartPaymentSettingsUiMobile**](CartPaymentSettingsUiMobile.md) |  | [optional]
**is_prevent_external_link_open** | **bool** | Whether or not redirecting links to an external resource is disabled. When clicking an external link, the &#x60;external-link-open&#x60; event is sent via the &#x60;postMessage&#x60; mechanism. The address for the redirected link is passed in the &#x60;url&#x60; parameter. | [optional] [default to false]
**is_payment_methods_list_mode** | **bool** | Whether the list of payment methods available in the user’s country is displayed when opening the payment UI. If &#x60;false&#x60; (default), the payment method passed in the &#x60;settings.payment_method&#x60; parameter or the method selected by the [PayRank algorithm](https://developers.xsolla.com/solutions/payments/payment-ui-management/top-payment-methods-management/) is displayed. | [optional] [default to false]
**is_independent_windows** | **bool** | Whether to redirect users from the embedded launcher’s browser (WebView) to their default browser to make a purchase. | [optional] [default to false]
**currency_format** | **string** | Set to &#x60;code&#x60; to display a three-letter [ISO 4217](https://developers.xsolla.com/doc/pay-station/references/supported-currencies/) currency code in the payment UI. The currency symbol is displayed instead of the three-letter currency code by default. | [optional]
**is_show_close_widget_warning** | **bool** | Whether to show a warning about processing the transaction when hovering over the **×** icon before closing the payment page. If &#x60;false&#x60; is passed, or the parameter is not passed, the warning is not displayed. | [optional] [default to true]
**layout** | **string** | Location of the main elements of the payment UI. You can open the payment UI inside your game and/or swap the columns with information about an order and payment methods. Refer to the [customization instructions](https://developers.xsolla.com/doc/pay-station/features/ui-theme-customization/#pay_station_ui_theme_customization_layout) for detailed information. | [optional]
**is_three_ds_independent_windows** | **bool** | Whether the 3-D Secure verification opens in a new browser window. If your setup enforces a Content Security Policy (CSP), set to &#x60;true&#x60;. | [optional] [default to false]
**is_cart_open_by_default** | **bool** | The display of the list of items in the cart when opening the mobile version of the payment UI. If &#x60;true&#x60;, the list is displayed in an extended view. If &#x60;false&#x60; (default) or the parameters is not passed, the list is displayed in a collapsed view. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
