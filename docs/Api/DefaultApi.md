# TextMagic\DefaultApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignContactsToList**](DefaultApi.md#assignContactsToList) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to the specified list.
[**blockContact**](DefaultApi.md#blockContact) | **POST** /api/v2/contacts/block | Block contact from inbound and outbound communication by phone number.
[**buyDedicatedNumber**](DefaultApi.md#buyDedicatedNumber) | **POST** /api/v2/numbers | Buy a dedicated number and assign it to the specified account.
[**cancelSurvey**](DefaultApi.md#cancelSurvey) | **PUT** /api/v2/surveys/{id}/cancel | Cancel a survey.
[**checkPhoneVerificationCode**](DefaultApi.md#checkPhoneVerificationCode) | **PUT** /api/v2/user/phone/verification | Check user phone verification code
[**clearAndAssignContactsToList**](DefaultApi.md#clearAndAssignContactsToList) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts.
[**closeChatsBulk**](DefaultApi.md#closeChatsBulk) | **POST** /api/v2/chats/close/bulk | Close chats by chat ids or close all chats
[**closeReadChats**](DefaultApi.md#closeReadChats) | **POST** /api/v2/chats/close/read | Close all chats that have no unread messages.
[**closeSubaccount**](DefaultApi.md#closeSubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close subaccount.
[**createContact**](DefaultApi.md#createContact) | **POST** /api/v2/contacts | Create a new contact from the submitted data.
[**createContactNote**](DefaultApi.md#createContactNote) | **POST** /api/v2/contacts/{id}/notes | Create a new contact note.
[**createCustomField**](DefaultApi.md#createCustomField) | **POST** /api/v2/customfields | Create a new custom field from the submitted data.
[**createList**](DefaultApi.md#createList) | **POST** /api/v2/lists | Create a new list from the submitted data.
[**createPushToken**](DefaultApi.md#createPushToken) | **POST** /api/v2/push/tokens | Add or update a device token.
[**createSurvey**](DefaultApi.md#createSurvey) | **POST** /api/v2/surveys | Create a new survey from the submitted data.
[**createSurveyNode**](DefaultApi.md#createSurveyNode) | **POST** /api/v2/surveys/{id}/nodes | Create a new node from the submitted data.
[**createTemplate**](DefaultApi.md#createTemplate) | **POST** /api/v2/templates | Create a new template from the submitted data.
[**deleteAllContacts**](DefaultApi.md#deleteAllContacts) | **DELETE** /api/v2/contact/all | Delete all contacts.
[**deleteAllOutboundMessages**](DefaultApi.md#deleteAllOutboundMessages) | **DELETE** /api/v2/message/all | Delete all messages.
[**deleteAvatar**](DefaultApi.md#deleteAvatar) | **DELETE** /api/v2/user/avatar | Delete an avatar for the current user.\\
[**deleteChatMessages**](DefaultApi.md#deleteChatMessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete messages from chat by given messages ID(s).
[**deleteChatsBulk**](DefaultApi.md#deleteChatsBulk) | **POST** /api/v2/chats/delete | Delete chats by given ID(s) or delete all chats.
[**deleteContact**](DefaultApi.md#deleteContact) | **DELETE** /api/v2/contacts/{id} | Delete a single contact.
[**deleteContactAvatar**](DefaultApi.md#deleteContactAvatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar for the contact.
[**deleteContactNote**](DefaultApi.md#deleteContactNote) | **DELETE** /api/v2/notes/{id} | Delete a single contact note.
[**deleteContactNotesBulk**](DefaultApi.md#deleteContactNotesBulk) | **POST** /api/v2/contacts/{id}/notes/delete | Delete contact note by given ID(s) or delete all contact notes.
[**deleteContactsByIds**](DefaultApi.md#deleteContactsByIds) | **POST** /api/v2/contacts/delete | Delete contact by given ID(s) or delete all contacts.
[**deleteContactsFromList**](DefaultApi.md#deleteContactsFromList) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from the specified list.
[**deleteCustomField**](DefaultApi.md#deleteCustomField) | **DELETE** /api/v2/customfields/{id} | Delete a single custom field.
[**deleteDedicatedNumber**](DefaultApi.md#deleteDedicatedNumber) | **DELETE** /api/v2/numbers/{id} | Cancel dedicated number subscription.
[**deleteInboundMessage**](DefaultApi.md#deleteInboundMessage) | **DELETE** /api/v2/replies/{id} | Delete the incoming message.
[**deleteInboundMessagesBulk**](DefaultApi.md#deleteInboundMessagesBulk) | **POST** /api/v2/replies/delete | Delete inbound messages by given ID(s) or delete all inbound messages.
[**deleteList**](DefaultApi.md#deleteList) | **DELETE** /api/v2/lists/{id} | Delete a single list.
[**deleteListAvatar**](DefaultApi.md#deleteListAvatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for the list.
[**deleteListContactsBulk**](DefaultApi.md#deleteListContactsBulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contact from list by given ID(s) or all contacts from list.
[**deleteListsBulk**](DefaultApi.md#deleteListsBulk) | **POST** /api/v2/lists/delete | Delete list by given ID(s) or delete all lists.
[**deleteMessageSession**](DefaultApi.md#deleteMessageSession) | **DELETE** /api/v2/sessions/{id} | Delete a message session, together with all nested messages.
[**deleteMessageSessionsBulk**](DefaultApi.md#deleteMessageSessionsBulk) | **POST** /api/v2/sessions/delete | Delete messages sessions, together with all nested messages, by given ID(s) or delete all messages sessions.
[**deleteOutboundMessage**](DefaultApi.md#deleteOutboundMessage) | **DELETE** /api/v2/messages/{id} | Delete a single message.
[**deleteOutboundMessagesBulk**](DefaultApi.md#deleteOutboundMessagesBulk) | **POST** /api/v2/messages/delete | Delete outbound messages by given ID(s) or delete all outbound messages.
[**deletePushToken**](DefaultApi.md#deletePushToken) | **DELETE** /api/v2/push/tokens/{type}/{deviceId} | Delete a push notification device token.
[**deleteScheduledMessage**](DefaultApi.md#deleteScheduledMessage) | **DELETE** /api/v2/schedules/{id} | Delete a message session, together with all nested messages.
[**deleteScheduledMessagesBulk**](DefaultApi.md#deleteScheduledMessagesBulk) | **POST** /api/v2/schedules/delete | Delete scheduled messages by given ID(s) or delete all scheduled messages.
[**deleteSenderId**](DefaultApi.md#deleteSenderId) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID.
[**deleteSurvey**](DefaultApi.md#deleteSurvey) | **DELETE** /api/v2/surveys/{id} | Delete a survey.
[**deleteSurveyNode**](DefaultApi.md#deleteSurveyNode) | **DELETE** /api/v2/surveys/nodes/{id} | Delete a node.
[**deleteTemplate**](DefaultApi.md#deleteTemplate) | **DELETE** /api/v2/templates/{id} | Delete a single template.
[**deleteTemplatesBulk**](DefaultApi.md#deleteTemplatesBulk) | **POST** /api/v2/templates/delete | Delete template by given ID(s) or delete all templates.
[**doAuth**](DefaultApi.md#doAuth) | **POST** /api/v2/auth | Authenticate user by given username and password.
[**doCarrierLookup**](DefaultApi.md#doCarrierLookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup
[**doEmailLookup**](DefaultApi.md#doEmailLookup) | **GET** /api/v2/email-lookups/{email} | Validate Email address using Email Lookup tool
[**duplicateSurvey**](DefaultApi.md#duplicateSurvey) | **PUT** /api/v2/surveys/{id}/duplicate | Duplicate a survey.
[**getAllBulkSessions**](DefaultApi.md#getAllBulkSessions) | **GET** /api/v2/bulks | Get all bulk sending sessions.
[**getAllChats**](DefaultApi.md#getAllChats) | **GET** /api/v2/chats | Get all user chats.
[**getAllInboundMessages**](DefaultApi.md#getAllInboundMessages) | **GET** /api/v2/replies | Get all inbox messages.
[**getAllMessageSessions**](DefaultApi.md#getAllMessageSessions) | **GET** /api/v2/sessions | Get all message sending sessions.
[**getAllOutboundMessages**](DefaultApi.md#getAllOutboundMessages) | **GET** /api/v2/messages | Get all user oubound messages.
[**getAllScheduledMessages**](DefaultApi.md#getAllScheduledMessages) | **GET** /api/v2/schedules | Get all scheduled messages.
[**getAllTemplates**](DefaultApi.md#getAllTemplates) | **GET** /api/v2/templates | Get all user templates.
[**getAvailableDedicatedNumbers**](DefaultApi.md#getAvailableDedicatedNumbers) | **GET** /api/v2/numbers/available | Find available dedicated numbers to buy.
[**getAvailableSenderSettingOptions**](DefaultApi.md#getAvailableSenderSettingOptions) | **GET** /api/v2/sources | Get all available sender setting options which could be used in \&quot;from\&quot; parameter of POST messages method.
[**getBalanceNotificationOptions**](DefaultApi.md#getBalanceNotificationOptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance
[**getBalanceNotificationSettings**](DefaultApi.md#getBalanceNotificationSettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings
[**getBlockedContacts**](DefaultApi.md#getBlockedContacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts.
[**getBulkSession**](DefaultApi.md#getBulkSession) | **GET** /api/v2/bulks/{id} | Get bulk message session status.
[**getCallbackSettings**](DefaultApi.md#getCallbackSettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings
[**getCallsPrices**](DefaultApi.md#getCallsPrices) | **GET** /api/v2/calls/price | Check pricing for a inbound/outbound call.
[**getChat**](DefaultApi.md#getChat) | **GET** /api/v2/chats/{id} | Get a single chat.
[**getChatByPhone**](DefaultApi.md#getChatByPhone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone.
[**getChatMessages**](DefaultApi.md#getChatMessages) | **GET** /api/v2/chats/{id}/message | Fetch messages from chat with specified chat id.
[**getContact**](DefaultApi.md#getContact) | **GET** /api/v2/contacts/{id} | Get a single contact.
[**getContactByPhone**](DefaultApi.md#getContactByPhone) | **GET** /api/v2/contacts/phone/{phone} | Get a single contact by phone number.
[**getContactIfBlocked**](DefaultApi.md#getContactIfBlocked) | **GET** /api/v2/contacts/block/phone | Check is that phone number blocked
[**getContactImportSessionProgress**](DefaultApi.md#getContactImportSessionProgress) | **GET** /api/v2/contacts/import/progress/{id} | Get contact import session progress.
[**getContactNote**](DefaultApi.md#getContactNote) | **GET** /api/v2/notes/{id} | Get a single contact note.
[**getContactNotes**](DefaultApi.md#getContactNotes) | **GET** /api/v2/contacts/{id}/notes | Fetch notes assigned to the given contact.
[**getContacts**](DefaultApi.md#getContacts) | **GET** /api/v2/contacts | Get all user contacts.
[**getContactsAutocomplete**](DefaultApi.md#getContactsAutocomplete) | **GET** /api/v2/contacts/autocomplete | Get contacts autocomplete suggestions by given search term.
[**getContactsByListId**](DefaultApi.md#getContactsByListId) | **GET** /api/v2/lists/{id}/contacts | Fetch user contacts by given group id.
[**getCountries**](DefaultApi.md#getCountries) | **GET** /api/v2/countries | Return list of countries.
[**getCurrentUser**](DefaultApi.md#getCurrentUser) | **GET** /api/v2/user | Get current user info.
[**getCustomField**](DefaultApi.md#getCustomField) | **GET** /api/v2/customfields/{id} | Get a single custom field.
[**getCustomFields**](DefaultApi.md#getCustomFields) | **GET** /api/v2/customfields | Get all contact custom fields.
[**getDedicatedNumber**](DefaultApi.md#getDedicatedNumber) | **GET** /api/v2/numbers/{id} | Get a single dedicated number.
[**getDisallowedRules**](DefaultApi.md#getDisallowedRules) | **GET** /api/v2/user/disallowed-rules | Get an array of all rules that are disallowed to the current account.
[**getFavourites**](DefaultApi.md#getFavourites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists.
[**getForwardedCalls**](DefaultApi.md#getForwardedCalls) | **GET** /api/v2/calls | Get all forwarded calls.
[**getInboundMessage**](DefaultApi.md#getInboundMessage) | **GET** /api/v2/replies/{id} | Get a single inbox message.
[**getInboundMessagesNotificationSettings**](DefaultApi.md#getInboundMessagesNotificationSettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings
[**getInvoices**](DefaultApi.md#getInvoices) | **GET** /api/v2/invoices | Return account invoices.
[**getList**](DefaultApi.md#getList) | **GET** /api/v2/lists/{id} | Get a single list.
[**getListContactsIds**](DefaultApi.md#getListContactsIds) | **GET** /api/v2/lists/{id}/contacts/ids | Fetch all contacts IDs belonging to the list with ID.
[**getListsOfContact**](DefaultApi.md#getListsOfContact) | **GET** /api/v2/contacts/{id}/lists | Return lists which contact belongs to.
[**getMessagePreview**](DefaultApi.md#getMessagePreview) | **GET** /api/v2/messages/preview | Get messages preview (with tags merged) up to 100 messages per session.
[**getMessagePrice**](DefaultApi.md#getMessagePrice) | **GET** /api/v2/messages/price | Check pricing for a new outbound message.
[**getMessagePrices**](DefaultApi.md#getMessagePrices) | **GET** /api/v2/messages/prices | Get message prices for all countries.
[**getMessageSession**](DefaultApi.md#getMessageSession) | **GET** /api/v2/sessions/{id} | Get a message session.
[**getMessageSessionStat**](DefaultApi.md#getMessageSessionStat) | **GET** /api/v2/sessions/{id}/stat | Get sending session statistics.
[**getMessagesBySessionId**](DefaultApi.md#getMessagesBySessionId) | **GET** /api/v2/sessions/{id}/messages | Fetch messages by given session id.
[**getMessagingCounters**](DefaultApi.md#getMessagingCounters) | **GET** /api/v2/stats/messaging/data | Return counters for messaging data views.
[**getMessagingStat**](DefaultApi.md#getMessagingStat) | **GET** /api/v2/stats/messaging | Return messaging statistics.
[**getOutboundMessage**](DefaultApi.md#getOutboundMessage) | **GET** /api/v2/messages/{id} | Get a single outgoing message.
[**getOutboundMessagesHistory**](DefaultApi.md#getOutboundMessagesHistory) | **GET** /api/v2/history | Get outbound messages history.
[**getPushTokens**](DefaultApi.md#getPushTokens) | **GET** /api/v2/push/tokens | Get all device tokens assigned to the current account
[**getScheduledMessage**](DefaultApi.md#getScheduledMessage) | **GET** /api/v2/schedules/{id} | Get message schedule.
[**getSenderId**](DefaultApi.md#getSenderId) | **GET** /api/v2/senderids/{id} | Get a single Sender ID.
[**getSenderIds**](DefaultApi.md#getSenderIds) | **GET** /api/v2/senderids | Get all sender IDs of current user.
[**getSenderSettings**](DefaultApi.md#getSenderSettings) | **GET** /api/v2/sender/settings | Get current user sender settings.
[**getSpendingStat**](DefaultApi.md#getSpendingStat) | **GET** /api/v2/stats/spending | Return account spending statistics.
[**getState**](DefaultApi.md#getState) | **GET** /api/v2/state | Get current entities state
[**getSubaccount**](DefaultApi.md#getSubaccount) | **GET** /api/v2/subaccounts/{id} | Get a single subaccount.
[**getSubaccounts**](DefaultApi.md#getSubaccounts) | **GET** /api/v2/subaccounts | Get all subaccounts of current user.
[**getSubaccountsWithTokens**](DefaultApi.md#getSubaccountsWithTokens) | **POST** /api/v2/subaccounts/tokens/list | Get all subaccounts with their REST API tokens associated with specified app name.
[**getSurvey**](DefaultApi.md#getSurvey) | **GET** /api/v2/surveys/{id} | Get a survey by id.
[**getSurveyNode**](DefaultApi.md#getSurveyNode) | **GET** /api/v2/surveys/nodes/{id} | Get a node by id.
[**getSurveyNodes**](DefaultApi.md#getSurveyNodes) | **GET** /api/v2/surveys/{id}/nodes | Fetch nodes by given survey id.
[**getSurveys**](DefaultApi.md#getSurveys) | **GET** /api/v2/surveys | Get all user surveys.
[**getTemplate**](DefaultApi.md#getTemplate) | **GET** /api/v2/templates/{id} | Get a single template.
[**getTimezones**](DefaultApi.md#getTimezones) | **GET** /api/v2/timezones | Return all available timezone IDs.
[**getUnreadMessagesTotal**](DefaultApi.md#getUnreadMessagesTotal) | **GET** /api/v2/chats/unread/count | Get total amount of unread messages in the current user chats.
[**getUnsubscribedContact**](DefaultApi.md#getUnsubscribedContact) | **GET** /api/v2/unsubscribers/{id} | Get a single unsubscribed contact.
[**getUnsubscribers**](DefaultApi.md#getUnsubscribers) | **GET** /api/v2/unsubscribers | Get all contact have unsubscribed from your communication.
[**getUserDedicatedNumbers**](DefaultApi.md#getUserDedicatedNumbers) | **GET** /api/v2/numbers | Get user&#39;s dedicated numbers.
[**getUserLists**](DefaultApi.md#getUserLists) | **GET** /api/v2/lists | Get all user lists.
[**getVersions**](DefaultApi.md#getVersions) | **GET** /api/v2/versions | Get minimal valid apps versions
[**inviteSubaccount**](DefaultApi.md#inviteSubaccount) | **POST** /api/v2/subaccounts | Invite new subaccount.
[**markChatsReadBulk**](DefaultApi.md#markChatsReadBulk) | **POST** /api/v2/chats/read/bulk | Mark several chats as read by chat ids or mark all chats as read
[**markChatsUnreadBulk**](DefaultApi.md#markChatsUnreadBulk) | **POST** /api/v2/chats/unread/bulk | Mark several chats as UNread by chat ids or mark all chats as UNread
[**mergeSurveyNodes**](DefaultApi.md#mergeSurveyNodes) | **POST** /api/v2/surveys/nodes/merge | Merge two question nodes.
[**muteChat**](DefaultApi.md#muteChat) | **POST** /api/v2/chats/mute | Set mute mode.
[**muteChatsBulk**](DefaultApi.md#muteChatsBulk) | **POST** /api/v2/chats/mute/bulk | Mute several chats by chat ids or mute all chats
[**ping**](DefaultApi.md#ping) | **GET** /api/v2/ping | Just does a pong.
[**reopenChatsBulk**](DefaultApi.md#reopenChatsBulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats by chat ids or reopen all chats
[**requestNewSubaccountToken**](DefaultApi.md#requestNewSubaccountToken) | **POST** /api/v2/subaccounts/tokens | Request a new REST API token for subaccount.
[**requestSenderId**](DefaultApi.md#requestSenderId) | **POST** /api/v2/senderids | Request for a new Sender ID.
[**resetSurvey**](DefaultApi.md#resetSurvey) | **PUT** /api/v2/surveys/{id}/reset | Reset a survey flow.
[**searchChats**](DefaultApi.md#searchChats) | **GET** /api/v2/chats/search | Find chats by inbound or outbound messages text.
[**searchChatsByIds**](DefaultApi.md#searchChatsByIds) | **GET** /api/v2/chats/search/ids | Find chats by IDs.
[**searchChatsByReceipent**](DefaultApi.md#searchChatsByReceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient (contact, list name or phone number).
[**searchContacts**](DefaultApi.md#searchContacts) | **GET** /api/v2/contacts/search | Find user contacts by given parameters.
[**searchInboundMessages**](DefaultApi.md#searchInboundMessages) | **GET** /api/v2/replies/search | Find inbound messages by given parameters.
[**searchLists**](DefaultApi.md#searchLists) | **GET** /api/v2/lists/search | Find contact lists by given parameters.
[**searchOutboundMessages**](DefaultApi.md#searchOutboundMessages) | **GET** /api/v2/messages/search | Find outbound messages by given parameters.
[**searchScheduledMessages**](DefaultApi.md#searchScheduledMessages) | **GET** /api/v2/schedules/search | Find scheduled messages by given parameters.
[**searchTemplates**](DefaultApi.md#searchTemplates) | **GET** /api/v2/templates/search | Find user templates by given parameters.
[**sendEmailVerificationCode**](DefaultApi.md#sendEmailVerificationCode) | **GET** /api/v2/user/email/verification | Send user email verification
[**sendMessage**](DefaultApi.md#sendMessage) | **POST** /api/v2/messages | Send a new outbound message.
[**sendPhoneVerificationCode**](DefaultApi.md#sendPhoneVerificationCode) | **GET** /api/v2/user/phone/verification | Send user phone verification
[**setChatStatus**](DefaultApi.md#setChatStatus) | **POST** /api/v2/chats/status | Set status of the chat given by ID.
[**startSurvey**](DefaultApi.md#startSurvey) | **PUT** /api/v2/surveys/{id}/start | Start a survey.
[**unblockContact**](DefaultApi.md#unblockContact) | **POST** /api/v2/contacts/unblock | Unblock contact by phone number.
[**unblockContactsBulk**](DefaultApi.md#unblockContactsBulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock several contacts by blocked contact ids or unblock all contacts
[**unmuteChatsBulk**](DefaultApi.md#unmuteChatsBulk) | **POST** /api/v2/chats/unmute/bulk | Unmute several chats by chat ids or unmute all chats
[**unsubscribeContact**](DefaultApi.md#unsubscribeContact) | **POST** /api/v2/unsubscribers | Unsubscribe contact from your communication by phone number.
[**updateBalanceNotificationSettings**](DefaultApi.md#updateBalanceNotificationSettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings
[**updateCallbackSettings**](DefaultApi.md#updateCallbackSettings) | **PUT** /api/v2/callback/settings | Update callback URL settings
[**updateChatDesktopNotificationSettings**](DefaultApi.md#updateChatDesktopNotificationSettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings
[**updateContact**](DefaultApi.md#updateContact) | **PUT** /api/v2/contacts/{id} | Update existing contact.
[**updateContactNote**](DefaultApi.md#updateContactNote) | **PUT** /api/v2/notes/{id} | Update existing contact note.
[**updateCurrentUser**](DefaultApi.md#updateCurrentUser) | **PUT** /api/v2/user | Update current user info.
[**updateCustomField**](DefaultApi.md#updateCustomField) | **PUT** /api/v2/customfields/{id} | Update existing custom field.
[**updateCustomFieldValue**](DefaultApi.md#updateCustomFieldValue) | **PUT** /api/v2/customfields/{id}/update | Update contact&#39;s custom field value.
[**updateInboundMessagesNotificationSettings**](DefaultApi.md#updateInboundMessagesNotificationSettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings
[**updateList**](DefaultApi.md#updateList) | **PUT** /api/v2/lists/{id} | Update existing list.
[**updatePassword**](DefaultApi.md#updatePassword) | **PUT** /api/v2/user/password/change | Change user password.
[**updateSenderSetting**](DefaultApi.md#updateSenderSetting) | **PUT** /api/v2/sender/settings | Change sender settings for specified country.
[**updateSurvey**](DefaultApi.md#updateSurvey) | **PUT** /api/v2/surveys/{id} | Update existing survey.
[**updateSurveyNode**](DefaultApi.md#updateSurveyNode) | **PUT** /api/v2/surveys/nodes/{id} | Update existing node.
[**updateTemplate**](DefaultApi.md#updateTemplate) | **PUT** /api/v2/templates/{id} | Update existing template.
[**uploadAvatar**](DefaultApi.md#uploadAvatar) | **POST** /api/v2/user/avatar | Add an avatar for the current user.
[**uploadContactAvatar**](DefaultApi.md#uploadContactAvatar) | **POST** /api/v2/contacts/{id}/avatar | Add an avatar for the contact.
[**uploadListAvatar**](DefaultApi.md#uploadListAvatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for the list.
[**uploadMessageAttachment**](DefaultApi.md#uploadMessageAttachment) | **POST** /api/v2/messages/attachment | Upload a new file to insert it as a link.


# **assignContactsToList**
> \TextMagic\Models\ResourceLinkResponse assignContactsToList($assignContactsToListObject, $id)

Assign contacts to the specified list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignContactsToListObject = new \TextMagic\Models\AssignContactsToListObject(); // \TextMagic\Models\AssignContactsToListObject | Contact ID(s), separated by comma or 'all' to add all contacts belonging to the current user
$id = 1; // int | 

try {
    $result = $apiInstance->assignContactsToList($assignContactsToListObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->assignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignContactsToListObject** | [**\TextMagic\Models\AssignContactsToListObject**](../Model/AssignContactsToListObject.md)| Contact ID(s), separated by comma or &#39;all&#39; to add all contacts belonging to the current user |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockContact**
> \TextMagic\Models\ResourceLinkResponse blockContact($blockContactInputObject, $xIgnoreNullValues)

Block contact from inbound and outbound communication by phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockContactInputObject = new \TextMagic\Models\BlockContactInputObject(); // \TextMagic\Models\BlockContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->blockContact($blockContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockContactInputObject** | [**\TextMagic\Models\BlockContactInputObject**](../Model/BlockContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyDedicatedNumber**
> buyDedicatedNumber($buyDedicatedNumberInputObject, $xIgnoreNullValues)

Buy a dedicated number and assign it to the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyDedicatedNumberInputObject = new \TextMagic\Models\BuyDedicatedNumberInputObject(); // \TextMagic\Models\BuyDedicatedNumberInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->buyDedicatedNumber($buyDedicatedNumberInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->buyDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyDedicatedNumberInputObject** | [**\TextMagic\Models\BuyDedicatedNumberInputObject**](../Model/BuyDedicatedNumberInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSurvey**
> \TextMagic\Models\ResourceLinkResponse cancelSurvey($id)

Cancel a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->cancelSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkPhoneVerificationCode**
> checkPhoneVerificationCode($checkPhoneVerificationCodeInputObject, $xIgnoreNullValues)

Check user phone verification code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkPhoneVerificationCodeInputObject = new \TextMagic\Models\CheckPhoneVerificationCodeInputObject(); // \TextMagic\Models\CheckPhoneVerificationCodeInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->checkPhoneVerificationCode($checkPhoneVerificationCodeInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPhoneVerificationCodeInputObject** | [**\TextMagic\Models\CheckPhoneVerificationCodeInputObject**](../Model/CheckPhoneVerificationCodeInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearAndAssignContactsToList**
> \TextMagic\Models\ResourceLinkResponse clearAndAssignContactsToList($clearAndAssignContactsToListInputIObject, $id)

Reset list members to the specified contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clearAndAssignContactsToListInputIObject = new \TextMagic\Models\ClearAndAssignContactsToListInputIObject(); // \TextMagic\Models\ClearAndAssignContactsToListInputIObject | Contact ID(s), separated by comma or 'all' to add all contacts belonging to the current user
$id = 1; // int | 

try {
    $result = $apiInstance->clearAndAssignContactsToList($clearAndAssignContactsToListInputIObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clearAndAssignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clearAndAssignContactsToListInputIObject** | [**\TextMagic\Models\ClearAndAssignContactsToListInputIObject**](../Model/ClearAndAssignContactsToListInputIObject.md)| Contact ID(s), separated by comma or &#39;all&#39; to add all contacts belonging to the current user |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeChatsBulk**
> closeChatsBulk($closeChatsBulkInputObject, $xIgnoreNullValues)

Close chats by chat ids or close all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$closeChatsBulkInputObject = new \TextMagic\Models\CloseChatsBulkInputObject(); // \TextMagic\Models\CloseChatsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->closeChatsBulk($closeChatsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->closeChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **closeChatsBulkInputObject** | [**\TextMagic\Models\CloseChatsBulkInputObject**](../Model/CloseChatsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeReadChats**
> closeReadChats()

Close all chats that have no unread messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->closeReadChats();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->closeReadChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeSubaccount**
> closeSubaccount($id)

Close subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->closeSubaccount($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->closeSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \TextMagic\Models\ResourceLinkResponse createContact($createContactInputObject, $xIgnoreNullValues)

Create a new contact from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createContactInputObject = new \TextMagic\Models\CreateContactInputObject(); // \TextMagic\Models\CreateContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createContact($createContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createContactInputObject** | [**\TextMagic\Models\CreateContactInputObject**](../Model/CreateContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactNote**
> \TextMagic\Models\ResourceLinkResponse createContactNote($createContactNoteInputObject, $id, $xIgnoreNullValues)

Create a new contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createContactNoteInputObject = new \TextMagic\Models\CreateContactNoteInputObject(); // \TextMagic\Models\CreateContactNoteInputObject | 
$id = 56; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createContactNote($createContactNoteInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createContactNoteInputObject** | [**\TextMagic\Models\CreateContactNoteInputObject**](../Model/CreateContactNoteInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomField**
> \TextMagic\Models\ResourceLinkResponse createCustomField($createCustomFieldInputObject, $xIgnoreNullValues)

Create a new custom field from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createCustomFieldInputObject = new \TextMagic\Models\CreateCustomFieldInputObject(); // \TextMagic\Models\CreateCustomFieldInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createCustomField($createCustomFieldInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCustomFieldInputObject** | [**\TextMagic\Models\CreateCustomFieldInputObject**](../Model/CreateCustomFieldInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createList**
> \TextMagic\Models\ResourceLinkResponse createList($createListInputObject, $xIgnoreNullValues)

Create a new list from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createListInputObject = new \TextMagic\Models\CreateListInputObject(); // \TextMagic\Models\CreateListInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createList($createListInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createListInputObject** | [**\TextMagic\Models\CreateListInputObject**](../Model/CreateListInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPushToken**
> createPushToken($createPushTokenInputObject, $xIgnoreNullValues)

Add or update a device token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createPushTokenInputObject = new \TextMagic\Models\CreatePushTokenInputObject(); // \TextMagic\Models\CreatePushTokenInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->createPushToken($createPushTokenInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPushTokenInputObject** | [**\TextMagic\Models\CreatePushTokenInputObject**](../Model/CreatePushTokenInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSurvey**
> \TextMagic\Models\ResourceLinkResponse createSurvey($createSurveyInputObject, $xIgnoreNullValues)

Create a new survey from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSurveyInputObject = new \TextMagic\Models\CreateSurveyInputObject(); // \TextMagic\Models\CreateSurveyInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createSurvey($createSurveyInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSurveyInputObject** | [**\TextMagic\Models\CreateSurveyInputObject**](../Model/CreateSurveyInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSurveyNode**
> \TextMagic\Models\ResourceLinkResponse createSurveyNode($createSurveyNodeInputObject, $id, $xIgnoreNullValues)

Create a new node from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSurveyNodeInputObject = new \TextMagic\Models\CreateSurveyNodeInputObject(); // \TextMagic\Models\CreateSurveyNodeInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createSurveyNode($createSurveyNodeInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSurveyNodeInputObject** | [**\TextMagic\Models\CreateSurveyNodeInputObject**](../Model/CreateSurveyNodeInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplate**
> \TextMagic\Models\ResourceLinkResponse createTemplate($createTemplateInputObject, $xIgnoreNullValues)

Create a new template from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTemplateInputObject = new \TextMagic\Models\CreateTemplateInputObject(); // \TextMagic\Models\CreateTemplateInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createTemplate($createTemplateInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createTemplateInputObject** | [**\TextMagic\Models\CreateTemplateInputObject**](../Model/CreateTemplateInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllContacts**
> deleteAllContacts()

Delete all contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllContacts();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAllContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllOutboundMessages**
> deleteAllOutboundMessages()

Delete all messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllOutboundMessages();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAvatar**
> deleteAvatar()

Delete an avatar for the current user.\\

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAvatar();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatMessages**
> deleteChatMessages($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues)

Delete messages from chat by given messages ID(s).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteChatMessagesBulkInputObject = new \TextMagic\Models\DeleteChatMessagesBulkInputObject(); // \TextMagic\Models\DeleteChatMessagesBulkInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteChatMessages($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteChatMessagesBulkInputObject** | [**\TextMagic\Models\DeleteChatMessagesBulkInputObject**](../Model/DeleteChatMessagesBulkInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatsBulk**
> deleteChatsBulk($deleteChatsBulkInputObject, $xIgnoreNullValues)

Delete chats by given ID(s) or delete all chats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteChatsBulkInputObject = new \TextMagic\Models\DeleteChatsBulkInputObject(); // \TextMagic\Models\DeleteChatsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteChatsBulk($deleteChatsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteChatsBulkInputObject** | [**\TextMagic\Models\DeleteChatsBulkInputObject**](../Model/DeleteChatsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($id)

Delete a single contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactAvatar**
> deleteContactAvatar($id)

Delete an avatar for the contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteContactAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContactAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactNote**
> deleteContactNote($id)

Delete a single contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteContactNote($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactNotesBulk**
> deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject, $xIgnoreNullValues)

Delete contact note by given ID(s) or delete all contact notes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$deleteContactNotesBulkInputObject = new \TextMagic\Models\DeleteContactNotesBulkInputObject(); // \TextMagic\Models\DeleteContactNotesBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContactNotesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **deleteContactNotesBulkInputObject** | [**\TextMagic\Models\DeleteContactNotesBulkInputObject**](../Model/DeleteContactNotesBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsByIds**
> deleteContactsByIds($deleteContactsByIdsInputObject, $xIgnoreNullValues)

Delete contact by given ID(s) or delete all contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteContactsByIdsInputObject = new \TextMagic\Models\DeleteContactsByIdsInputObject(); // \TextMagic\Models\DeleteContactsByIdsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteContactsByIds($deleteContactsByIdsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContactsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteContactsByIdsInputObject** | [**\TextMagic\Models\DeleteContactsByIdsInputObject**](../Model/DeleteContactsByIdsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsFromList**
> deleteContactsFromList($deleteContacsFromListObject, $id)

Unassign contacts from the specified list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteContacsFromListObject = new \TextMagic\Models\DeleteContacsFromListObject(); // \TextMagic\Models\DeleteContacsFromListObject | Contact ID(s), separated by comma
$id = 1; // int | 

try {
    $apiInstance->deleteContactsFromList($deleteContacsFromListObject, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteContactsFromList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteContacsFromListObject** | [**\TextMagic\Models\DeleteContacsFromListObject**](../Model/DeleteContacsFromListObject.md)| Contact ID(s), separated by comma |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomField**
> deleteCustomField($id)

Delete a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteCustomField($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDedicatedNumber**
> deleteDedicatedNumber($id)

Cancel dedicated number subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteDedicatedNumber($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInboundMessage**
> deleteInboundMessage($id)

Delete the incoming message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteInboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteInboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInboundMessagesBulk**
> deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject, $xIgnoreNullValues)

Delete inbound messages by given ID(s) or delete all inbound messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteInboundMessagesBulkInputObject = new \TextMagic\Models\DeleteInboundMessagesBulkInputObject(); // \TextMagic\Models\DeleteInboundMessagesBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteInboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteInboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteInboundMessagesBulkInputObject**](../Model/DeleteInboundMessagesBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteList**
> deleteList($id)

Delete a single list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteList($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListAvatar**
> deleteListAvatar($id)

Delete an avatar for the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteListAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteListAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListContactsBulk**
> deleteListContactsBulk($deleteListContactsBulkInputObject, $id, $xIgnoreNullValues)

Delete contact from list by given ID(s) or all contacts from list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteListContactsBulkInputObject = new \TextMagic\Models\DeleteListContactsBulkInputObject(); // \TextMagic\Models\DeleteListContactsBulkInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteListContactsBulk($deleteListContactsBulkInputObject, $id, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteListContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteListContactsBulkInputObject** | [**\TextMagic\Models\DeleteListContactsBulkInputObject**](../Model/DeleteListContactsBulkInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListsBulk**
> deleteListsBulk($deleteListsBulkInputObject, $xIgnoreNullValues)

Delete list by given ID(s) or delete all lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteListsBulkInputObject = new \TextMagic\Models\DeleteListsBulkInputObject(); // \TextMagic\Models\DeleteListsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteListsBulk($deleteListsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteListsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteListsBulkInputObject** | [**\TextMagic\Models\DeleteListsBulkInputObject**](../Model/DeleteListsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageSession**
> deleteMessageSession($id)

Delete a message session, together with all nested messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteMessageSession($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMessageSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageSessionsBulk**
> deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject, $xIgnoreNullValues)

Delete messages sessions, together with all nested messages, by given ID(s) or delete all messages sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteMessageSessionsBulkInputObject = new \TextMagic\Models\DeleteMessageSessionsBulkInputObject(); // \TextMagic\Models\DeleteMessageSessionsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMessageSessionsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteMessageSessionsBulkInputObject** | [**\TextMagic\Models\DeleteMessageSessionsBulkInputObject**](../Model/DeleteMessageSessionsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundMessage**
> deleteOutboundMessage($id)

Delete a single message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteOutboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundMessagesBulk**
> deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues)

Delete outbound messages by given ID(s) or delete all outbound messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteOutboundMessagesBulkInputObject = new \TextMagic\Models\DeleteOutboundMessagesBulkInputObject(); // \TextMagic\Models\DeleteOutboundMessagesBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOutboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteOutboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteOutboundMessagesBulkInputObject**](../Model/DeleteOutboundMessagesBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePushToken**
> deletePushToken($type, $deviceId)

Delete a push notification device token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | 
$deviceId = 56; // int | 

try {
    $apiInstance->deletePushToken($type, $deviceId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **deviceId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledMessage**
> deleteScheduledMessage($id)

Delete a message session, together with all nested messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteScheduledMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledMessagesBulk**
> deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject, $xIgnoreNullValues)

Delete scheduled messages by given ID(s) or delete all scheduled messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteScheduledMessagesBulkInputObject = new \TextMagic\Models\DeleteScheduledMessagesBulkInputObject(); // \TextMagic\Models\DeleteScheduledMessagesBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteScheduledMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteScheduledMessagesBulkInputObject** | [**\TextMagic\Models\DeleteScheduledMessagesBulkInputObject**](../Model/DeleteScheduledMessagesBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSenderId**
> deleteSenderId($id)

Delete a Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSenderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSurvey**
> deleteSurvey($id)

Delete a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSurvey($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSurveyNode**
> deleteSurveyNode($id)

Delete a node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSurveyNode($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> deleteTemplate($id)

Delete a single template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplatesBulk**
> deleteTemplatesBulk($deleteTemplatesBulkInputObject, $xIgnoreNullValues)

Delete template by given ID(s) or delete all templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteTemplatesBulkInputObject = new \TextMagic\Models\DeleteTemplatesBulkInputObject(); // \TextMagic\Models\DeleteTemplatesBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteTemplatesBulk($deleteTemplatesBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTemplatesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteTemplatesBulkInputObject** | [**\TextMagic\Models\DeleteTemplatesBulkInputObject**](../Model/DeleteTemplatesBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doAuth**
> \TextMagic\Models\DoAuthResponse doAuth($doAuthInputObject, $xIgnoreNullValues)

Authenticate user by given username and password.

Returning a username and token that you should pass to the all requests (in X-TM-Username and X-TM-Key, respectively)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$doAuthInputObject = new \TextMagic\Models\DoAuthInputObject(); // \TextMagic\Models\DoAuthInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->doAuth($doAuthInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->doAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doAuthInputObject** | [**\TextMagic\Models\DoAuthInputObject**](../Model/DoAuthInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\DoAuthResponse**](../Model/DoAuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doCarrierLookup**
> \TextMagic\Models\DoCarrierLookupResponse doCarrierLookup($phone, $country)

Carrier Lookup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "\"1-541-754-3010\""; // string | 
$country = "US"; // string | Country code for local formatted numbers

try {
    $result = $apiInstance->doCarrierLookup($phone, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->doCarrierLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |
 **country** | **string**| Country code for local formatted numbers | [optional] [default to US]

### Return type

[**\TextMagic\Models\DoCarrierLookupResponse**](../Model/DoCarrierLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doEmailLookup**
> \TextMagic\Models\DoEmailLookupResponse doEmailLookup($email)

Validate Email address using Email Lookup tool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "\"andrey.v@textmagic.biz\""; // string | 

try {
    $result = $apiInstance->doEmailLookup($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->doEmailLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\TextMagic\Models\DoEmailLookupResponse**](../Model/DoEmailLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateSurvey**
> \TextMagic\Models\ResourceLinkResponse duplicateSurvey($id)

Duplicate a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->duplicateSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->duplicateSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBulkSessions**
> \TextMagic\Models\GetAllBulkSessionsResponse getAllBulkSessions($page, $limit)

Get all bulk sending sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getAllBulkSessions($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllBulkSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetAllBulkSessionsResponse**](../Model/GetAllBulkSessionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllChats**
> \TextMagic\Models\GetAllChatsResponse getAllChats($status, $page, $limit, $orderBy, $voice, $flat)

Get all user chats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | Fetch only (a)ctive, (c)losed or (d)eleted chats
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$orderBy = "id"; // string | Order results by some field. Default is id
$voice = 0; // int | Fetch results with voice calls
$flat = 0; // int | Should additional contact info be included

try {
    $result = $apiInstance->getAllChats($status, $page, $limit, $orderBy, $voice, $flat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Fetch only (a)ctive, (c)losed or (d)eleted chats | [optional]
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **voice** | **int**| Fetch results with voice calls | [optional] [default to 0]
 **flat** | **int**| Should additional contact info be included | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetAllChatsResponse**](../Model/GetAllChatsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInboundMessages**
> \TextMagic\Models\GetAllInboundMessagesResponse getAllInboundMessages($page, $limit, $orderBy, $direction)

Get all inbox messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getAllInboundMessages($page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllInboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetAllInboundMessagesResponse**](../Model/GetAllInboundMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMessageSessions**
> \TextMagic\Models\GetAllMessageSessionsResponse getAllMessageSessions($page, $limit)

Get all message sending sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getAllMessageSessions($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllMessageSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetAllMessageSessionsResponse**](../Model/GetAllMessageSessionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOutboundMessages**
> \TextMagic\Models\GetAllOutboundMessagesResponse getAllOutboundMessages($page, $limit, $lastId)

Get all user oubound messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID. Note that \\'page\\' parameter is ignored when \\'lastId\\' is specified

try {
    $result = $apiInstance->getAllOutboundMessages($page, $limit, $lastId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified | [optional]

### Return type

[**\TextMagic\Models\GetAllOutboundMessagesResponse**](../Model/GetAllOutboundMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllScheduledMessages**
> \TextMagic\Models\GetAllScheduledMessagesResponse getAllScheduledMessages($page, $limit, $status, $orderBy, $direction)

Get all scheduled messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$status = "x"; // string | Fetch schedules with the specific status: a - actual, c - completed, x - all
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getAllScheduledMessages($page, $limit, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **status** | **string**| Fetch schedules with the specific status: a - actual, c - completed, x - all | [optional] [default to x]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetAllScheduledMessagesResponse**](../Model/GetAllScheduledMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTemplates**
> \TextMagic\Models\GetAllTemplatesResponse getAllTemplates($page, $limit)

Get all user templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getAllTemplates($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional]
 **limit** | **int**| How many results to return | [optional]

### Return type

[**\TextMagic\Models\GetAllTemplatesResponse**](../Model/GetAllTemplatesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableDedicatedNumbers**
> \TextMagic\Models\GetAvailableDedicatedNumbersResponse getAvailableDedicatedNumbers($country, $prefix, $tollfree)

Find available dedicated numbers to buy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "\"GB\""; // string | Dedicated number country. Two letters in upper case
$prefix = 1; // int | Desired number prefix. Should include country code (i.e. 447 for GB). In case provide tollfree = 1 parameter and there are available tollfree numbers, this parameter will be ignore.
$tollfree = 0; // int | Should we show only tollfree numbers (tollfree available only for US). Default is false.

try {
    $result = $apiInstance->getAvailableDedicatedNumbers($country, $prefix, $tollfree);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Dedicated number country. Two letters in upper case |
 **prefix** | **int**| Desired number prefix. Should include country code (i.e. 447 for GB). In case provide tollfree &#x3D; 1 parameter and there are available tollfree numbers, this parameter will be ignore. | [optional] [default to 1]
 **tollfree** | **int**| Should we show only tollfree numbers (tollfree available only for US). Default is false. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetAvailableDedicatedNumbersResponse**](../Model/GetAvailableDedicatedNumbersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableSenderSettingOptions**
> \TextMagic\Models\GetAvailableSenderSettingOptionsResponse getAvailableSenderSettingOptions($country)

Get all available sender setting options which could be used in \"from\" parameter of POST messages method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Return sender setting options available in specific country only. Two upper case characters

try {
    $result = $apiInstance->getAvailableSenderSettingOptions($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableSenderSettingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Return sender setting options available in specific country only. Two upper case characters | [optional]

### Return type

[**\TextMagic\Models\GetAvailableSenderSettingOptionsResponse**](../Model/GetAvailableSenderSettingOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationOptions**
> \TextMagic\Models\GetBalanceNotificationOptionsResponse getBalanceNotificationOptions()

Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalanceNotificationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationOptionsResponse**](../Model/GetBalanceNotificationOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationSettings**
> \TextMagic\Models\GetBalanceNotificationSettingsResponse getBalanceNotificationSettings()

Get balance notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationSettingsResponse**](../Model/GetBalanceNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockedContacts**
> \TextMagic\Models\GetBlockedContactsResponse getBlockedContacts($page, $limit, $query, $orderBy, $direction)

Get blocked contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find blocked contacts by specified search query
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getBlockedContacts($page, $limit, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBlockedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find blocked contacts by specified search query | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetBlockedContactsResponse**](../Model/GetBlockedContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkSession**
> \TextMagic\Models\BulkSession getBulkSession($id)

Get bulk message session status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getBulkSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBulkSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\BulkSession**](../Model/BulkSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallbackSettings**
> \TextMagic\Models\GetCallbackSettingsResponse getCallbackSettings()

Fetch callback URL settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallbackSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetCallbackSettingsResponse**](../Model/GetCallbackSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsPrices**
> map[string,object] getCallsPrices()

Check pricing for a inbound/outbound call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallsPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCallsPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChat**
> \TextMagic\Models\Chat getChat($id)

Get a single chat.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getChat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatByPhone**
> \TextMagic\Models\Chat getChatByPhone($phone, $upsert, $reopen)

Find chats by phone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "phone_example"; // string | 
$upsert = 0; // int | Create a new chat if not found
$reopen = 0; // int | Reopen chat if found or do not change status

try {
    $result = $apiInstance->getChatByPhone($phone, $upsert, $reopen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getChatByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |
 **upsert** | **int**| Create a new chat if not found | [optional] [default to 0]
 **reopen** | **int**| Reopen chat if found or do not change status | [optional] [default to 0]

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatMessages**
> \TextMagic\Models\GetChatMessagesResponse getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice)

Fetch messages from chat with specified chat id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find messages by specified search query
$start = 56; // int | Return messages since specified timestamp only
$end = 56; // int | Return messages up to specified timestamp only
$direction = "desc"; // string | Order direction. Default is desc
$voice = 0; // int | Fetch results with voice calls

try {
    $result = $apiInstance->getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find messages by specified search query | [optional]
 **start** | **int**| Return messages since specified timestamp only | [optional]
 **end** | **int**| Return messages up to specified timestamp only | [optional]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]
 **voice** | **int**| Fetch results with voice calls | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetChatMessagesResponse**](../Model/GetChatMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \TextMagic\Models\Contact getContact($id)

Get a single contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | The contact id

try {
    $result = $apiInstance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The contact id |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactByPhone**
> \TextMagic\Models\Contact getContactByPhone($phone)

Get a single contact by phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "phone_example"; // string | 

try {
    $result = $apiInstance->getContactByPhone($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactIfBlocked**
> \TextMagic\Models\Contact getContactIfBlocked($phone)

Check is that phone number blocked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "9997339956475"; // string | Phone number to check

try {
    $result = $apiInstance->getContactIfBlocked($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactIfBlocked: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| Phone number to check |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactImportSessionProgress**
> \TextMagic\Models\GetContactImportSessionProgressResponse getContactImportSessionProgress($id)

Get contact import session progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getContactImportSessionProgress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactImportSessionProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\GetContactImportSessionProgressResponse**](../Model/GetContactImportSessionProgressResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactNote**
> \TextMagic\Models\ContactNote getContactNote($id)

Get a single contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getContactNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactNotes**
> \TextMagic\Models\GetContactNotesResponse getContactNotes($id, $page, $limit)

Fetch notes assigned to the given contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getContactNotes($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetContactNotesResponse**](../Model/GetContactNotesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \TextMagic\Models\GetContactsResponse getContacts($page, $limit, $shared, $orderBy, $direction)

Get all user contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$shared = 0; // int | Should shared contacts to be included
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getContacts($page, $limit, $shared, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **shared** | **int**| Should shared contacts to be included | [optional] [default to 0]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetContactsResponse**](../Model/GetContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsAutocomplete**
> \TextMagic\Models\GetContactsAutocompleteResponse[] getContactsAutocomplete($query, $limit, $lists)

Get contacts autocomplete suggestions by given search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "\"A\""; // string | Find recipients by specified search query
$limit = 10; // int | How many results to return
$lists = 0; // int | Should lists be returned or not

try {
    $result = $apiInstance->getContactsAutocomplete($query, $limit, $lists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Find recipients by specified search query |
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **lists** | **int**| Should lists be returned or not | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetContactsAutocompleteResponse[]**](../Model/GetContactsAutocompleteResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsByListId**
> \TextMagic\Models\GetContactsByListIdResponse getContactsByListId($id, $page, $limit, $orderBy, $direction)

Fetch user contacts by given group id.

A useful synonym for \"contacts/search\" command with provided \"listId\" parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Given group Id.
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getContactsByListId($id, $page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContactsByListId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Given group Id. |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetContactsByListIdResponse**](../Model/GetContactsByListIdResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountries**
> \TextMagic\Models\Country[] getCountries()

Return list of countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\Country[]**](../Model/Country.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUser**
> \TextMagic\Models\User getCurrentUser()

Get current user info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomField**
> \TextMagic\Models\UserCustomField getCustomField($id)

Get a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UserCustomField**](../Model/UserCustomField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFields**
> \TextMagic\Models\GetCustomFieldsResponse getCustomFields($page, $limit)

Get all contact custom fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getCustomFields($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetCustomFieldsResponse**](../Model/GetCustomFieldsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDedicatedNumber**
> \TextMagic\Models\UsersInbound getDedicatedNumber($id)

Get a single dedicated number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getDedicatedNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UsersInbound**](../Model/UsersInbound.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisallowedRules**
> string[] getDisallowedRules()

Get an array of all rules that are disallowed to the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDisallowedRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDisallowedRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavourites**
> \TextMagic\Models\GetFavouritesResponse getFavourites($page, $limit, $query)

Get favorite contacts and lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "A"; // string | Find contacts or lists by specified search query

try {
    $result = $apiInstance->getFavourites($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFavourites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find contacts or lists by specified search query | [optional] [default to A]

### Return type

[**\TextMagic\Models\GetFavouritesResponse**](../Model/GetFavouritesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForwardedCalls**
> \TextMagic\Models\GetForwardedCallsResponse getForwardedCalls($page, $limit)

Get all forwarded calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getForwardedCalls($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getForwardedCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetForwardedCallsResponse**](../Model/GetForwardedCallsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundMessage**
> \TextMagic\Models\MessageIn getInboundMessage($id)

Get a single inbox message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getInboundMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageIn**](../Model/MessageIn.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundMessagesNotificationSettings**
> \TextMagic\Models\GetInboundMessagesNotificationSettingsResponse getInboundMessagesNotificationSettings()

Get inbound messages notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboundMessagesNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetInboundMessagesNotificationSettingsResponse**](../Model/GetInboundMessagesNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \TextMagic\Models\GetInvoicesResponse getInvoices($page, $limit)

Return account invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getInvoices($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetInvoicesResponse**](../Model/GetInvoicesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getList**
> \TextMagic\Models\Group getList($id)

Get a single list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\Group**](../Model/Group.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListContactsIds**
> \TextMagic\Models\GetListContactsIdsResponse getListContactsIds($id)

Fetch all contacts IDs belonging to the list with ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getListContactsIds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getListContactsIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\GetListContactsIdsResponse**](../Model/GetListContactsIdsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListsOfContact**
> \TextMagic\Models\GetListsOfContactResponse getListsOfContact($id, $page, $limit)

Return lists which contact belongs to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getListsOfContact($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getListsOfContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetListsOfContactResponse**](../Model/GetListsOfContactResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagePreview**
> \TextMagic\Models\GetMessagePreviewResponse getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)

Get messages preview (with tags merged) up to 100 messages per session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "\"Test message test\""; // string | Message text. Required if template_id is not set
$templateId = 1; // int | Template used instead of message text. Required if text is not set
$sendingTime = 1565606455; // int | DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now
$sendingDateTime = "\"2020-05-27 13:02:33\""; // string | Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone
$sendingTimezone = "\"America/Buenos_Aires\""; // string | ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone
$contacts = "\"1,2,3,4\""; // string | Comma separated array of contact resources id message will be sent to
$lists = "\"1,2,3,4\""; // string | Comma separated array of list resources id message will be sent to
$phones = "\"+19993322111,+19993322110\""; // string | Comma separated array of E.164 phone numbers message will be sent to
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0
$partsCount = 6; // int | Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure
$from = "\"Testid1\""; // string | One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery
$rule = "\"FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1\""; // string | iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details
$createChat = 0; // int | Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0
$tts = 0; // int | Send Text to Speech message. Default is 0
$local = 0; // int | Treat phone numbers passed in \\'phones\\' field as local. Default is 0
$localCountry = "\"US\""; // string | 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is account country

try {
    $result = $apiInstance->getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagePreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Message text. Required if template_id is not set | [optional]
 **templateId** | **int**| Template used instead of message text. Required if text is not set | [optional]
 **sendingTime** | **int**| DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now | [optional]
 **sendingDateTime** | **string**| Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone | [optional]
 **sendingTimezone** | **string**| ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone | [optional]
 **contacts** | **string**| Comma separated array of contact resources id message will be sent to | [optional]
 **lists** | **string**| Comma separated array of list resources id message will be sent to | [optional]
 **phones** | **string**| Comma separated array of E.164 phone numbers message will be sent to | [optional]
 **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 | [optional] [default to 0]
 **partsCount** | **int**| Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 | [optional] [default to 6]
 **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure | [optional]
 **from** | **string**| One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery | [optional]
 **rule** | **string**| iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details | [optional]
 **createChat** | **int**| Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 | [optional] [default to 0]
 **tts** | **int**| Send Text to Speech message. Default is 0 | [optional] [default to 0]
 **local** | **int**| Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 | [optional] [default to 0]
 **localCountry** | **string**| 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country | [optional]

### Return type

[**\TextMagic\Models\GetMessagePreviewResponse**](../Model/GetMessagePreviewResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagePrice**
> \TextMagic\Models\GetMessagePriceResponse getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)

Check pricing for a new outbound message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeBlocked = 0; // int | Should we show pricing for the blocked contacts.
$text = "\"Test message test\""; // string | Message text. Required if template_id is not set
$templateId = 1; // int | Template used instead of message text. Required if text is not set
$sendingTime = 1565606455; // int | DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now
$sendingDateTime = "\"2020-05-27 13:02:33\""; // string | Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone
$sendingTimezone = "\"America/Buenos_Aires\""; // string | ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone
$contacts = "\"1,2,3,4\""; // string | Comma separated array of contact resources id message will be sent to
$lists = "\"1,2,3,4\""; // string | Comma separated array of list resources id message will be sent to
$phones = "\"+19993322111,+19993322110\""; // string | Comma separated array of E.164 phone numbers message will be sent to
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0
$partsCount = 6; // int | Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure
$from = "\"Testid1\""; // string | One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery
$rule = "\"FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1\""; // string | iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details
$createChat = 0; // int | Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0
$tts = 0; // int | Send Text to Speech message. Default is 0
$local = 0; // int | Treat phone numbers passed in \\'phones\\' field as local. Default is 0
$localCountry = "\"US\""; // string | 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is account country

try {
    $result = $apiInstance->getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagePrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeBlocked** | **int**| Should we show pricing for the blocked contacts. | [optional] [default to 0]
 **text** | **string**| Message text. Required if template_id is not set | [optional]
 **templateId** | **int**| Template used instead of message text. Required if text is not set | [optional]
 **sendingTime** | **int**| DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now | [optional]
 **sendingDateTime** | **string**| Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone | [optional]
 **sendingTimezone** | **string**| ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone | [optional]
 **contacts** | **string**| Comma separated array of contact resources id message will be sent to | [optional]
 **lists** | **string**| Comma separated array of list resources id message will be sent to | [optional]
 **phones** | **string**| Comma separated array of E.164 phone numbers message will be sent to | [optional]
 **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 | [optional] [default to 0]
 **partsCount** | **int**| Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 | [optional] [default to 6]
 **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure | [optional]
 **from** | **string**| One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery | [optional]
 **rule** | **string**| iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details | [optional]
 **createChat** | **int**| Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 | [optional] [default to 0]
 **tts** | **int**| Send Text to Speech message. Default is 0 | [optional] [default to 0]
 **local** | **int**| Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 | [optional] [default to 0]
 **localCountry** | **string**| 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country | [optional]

### Return type

[**\TextMagic\Models\GetMessagePriceResponse**](../Model/GetMessagePriceResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagePrices**
> \TextMagic\Models\GetMessagePricesResponse getMessagePrices()

Get message prices for all countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessagePrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagePrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetMessagePricesResponse**](../Model/GetMessagePricesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageSession**
> \TextMagic\Models\MessageSession getMessageSession($id)

Get a message session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getMessageSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessageSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageSession**](../Model/MessageSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageSessionStat**
> \TextMagic\Models\GetMessageSessionStatResponse getMessageSessionStat($id, $includeDeleted)

Get sending session statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$includeDeleted = 0; // int | Search also in deleted messages

try {
    $result = $apiInstance->getMessageSessionStat($id, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessageSessionStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **includeDeleted** | **int**| Search also in deleted messages | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetMessageSessionStatResponse**](../Model/GetMessageSessionStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagesBySessionId**
> \TextMagic\Models\GetMessagesBySessionIdResponse getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted)

Fetch messages by given session id.

A useful synonym for \"messages/search\" command with provided \"sessionId\" parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$statuses = "statuses_example"; // string | Find messages by status
$includeDeleted = 0; // int | Search also in deleted messages

try {
    $result = $apiInstance->getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagesBySessionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **statuses** | **string**| Find messages by status | [optional]
 **includeDeleted** | **int**| Search also in deleted messages | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetMessagesBySessionIdResponse**](../Model/GetMessagesBySessionIdResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingCounters**
> \TextMagic\Models\GetMessagingCountersResponse getMessagingCounters()

Return counters for messaging data views.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessagingCounters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagingCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetMessagingCountersResponse**](../Model/GetMessagingCountersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingStat**
> \TextMagic\Models\GetMessagingStatResponse getMessagingStat($by, $start, $end)

Return messaging statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$by = "off"; // string | Group results by specified period: off, day, month or year. Default is off
$start = 56; // int | Start date in unix timestamp format. Default is 7 days ago
$end = "end_example"; // string | End date in unix timestamp format. Default is now

try {
    $result = $apiInstance->getMessagingStat($by, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessagingStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **by** | **string**| Group results by specified period: off, day, month or year. Default is off | [optional] [default to off]
 **start** | **int**| Start date in unix timestamp format. Default is 7 days ago | [optional]
 **end** | **string**| End date in unix timestamp format. Default is now | [optional]

### Return type

[**\TextMagic\Models\GetMessagingStatResponse**](../Model/GetMessagingStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundMessage**
> \TextMagic\Models\MessageOut getOutboundMessage($id)

Get a single outgoing message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getOutboundMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageOut**](../Model/MessageOut.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundMessagesHistory**
> \TextMagic\Models\GetOutboundMessagesHistoryResponse getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction)

Get outbound messages history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | How many results to return
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID.
$query = "query_example"; // string | Find message by specified search query
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOutboundMessagesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. | [optional]
 **query** | **string**| Find message by specified search query | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetOutboundMessagesHistoryResponse**](../Model/GetOutboundMessagesHistoryResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushTokens**
> \TextMagic\Models\GetPushTokensResponse getPushTokens()

Get all device tokens assigned to the current account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPushTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPushTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetPushTokensResponse**](../Model/GetPushTokensResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledMessage**
> \TextMagic\Models\MessagesIcs getScheduledMessage($id)

Get message schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getScheduledMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessagesIcs**](../Model/MessagesIcs.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderId**
> \TextMagic\Models\SenderId getSenderId($id)

Get a single Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\SenderId**](../Model/SenderId.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderIds**
> \TextMagic\Models\GetSenderIdsResponse getSenderIds($page, $limit)

Get all sender IDs of current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getSenderIds($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSenderIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetSenderIdsResponse**](../Model/GetSenderIdsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderSettings**
> \TextMagic\Models\GetSenderSettingsResponse getSenderSettings($country)

Get current user sender settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Return sender settings enabled for sending to specified country. Two upper case characters

try {
    $result = $apiInstance->getSenderSettings($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSenderSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Return sender settings enabled for sending to specified country. Two upper case characters | [optional]

### Return type

[**\TextMagic\Models\GetSenderSettingsResponse**](../Model/GetSenderSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpendingStat**
> \TextMagic\Models\GetSpendingStatResponse getSpendingStat($page, $limit, $start, $end)

Return account spending statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$start = 56; // int | Optional. Start date in unix timestamp format. Default is 7 days ago
$end = 56; // int | Optional. End date in unix timestamp format. Default is now

try {
    $result = $apiInstance->getSpendingStat($page, $limit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSpendingStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **start** | **int**| Optional. Start date in unix timestamp format. Default is 7 days ago | [optional]
 **end** | **int**| Optional. End date in unix timestamp format. Default is now | [optional]

### Return type

[**\TextMagic\Models\GetSpendingStatResponse**](../Model/GetSpendingStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getState**
> \TextMagic\Models\GetStateResponse getState()

Get current entities state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetStateResponse**](../Model/GetStateResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccount**
> \TextMagic\Models\User getSubaccount($id)

Get a single subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSubaccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccounts**
> \TextMagic\Models\User getSubaccounts($page, $limit)

Get all subaccounts of current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getSubaccounts($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSubaccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccountsWithTokens**
> \TextMagic\Models\GetSubaccountsWithTokensResponse getSubaccountsWithTokens($getSubaccountsWithTokensInputObject, $page, $limit, $xIgnoreNullValues)

Get all subaccounts with their REST API tokens associated with specified app name.

When more than one token related to app name, last key will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getSubaccountsWithTokensInputObject = new \TextMagic\Models\GetSubaccountsWithTokensInputObject(); // \TextMagic\Models\GetSubaccountsWithTokensInputObject | 
$page = 1; // float | Fetch specified results page
$limit = 10; // int | How many results to return
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->getSubaccountsWithTokens($getSubaccountsWithTokensInputObject, $page, $limit, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSubaccountsWithTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getSubaccountsWithTokensInputObject** | [**\TextMagic\Models\GetSubaccountsWithTokensInputObject**](../Model/GetSubaccountsWithTokensInputObject.md)|  |
 **page** | **float**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\GetSubaccountsWithTokensResponse**](../Model/GetSubaccountsWithTokensResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurvey**
> \TextMagic\Models\Survey getSurvey($id)

Get a survey by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\Survey**](../Model/Survey.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurveyNode**
> \TextMagic\Models\SurveyNode getSurveyNode($id)

Get a node by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurveyNode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\SurveyNode**](../Model/SurveyNode.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurveyNodes**
> \TextMagic\Models\GetSurveyNodesResponse getSurveyNodes($id)

Fetch nodes by given survey id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurveyNodes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSurveyNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\GetSurveyNodesResponse**](../Model/GetSurveyNodesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurveys**
> \TextMagic\Models\GetSurveysResponse getSurveys($page, $limit)

Get all user surveys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getSurveys($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetSurveysResponse**](../Model/GetSurveysResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \TextMagic\Models\MessageTemplate getTemplate($id)

Get a single template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimezones**
> object getTimezones($full)

Return all available timezone IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full = 0; // int | Return full info about timezones in array (0 or 1). Default is 0

try {
    $result = $apiInstance->getTimezones($full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full** | **int**| Return full info about timezones in array (0 or 1). Default is 0 | [optional] [default to 0]

### Return type

**object**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnreadMessagesTotal**
> \TextMagic\Models\GetUnreadMessagesTotalResponse getUnreadMessagesTotal()

Get total amount of unread messages in the current user chats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnreadMessagesTotal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUnreadMessagesTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetUnreadMessagesTotalResponse**](../Model/GetUnreadMessagesTotalResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribedContact**
> \TextMagic\Models\UnsubscribedContact getUnsubscribedContact($id)

Get a single unsubscribed contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getUnsubscribedContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUnsubscribedContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UnsubscribedContact**](../Model/UnsubscribedContact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribers**
> \TextMagic\Models\GetUnsubscribersResponse getUnsubscribers($page, $limit)

Get all contact have unsubscribed from your communication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getUnsubscribers($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUnsubscribers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetUnsubscribersResponse**](../Model/GetUnsubscribersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDedicatedNumbers**
> \TextMagic\Models\GetUserDedicatedNumbersResponse getUserDedicatedNumbers($page, $limit, $surveyId)

Get user's dedicated numbers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$surveyId = 56; // int | Fetch only that numbers which are ready for the survey

try {
    $result = $apiInstance->getUserDedicatedNumbers($page, $limit, $surveyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **surveyId** | **int**| Fetch only that numbers which are ready for the survey | [optional]

### Return type

[**\TextMagic\Models\GetUserDedicatedNumbersResponse**](../Model/GetUserDedicatedNumbersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLists**
> \TextMagic\Models\GetUserListsResponse getUserLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine)

Get all user lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc
$favoriteOnly = 0; // int | Return only favorite lists
$onlyMine = 0; // int | Return only current user lists

try {
    $result = $apiInstance->getUserLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]
 **favoriteOnly** | **int**| Return only favorite lists | [optional] [default to 0]
 **onlyMine** | **int**| Return only current user lists | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetUserListsResponse**](../Model/GetUserListsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersions**
> \TextMagic\Models\GetVersionsResponse getVersions()

Get minimal valid apps versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetVersionsResponse**](../Model/GetVersionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteSubaccount**
> inviteSubaccount($inviteSubaccountInputObject, $xIgnoreNullValues)

Invite new subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inviteSubaccountInputObject = new \TextMagic\Models\InviteSubaccountInputObject(); // \TextMagic\Models\InviteSubaccountInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->inviteSubaccount($inviteSubaccountInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->inviteSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inviteSubaccountInputObject** | [**\TextMagic\Models\InviteSubaccountInputObject**](../Model/InviteSubaccountInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markChatsReadBulk**
> markChatsReadBulk($markChatsReadBulkInputObject, $xIgnoreNullValues)

Mark several chats as read by chat ids or mark all chats as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsReadBulkInputObject = new \TextMagic\Models\MarkChatsReadBulkInputObject(); // \TextMagic\Models\MarkChatsReadBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->markChatsReadBulk($markChatsReadBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->markChatsReadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsReadBulkInputObject** | [**\TextMagic\Models\MarkChatsReadBulkInputObject**](../Model/MarkChatsReadBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markChatsUnreadBulk**
> markChatsUnreadBulk($markChatsUnreadBulkInputObject, $xIgnoreNullValues)

Mark several chats as UNread by chat ids or mark all chats as UNread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsUnreadBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkInputObject(); // \TextMagic\Models\MarkChatsUnreadBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->markChatsUnreadBulk($markChatsUnreadBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->markChatsUnreadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsUnreadBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkInputObject**](../Model/MarkChatsUnreadBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeSurveyNodes**
> mergeSurveyNodes($mergeSurveyNodesInputObject, $xIgnoreNullValues)

Merge two question nodes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mergeSurveyNodesInputObject = new \TextMagic\Models\MergeSurveyNodesInputObject(); // \TextMagic\Models\MergeSurveyNodesInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->mergeSurveyNodes($mergeSurveyNodesInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->mergeSurveyNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mergeSurveyNodesInputObject** | [**\TextMagic\Models\MergeSurveyNodesInputObject**](../Model/MergeSurveyNodesInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChat**
> \TextMagic\Models\ResourceLinkResponse muteChat($muteChatInputObject, $xIgnoreNullValues)

Set mute mode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatInputObject = new \TextMagic\Models\MuteChatInputObject(); // \TextMagic\Models\MuteChatInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->muteChat($muteChatInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->muteChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatInputObject** | [**\TextMagic\Models\MuteChatInputObject**](../Model/MuteChatInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChatsBulk**
> muteChatsBulk($muteChatsBulkInputObject, $xIgnoreNullValues)

Mute several chats by chat ids or mute all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatsBulkInputObject = new \TextMagic\Models\MuteChatsBulkInputObject(); // \TextMagic\Models\MuteChatsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->muteChatsBulk($muteChatsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->muteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatsBulkInputObject** | [**\TextMagic\Models\MuteChatsBulkInputObject**](../Model/MuteChatsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ping**
> \TextMagic\Models\PingResponse ping()

Just does a pong.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\PingResponse**](../Model/PingResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reopenChatsBulk**
> reopenChatsBulk($reopenChatsBulkInputObject, $xIgnoreNullValues)

Reopen chats by chat ids or reopen all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reopenChatsBulkInputObject = new \TextMagic\Models\ReopenChatsBulkInputObject(); // \TextMagic\Models\ReopenChatsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->reopenChatsBulk($reopenChatsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reopenChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reopenChatsBulkInputObject** | [**\TextMagic\Models\ReopenChatsBulkInputObject**](../Model/ReopenChatsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewSubaccountToken**
> \TextMagic\Models\User requestNewSubaccountToken($requestNewSubaccountTokenInputObject, $xIgnoreNullValues)

Request a new REST API token for subaccount.

Returning user object, key and app name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestNewSubaccountTokenInputObject = new \TextMagic\Models\RequestNewSubaccountTokenInputObject(); // \TextMagic\Models\RequestNewSubaccountTokenInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->requestNewSubaccountToken($requestNewSubaccountTokenInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestNewSubaccountToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNewSubaccountTokenInputObject** | [**\TextMagic\Models\RequestNewSubaccountTokenInputObject**](../Model/RequestNewSubaccountTokenInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSenderId**
> \TextMagic\Models\ResourceLinkResponse requestSenderId($requestSenderIdInputObject, $xIgnoreNullValues)

Request for a new Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestSenderIdInputObject = new \TextMagic\Models\RequestSenderIdInputObject(); // \TextMagic\Models\RequestSenderIdInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->requestSenderId($requestSenderIdInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestSenderIdInputObject** | [**\TextMagic\Models\RequestSenderIdInputObject**](../Model/RequestSenderIdInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetSurvey**
> \TextMagic\Models\ResourceLinkResponse resetSurvey($id)

Reset a survey flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->resetSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resetSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChats**
> \TextMagic\Models\SearchChatsResponse searchChats($page, $limit, $query)

Find chats by inbound or outbound messages text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find chats by specified search query

try {
    $result = $apiInstance->searchChats($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find chats by specified search query | [optional]

### Return type

[**\TextMagic\Models\SearchChatsResponse**](../Model/SearchChatsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByIds**
> \TextMagic\Models\SearchChatsByIdsResponse searchChatsByIds($page, $limit, $ids)

Find chats by IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$ids = "ids_example"; // string | Find chats by ID(s)

try {
    $result = $apiInstance->searchChatsByIds($page, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchChatsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **ids** | **string**| Find chats by ID(s) | [optional]

### Return type

[**\TextMagic\Models\SearchChatsByIdsResponse**](../Model/SearchChatsByIdsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByReceipent**
> \TextMagic\Models\SearchChatsByReceipentResponse searchChatsByReceipent($page, $limit, $query, $orderBy)

Find chats by recipient (contact, list name or phone number).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find chats by specified search query
$orderBy = "id"; // string | Order results by some field. Default is id

try {
    $result = $apiInstance->searchChatsByReceipent($page, $limit, $query, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchChatsByReceipent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find chats by specified search query | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]

### Return type

[**\TextMagic\Models\SearchChatsByReceipentResponse**](../Model/SearchChatsByReceipentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContacts**
> \TextMagic\Models\SearchContactsResponse searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $country, $orderBy, $direction)

Find user contacts by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$shared = 0; // int | Should shared contacts to be included
$ids = "ids_example"; // string | Find contact by ID(s)
$listId = 56; // int | Find contact by List ID
$includeBlocked = 56; // int | Should blocked contacts to be included
$query = "query_example"; // string | Find contacts by specified search query
$local = 0; // int | Treat phone number passed in 'query' field as local. Default is 0
$country = "country_example"; // string | 2-letter ISO country code for local phone numbers, used when 'local' is set to true. Default is account country
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $country, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **shared** | **int**| Should shared contacts to be included | [optional] [default to 0]
 **ids** | **string**| Find contact by ID(s) | [optional]
 **listId** | **int**| Find contact by List ID | [optional]
 **includeBlocked** | **int**| Should blocked contacts to be included | [optional]
 **query** | **string**| Find contacts by specified search query | [optional]
 **local** | **int**| Treat phone number passed in &#39;query&#39; field as local. Default is 0 | [optional] [default to 0]
 **country** | **string**| 2-letter ISO country code for local phone numbers, used when &#39;local&#39; is set to true. Default is account country | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchContactsResponse**](../Model/SearchContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchInboundMessages**
> \TextMagic\Models\SearchInboundMessagesResponse searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand)

Find inbound messages by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$ids = "ids_example"; // string | Find message by ID(s)
$query = "query_example"; // string | Find recipients by specified search query
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc
$expand = 0; // int | Expand by adding firstName, lastName and contactId

try {
    $result = $apiInstance->searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchInboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **ids** | **string**| Find message by ID(s) | [optional]
 **query** | **string**| Find recipients by specified search query | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]
 **expand** | **int**| Expand by adding firstName, lastName and contactId | [optional] [default to 0]

### Return type

[**\TextMagic\Models\SearchInboundMessagesResponse**](../Model/SearchInboundMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLists**
> \TextMagic\Models\SearchListsResponse searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction)

Find contact lists by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$ids = "\"1,2,3,4\""; // string | Find lists by ID(s)
$query = "\"A\""; // string | Find lists by specified search query
$onlyMine = 0; // int | Return only current user lists
$onlyDefault = 0; // int | Return only default lists
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **ids** | **string**| Find lists by ID(s) | [optional]
 **query** | **string**| Find lists by specified search query | [optional]
 **onlyMine** | **int**| Return only current user lists | [optional] [default to 0]
 **onlyDefault** | **int**| Return only default lists | [optional] [default to 0]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchListsResponse**](../Model/SearchListsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOutboundMessages**
> \TextMagic\Models\SearchOutboundMessagesResponse searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query)

Find outbound messages by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID. Note that \\'page\\' parameter is ignored when \\'lastId\\' is specified
$ids = "ids_example"; // string | Find message by ID(s)
$sessionId = 56; // int | Find messages by session ID
$statuses = "\"q\""; // string | Find messages by status
$includeDeleted = 0; // int | Search also in deleted messages
$query = "query_example"; // string | Find messages by specified search query

try {
    $result = $apiInstance->searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified | [optional]
 **ids** | **string**| Find message by ID(s) | [optional]
 **sessionId** | **int**| Find messages by session ID | [optional]
 **statuses** | **string**| Find messages by status | [optional]
 **includeDeleted** | **int**| Search also in deleted messages | [optional] [default to 0]
 **query** | **string**| Find messages by specified search query | [optional]

### Return type

[**\TextMagic\Models\SearchOutboundMessagesResponse**](../Model/SearchOutboundMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchScheduledMessages**
> \TextMagic\Models\SearchScheduledMessagesResponse searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction)

Find scheduled messages by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find messages by specified search query
$ids = "ids_example"; // string | Find schedules by ID(s)
$status = "x"; // string | Fetch schedules with the specific status: a - actual, c - completed, x - all
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find messages by specified search query | [optional]
 **ids** | **string**| Find schedules by ID(s) | [optional]
 **status** | **string**| Fetch schedules with the specific status: a - actual, c - completed, x - all | [optional] [default to x]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchScheduledMessagesResponse**](../Model/SearchScheduledMessagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTemplates**
> \TextMagic\Models\SearchTemplatesResponse searchTemplates($page, $limit, $ids, $name, $content)

Find user templates by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$ids = "ids_example"; // string | Find template by ID(s)
$name = "name_example"; // string | Find template by name
$content = "content_example"; // string | Find template by content

try {
    $result = $apiInstance->searchTemplates($page, $limit, $ids, $name, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **ids** | **string**| Find template by ID(s) | [optional]
 **name** | **string**| Find template by name | [optional]
 **content** | **string**| Find template by content | [optional]

### Return type

[**\TextMagic\Models\SearchTemplatesResponse**](../Model/SearchTemplatesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailVerificationCode**
> sendEmailVerificationCode()

Send user email verification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sendEmailVerificationCode();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendEmailVerificationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \TextMagic\Models\SendMessageResponse sendMessage($sendMessageInputObject, $xIgnoreNullValues)

Send a new outbound message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendMessageInputObject = new \TextMagic\Models\SendMessageInputObject(); // \TextMagic\Models\SendMessageInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->sendMessage($sendMessageInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendMessageInputObject** | [**\TextMagic\Models\SendMessageInputObject**](../Model/SendMessageInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPhoneVerificationCode**
> sendPhoneVerificationCode()

Send user phone verification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sendPhoneVerificationCode();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChatStatus**
> \TextMagic\Models\ResourceLinkResponse setChatStatus($setChatStatusInputObject, $xIgnoreNullValues)

Set status of the chat given by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setChatStatusInputObject = new \TextMagic\Models\SetChatStatusInputObject(); // \TextMagic\Models\SetChatStatusInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->setChatStatus($setChatStatusInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setChatStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setChatStatusInputObject** | [**\TextMagic\Models\SetChatStatusInputObject**](../Model/SetChatStatusInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSurvey**
> \TextMagic\Models\ResourceLinkResponse startSurvey($id)

Start a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->startSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->startSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContact**
> unblockContact($unblockContactInputObject, $xIgnoreNullValues)

Unblock contact by phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unblockContactInputObject = new \TextMagic\Models\UnblockContactInputObject(); // \TextMagic\Models\UnblockContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->unblockContact($unblockContactInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unblockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactInputObject** | [**\TextMagic\Models\UnblockContactInputObject**](../Model/UnblockContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContactsBulk**
> unblockContactsBulk($unblockContactsBulkInputObject, $xIgnoreNullValues)

Unblock several contacts by blocked contact ids or unblock all contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unblockContactsBulkInputObject = new \TextMagic\Models\UnblockContactsBulkInputObject(); // \TextMagic\Models\UnblockContactsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->unblockContactsBulk($unblockContactsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unblockContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactsBulkInputObject** | [**\TextMagic\Models\UnblockContactsBulkInputObject**](../Model/UnblockContactsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmuteChatsBulk**
> unmuteChatsBulk($unmuteChatsBulkInputObject, $xIgnoreNullValues)

Unmute several chats by chat ids or unmute all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unmuteChatsBulkInputObject = new \TextMagic\Models\UnmuteChatsBulkInputObject(); // \TextMagic\Models\UnmuteChatsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->unmuteChatsBulk($unmuteChatsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unmuteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unmuteChatsBulkInputObject** | [**\TextMagic\Models\UnmuteChatsBulkInputObject**](../Model/UnmuteChatsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeContact**
> \TextMagic\Models\ResourceLinkResponse unsubscribeContact($unsubscribeContactInputObject, $xIgnoreNullValues)

Unsubscribe contact from your communication by phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unsubscribeContactInputObject = new \TextMagic\Models\UnsubscribeContactInputObject(); // \TextMagic\Models\UnsubscribeContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->unsubscribeContact($unsubscribeContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsubscribeContactInputObject** | [**\TextMagic\Models\UnsubscribeContactInputObject**](../Model/UnsubscribeContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBalanceNotificationSettings**
> updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject, $xIgnoreNullValues)

Update balance notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateBalanceNotificationSettingsInputObject = new \TextMagic\Models\UpdateBalanceNotificationSettingsInputObject(); // \TextMagic\Models\UpdateBalanceNotificationSettingsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateBalanceNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateBalanceNotificationSettingsInputObject**](../Model/UpdateBalanceNotificationSettingsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCallbackSettings**
> updateCallbackSettings($updateCallbackSettingsInputObject, $xIgnoreNullValues)

Update callback URL settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCallbackSettingsInputObject = new \TextMagic\Models\UpdateCallbackSettingsInputObject(); // \TextMagic\Models\UpdateCallbackSettingsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updateCallbackSettings($updateCallbackSettingsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCallbackSettingsInputObject** | [**\TextMagic\Models\UpdateCallbackSettingsInputObject**](../Model/UpdateCallbackSettingsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChatDesktopNotificationSettings**
> updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject, $xIgnoreNullValues)

Update chat desktop notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateChatDesktopNotificationSettingsInputObject = new \TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject(); // \TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateChatDesktopNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateChatDesktopNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject**](../Model/UpdateChatDesktopNotificationSettingsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \TextMagic\Models\ResourceLinkResponse updateContact($updateContactInputObject, $id, $xIgnoreNullValues)

Update existing contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateContactInputObject = new \TextMagic\Models\UpdateContactInputObject(); // \TextMagic\Models\UpdateContactInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateContact($updateContactInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactInputObject** | [**\TextMagic\Models\UpdateContactInputObject**](../Model/UpdateContactInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactNote**
> \TextMagic\Models\ResourceLinkResponse updateContactNote($updateContactNoteInputObject, $id, $xIgnoreNullValues)

Update existing contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateContactNoteInputObject = new \TextMagic\Models\UpdateContactNoteInputObject(); // \TextMagic\Models\UpdateContactNoteInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateContactNote($updateContactNoteInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactNoteInputObject** | [**\TextMagic\Models\UpdateContactNoteInputObject**](../Model/UpdateContactNoteInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrentUser**
> \TextMagic\Models\UpdateCurrentUserResponse updateCurrentUser($updateCurrentUserInputObject, $xIgnoreNullValues)

Update current user info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCurrentUserInputObject = new \TextMagic\Models\UpdateCurrentUserInputObject(); // \TextMagic\Models\UpdateCurrentUserInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateCurrentUser($updateCurrentUserInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCurrentUserInputObject** | [**\TextMagic\Models\UpdateCurrentUserInputObject**](../Model/UpdateCurrentUserInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \TextMagic\Models\ResourceLinkResponse updateCustomField($updateCustomFieldInputObject, $id, $xIgnoreNullValues)

Update existing custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCustomFieldInputObject = new \TextMagic\Models\UpdateCustomFieldInputObject(); // \TextMagic\Models\UpdateCustomFieldInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateCustomField($updateCustomFieldInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCustomFieldInputObject** | [**\TextMagic\Models\UpdateCustomFieldInputObject**](../Model/UpdateCustomFieldInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldValue**
> \TextMagic\Models\ResourceLinkResponse updateCustomFieldValue($updateCustomFieldValueInputObject, $id, $xIgnoreNullValues)

Update contact's custom field value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCustomFieldValueInputObject = new \TextMagic\Models\UpdateCustomFieldValueInputObject(); // \TextMagic\Models\UpdateCustomFieldValueInputObject | 
$id = "id_example"; // string | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateCustomFieldValue($updateCustomFieldValueInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCustomFieldValueInputObject** | [**\TextMagic\Models\UpdateCustomFieldValueInputObject**](../Model/UpdateCustomFieldValueInputObject.md)|  |
 **id** | **string**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInboundMessagesNotificationSettings**
> updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject, $xIgnoreNullValues)

Update inbound messages notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateInboundMessagesNotificationSettingsInputObject = new \TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject(); // \TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateInboundMessagesNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject**](../Model/UpdateInboundMessagesNotificationSettingsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateList**
> \TextMagic\Models\ResourceLinkResponse updateList($id, $updateListObject)

Update existing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$updateListObject = new \TextMagic\Models\UpdateListObject(); // \TextMagic\Models\UpdateListObject | 

try {
    $result = $apiInstance->updateList($id, $updateListObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **updateListObject** | [**\TextMagic\Models\UpdateListObject**](../Model/UpdateListObject.md)|  | [optional]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePassword**
> updatePassword($updatePasswordInputObject, $xIgnoreNullValues)

Change user password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatePasswordInputObject = new \TextMagic\Models\UpdatePasswordInputObject(); // \TextMagic\Models\UpdatePasswordInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updatePassword($updatePasswordInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updatePasswordInputObject** | [**\TextMagic\Models\UpdatePasswordInputObject**](../Model/UpdatePasswordInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSenderSetting**
> updateSenderSetting($updateSenderSettingInputObject, $xIgnoreNullValues)

Change sender settings for specified country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSenderSettingInputObject = new \TextMagic\Models\UpdateSenderSettingInputObject(); // \TextMagic\Models\UpdateSenderSettingInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->updateSenderSetting($updateSenderSettingInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateSenderSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSenderSettingInputObject** | [**\TextMagic\Models\UpdateSenderSettingInputObject**](../Model/UpdateSenderSettingInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSurvey**
> \TextMagic\Models\ResourceLinkResponse updateSurvey($updateSurveyInputObject, $id, $xIgnoreNullValues)

Update existing survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSurveyInputObject = new \TextMagic\Models\UpdateSurveyInputObject(); // \TextMagic\Models\UpdateSurveyInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateSurvey($updateSurveyInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSurveyInputObject** | [**\TextMagic\Models\UpdateSurveyInputObject**](../Model/UpdateSurveyInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSurveyNode**
> \TextMagic\Models\ResourceLinkResponse updateSurveyNode($updateSurveyNodeInputObject, $id, $xIgnoreNullValues)

Update existing node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSurveyNodeInputObject = new \TextMagic\Models\UpdateSurveyNodeInputObject(); // \TextMagic\Models\UpdateSurveyNodeInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateSurveyNode($updateSurveyNodeInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSurveyNodeInputObject** | [**\TextMagic\Models\UpdateSurveyNodeInputObject**](../Model/UpdateSurveyNodeInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \TextMagic\Models\ResourceLinkResponse updateTemplate($updateTemplateInputObject, $id, $xIgnoreNullValues)

Update existing template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateTemplateInputObject = new \TextMagic\Models\UpdateTemplateInputObject(); // \TextMagic\Models\UpdateTemplateInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateTemplate($updateTemplateInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateTemplateInputObject** | [**\TextMagic\Models\UpdateTemplateInputObject**](../Model/UpdateTemplateInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAvatar**
> uploadAvatar($image)

Add an avatar for the current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | User avatar. Should be PNG or JPG file not more than 10 MB

try {
    $apiInstance->uploadAvatar($image);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| User avatar. Should be PNG or JPG file not more than 10 MB |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadContactAvatar**
> \TextMagic\Models\ResourceLinkResponse uploadContactAvatar($image, $id)

Add an avatar for the contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | Contact avatar. Should be PNG or JPG file not more than 10 MB
$id = 56; // int | 

try {
    $result = $apiInstance->uploadContactAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadContactAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| Contact avatar. Should be PNG or JPG file not more than 10 MB |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadListAvatar**
> \TextMagic\Models\ResourceLinkResponse uploadListAvatar($image, $id)

Add an avatar for the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | List avatar. Should be PNG or JPG file not more than 10 MB
$id = 1; // int | 

try {
    $result = $apiInstance->uploadListAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| List avatar. Should be PNG or JPG file not more than 10 MB |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMessageAttachment**
> \TextMagic\Models\UploadMessageAttachmentResponse uploadMessageAttachment($file)

Upload a new file to insert it as a link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats

try {
    $result = $apiInstance->uploadMessageAttachment($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadMessageAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats |

### Return type

[**\TextMagic\Models\UploadMessageAttachmentResponse**](../Model/UploadMessageAttachmentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

