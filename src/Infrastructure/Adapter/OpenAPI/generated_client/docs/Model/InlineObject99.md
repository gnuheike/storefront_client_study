# # InlineObject99

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Import status. | [optional]
**date_created** | **string** | The timestamp of the import creation operation in GMT+3 timezone. | [optional]
**date_updated** | **string** | The timestamp when the import was interrupted due to an error in GMT+3 timezone. | [optional]
**date_completed** | **string** | The timestamp of completion of the import operation in GMT+3 timezone. If the import was interrupted due to an error and no items were imported, an empty string will be returned. | [optional]
**progress** | **int** | The progress of the import execution in percent. | [optional]
**error** | **string** | Description of the general import error. | [optional]
**error_code** | **string** | The code of the general import error. | [optional]
**result** | [**\OpenAPI\Client\Model\InlineObject99Result**](InlineObject99Result.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
