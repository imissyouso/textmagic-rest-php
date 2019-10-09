# Conversation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**direction** | **string** | Message type: inbound or outbound. | 
**sender** | **string** | Sender phone number. | 
**messageTime** | [**\DateTime**](\DateTime.md) | Time when message arrived at TextMagic. | 
**text** | **string** | Message text. | 
**receiver** | **string** | Receiver phone number. | 
**status** | **string** | Message status (for chats outbound only). See [message delivery statuses](http://docs.textmagictesting.com/#section/Delivery-status-codes) for details. | 
**firstName** | **string** | Contact first name. | 
**lastName** | **string** | Contact last name. | 
**sessionId** | **int** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


