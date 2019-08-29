# DoAuthInputObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | Account username or email | 
**password** | **string** | Account password | 
**app_name** | **string** | Application name | [optional] 
**app_version** | **string** | Application version | [optional] 
**device_id** | **string** | Device ID for push notification service | [optional] 
**push_service_type** | **string** | required when deviceId provided. Push notification service type: a for Apple Push Notifications, g for Google Cloud Messaging | [optional] 
**tfa_code** | **string** | required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer) | [optional] 
**tfa_id** | **string** | required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


