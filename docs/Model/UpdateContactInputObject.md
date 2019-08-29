# UpdateContactInputObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | Contact first name | [optional] 
**lastName** | **string** | Contact last name | [optional] 
**phone** | **string** | Contact phone number in E.164 (international) format without leading + or zeroes | 
**email** | **string** | Contact email | [optional] 
**companyName** | **string** | Contact company name | [optional] 
**lists** | **string** | Array of list resources id contact will be assigned to | 
**favorited** | **bool** | Is contact favorited | [optional] 
**blocked** | **bool** | Is contact blocked for outgoing and incoming messaging | [optional] 
**type** | **int** | Force type of phone. Possible values: 0 - landline, 1 - mobile. Default is -1 (auto detection) | [optional] 
**customFieldValues** | [**array**](array.md) |  | [optional] 
**local** | **int** | Treat phone number passed in request body as local | [optional] 
**country** | **string** | 2-letter ISO country code for local phone numbers, used when local is  set to true. Default is account country | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


