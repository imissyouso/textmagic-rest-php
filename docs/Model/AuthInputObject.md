# AuthInputObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | Account username or email | 
**password** | **string** | Account password | 
**appName** | **string** | Application name | [optional] 
**appVersion** | **string** | Application version | [optional] 
**deviceId** | **string** | Device ID for push notification service | [optional] 
**pushServiceType** | **string** | required when deviceId provided. Push notification service type: a for Apple Push Notifications, g for Google Cloud Messaging | [optional] 
**tfaCode** | **string** | required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer) | [optional] 
**tfaId** | **string** | required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


