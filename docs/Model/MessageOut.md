# MessageOut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Message ID. | 
**sender** | **string** | Message sender (phone number or alphanumeric Sender ID). | [optional] 
**receiver** | **string** | Recipient phone number. | [optional] 
**text** | **string** |  | 
**status** | **string** | Delivery status of the message. TODO: Please see the table below to see different delivery statuses. | 
**contactId** | **int** |  | 
**sessionId** | **int** |  | 
**messageTime** | [**\DateTime**](\DateTime.md) | Sending time. | 
**avatar** | **string** |  | 
**deleted** | **bool** |  | [optional] 
**charset** | **string** | Message charset. Could be: *   **ISO-8859-1** for plaintext SMS *   **UTF-16BE** for Unicode SMS | 
**charsetLabel** | **string** |  | 
**firstName** | **string** | Contact first name. Could be substituted from your [Contacts](http://docs.textmagictesting.com/tag#Contacts) (even if you submitted phone number instead of contact ID). | 
**lastName** | **string** | Contact last name. | 
**country** | **string** | Two-letter ISO country code of the recipient phone number. | 
**phone** | **string** |  | [optional] 
**price** | **float** |  | [optional] 
**partsCount** | **int** | Message parts (multiples of 160 characters) count. | 
**fromEmail** | **string** |  | [optional] 
**fromNumber** | **string** |  | [optional] 
**smscId** | **string** |  | [optional] 
**contact** | **string** |  | [optional] 
**source** | **string** |  | [optional] 
**deliveredCount** | **int** |  | [optional] 
**numbersCount** | **int** |  | [optional] 
**userId** | **int** |  | [optional] 
**creditsPrice** | **string** |  | [optional] 
**chars** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


