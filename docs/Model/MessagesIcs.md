# MessagesIcs

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Schedule ID. | 
**nextSend** | [**\DateTime**](\DateTime.md) | Next send date in [ISO 8601](https://en.wikipedia.org/?title&#x3D;ISO_8601) format. | 
**rrule** | **string** | [iCal RRULE](http://www.kanzaki.com/docs/ical/rrule.html) string. | 
**session** | [**\TextMagic\Models\MessageSession**](MessageSession.md) |  | 
**lastSent** | [**\DateTime**](\DateTime.md) | Date and time when last message has been sent. | 
**contactName** | **string** |  | 
**parameters** | [**\TextMagic\Models\MessagesIcsParameters**](MessagesIcsParameters.md) |  | 
**type** | **string** |  | 
**summary** | **string** |  | 
**textParameters** | [**\TextMagic\Models\MessagesIcsTextParameters**](MessagesIcsTextParameters.md) |  | 
**firstOccurrence** | [**\DateTime**](\DateTime.md) |  | 
**lastOccurrence** | [**\DateTime**](\DateTime.md) |  | 
**recipientsCount** | **int** | Amount of actual recipients. | 
**timezone** | **string** | User-friendly timezone name (with spaces replaced by underscores). | 
**completed** | **bool** | Indicates that schedling has been completed. | 
**avatar** | **string** | TODO | 
**createdAt** | [**\DateTime**](\DateTime.md) | Scheduling creation time. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


