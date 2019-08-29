# 
TextMagic REST API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/imissyouso/textmagic-rest-php.git"
    }
  ],
  "require": {
    "imissyouso/textmagic-rest-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new TextMagic\Api\AuthenticationApi(
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
    echo 'Exception when calling AuthenticationApi->checkPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://my.textmagic.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**checkPhoneVerificationCode**](docs/Api/AuthenticationApi.md#checkphoneverificationcode) | **PUT** /api/v2/user/phone/verification | Check user phone verification code
*AuthenticationApi* | [**doAuth**](docs/Api/AuthenticationApi.md#doauth) | **POST** /api/v2/auth | Authenticate user by given username and password.
*AuthenticationApi* | [**sendEmailVerificationCode**](docs/Api/AuthenticationApi.md#sendemailverificationcode) | **GET** /api/v2/user/email/verification | Send user email verification
*AuthenticationApi* | [**sendPhoneVerificationCode**](docs/Api/AuthenticationApi.md#sendphoneverificationcode) | **GET** /api/v2/user/phone/verification | Send user phone verification
*AuthenticationApi* | [**updatePassword**](docs/Api/AuthenticationApi.md#updatepassword) | **PUT** /api/v2/user/password/change | Change user password.
*BillingApi* | [**getInvoices**](docs/Api/BillingApi.md#getinvoices) | **GET** /api/v2/invoices | Return account invoices.
*BillingApi* | [**getSpendingStat**](docs/Api/BillingApi.md#getspendingstat) | **GET** /api/v2/stats/spending | Return account spending statistics.
*BulkMessageSessionsApi* | [**getAllBulkSessions**](docs/Api/BulkMessageSessionsApi.md#getallbulksessions) | **GET** /api/v2/bulks | Get all bulk sending sessions.
*BulkMessageSessionsApi* | [**getBulkSession**](docs/Api/BulkMessageSessionsApi.md#getbulksession) | **GET** /api/v2/bulks/{id} | Get bulk message session status.
*CallsApi* | [**getCallsPrices**](docs/Api/CallsApi.md#getcallsprices) | **GET** /api/v2/calls/price | Check pricing for a inbound/outbound call.
*CallsApi* | [**getForwardedCalls**](docs/Api/CallsApi.md#getforwardedcalls) | **GET** /api/v2/calls | Get all forwarded calls.
*ChatsApi* | [**closeChatsBulk**](docs/Api/ChatsApi.md#closechatsbulk) | **POST** /api/v2/chats/close/bulk | Close chats by chat ids or close all chats
*ChatsApi* | [**closeReadChats**](docs/Api/ChatsApi.md#closereadchats) | **POST** /api/v2/chats/close/read | Close all chats that have no unread messages.
*ChatsApi* | [**deleteChatMessages**](docs/Api/ChatsApi.md#deletechatmessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete messages from chat by given messages ID(s).
*ChatsApi* | [**deleteChatsBulk**](docs/Api/ChatsApi.md#deletechatsbulk) | **POST** /api/v2/chats/delete | Delete chats by given ID(s) or delete all chats.
*ChatsApi* | [**getAllChats**](docs/Api/ChatsApi.md#getallchats) | **GET** /api/v2/chats | Get all user chats.
*ChatsApi* | [**getChat**](docs/Api/ChatsApi.md#getchat) | **GET** /api/v2/chats/{id} | Get a single chat.
*ChatsApi* | [**getChatByPhone**](docs/Api/ChatsApi.md#getchatbyphone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone.
*ChatsApi* | [**getChatMessages**](docs/Api/ChatsApi.md#getchatmessages) | **GET** /api/v2/chats/{id}/message | Fetch messages from chat with specified chat id.
*ChatsApi* | [**getUnreadMessagesTotal**](docs/Api/ChatsApi.md#getunreadmessagestotal) | **GET** /api/v2/chats/unread/count | Get total amount of unread messages in the current user chats.
*ChatsApi* | [**markChatsReadBulk**](docs/Api/ChatsApi.md#markchatsreadbulk) | **POST** /api/v2/chats/read/bulk | Mark several chats as read by chat ids or mark all chats as read
*ChatsApi* | [**markChatsUnreadBulk**](docs/Api/ChatsApi.md#markchatsunreadbulk) | **POST** /api/v2/chats/unread/bulk | Mark several chats as UNread by chat ids or mark all chats as UNread
*ChatsApi* | [**muteChat**](docs/Api/ChatsApi.md#mutechat) | **POST** /api/v2/chats/mute | Set mute mode.
*ChatsApi* | [**muteChatsBulk**](docs/Api/ChatsApi.md#mutechatsbulk) | **POST** /api/v2/chats/mute/bulk | Mute several chats by chat ids or mute all chats
*ChatsApi* | [**reopenChatsBulk**](docs/Api/ChatsApi.md#reopenchatsbulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats by chat ids or reopen all chats
*ChatsApi* | [**searchChats**](docs/Api/ChatsApi.md#searchchats) | **GET** /api/v2/chats/search | Find chats by inbound or outbound messages text.
*ChatsApi* | [**searchChatsByIds**](docs/Api/ChatsApi.md#searchchatsbyids) | **GET** /api/v2/chats/search/ids | Find chats by IDs.
*ChatsApi* | [**searchChatsByReceipent**](docs/Api/ChatsApi.md#searchchatsbyreceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient (contact, list name or phone number).
*ChatsApi* | [**setChatStatus**](docs/Api/ChatsApi.md#setchatstatus) | **POST** /api/v2/chats/status | Set status of the chat given by ID.
*ChatsApi* | [**unmuteChatsBulk**](docs/Api/ChatsApi.md#unmutechatsbulk) | **POST** /api/v2/chats/unmute/bulk | Unmute several chats by chat ids or unmute all chats
*CommonApi* | [**getCountries**](docs/Api/CommonApi.md#getcountries) | **GET** /api/v2/countries | Return list of countries.
*CommonApi* | [**getState**](docs/Api/CommonApi.md#getstate) | **GET** /api/v2/state | Get current entities state
*CommonApi* | [**getTimezones**](docs/Api/CommonApi.md#gettimezones) | **GET** /api/v2/timezones | Return all available timezone IDs.
*CommonApi* | [**getVersions**](docs/Api/CommonApi.md#getversions) | **GET** /api/v2/versions | Get minimal valid apps versions
*CommonApi* | [**ping**](docs/Api/CommonApi.md#ping) | **GET** /api/v2/ping | Just does a pong.
*ContactListsApi* | [**assignContactsToList**](docs/Api/ContactListsApi.md#assigncontactstolist) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to the specified list.
*ContactListsApi* | [**clearAndAssignContactsToList**](docs/Api/ContactListsApi.md#clearandassigncontactstolist) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts.
*ContactListsApi* | [**createList**](docs/Api/ContactListsApi.md#createlist) | **POST** /api/v2/lists | Create a new list from the submitted data.
*ContactListsApi* | [**deleteContactsFromList**](docs/Api/ContactListsApi.md#deletecontactsfromlist) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from the specified list.
*ContactListsApi* | [**deleteList**](docs/Api/ContactListsApi.md#deletelist) | **DELETE** /api/v2/lists/{id} | Delete a single list.
*ContactListsApi* | [**deleteListAvatar**](docs/Api/ContactListsApi.md#deletelistavatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for the list.
*ContactListsApi* | [**deleteListContactsBulk**](docs/Api/ContactListsApi.md#deletelistcontactsbulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contact from list by given ID(s) or all contacts from list.
*ContactListsApi* | [**deleteListsBulk**](docs/Api/ContactListsApi.md#deletelistsbulk) | **POST** /api/v2/lists/delete | Delete list by given ID(s) or delete all lists.
*ContactListsApi* | [**getContactsByListId**](docs/Api/ContactListsApi.md#getcontactsbylistid) | **GET** /api/v2/lists/{id}/contacts | Fetch user contacts by given group id.
*ContactListsApi* | [**getList**](docs/Api/ContactListsApi.md#getlist) | **GET** /api/v2/lists/{id} | Get a single list.
*ContactListsApi* | [**getListContactsIds**](docs/Api/ContactListsApi.md#getlistcontactsids) | **GET** /api/v2/lists/{id}/contacts/ids | Fetch all contacts IDs belonging to the list with ID.
*ContactListsApi* | [**getListsOfContact**](docs/Api/ContactListsApi.md#getlistsofcontact) | **GET** /api/v2/contacts/{id}/lists | Return lists which contact belongs to.
*ContactListsApi* | [**getUserLists**](docs/Api/ContactListsApi.md#getuserlists) | **GET** /api/v2/lists | Get all user lists.
*ContactListsApi* | [**searchLists**](docs/Api/ContactListsApi.md#searchlists) | **GET** /api/v2/lists/search | Find contact lists by given parameters.
*ContactListsApi* | [**updateList**](docs/Api/ContactListsApi.md#updatelist) | **PUT** /api/v2/lists/{id} | Update existing list.
*ContactListsApi* | [**uploadListAvatar**](docs/Api/ContactListsApi.md#uploadlistavatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for the list.
*ContactNotesApi* | [**createContactNote**](docs/Api/ContactNotesApi.md#createcontactnote) | **POST** /api/v2/contacts/{id}/notes | Create a new contact note.
*ContactNotesApi* | [**deleteContactNote**](docs/Api/ContactNotesApi.md#deletecontactnote) | **DELETE** /api/v2/notes/{id} | Delete a single contact note.
*ContactNotesApi* | [**deleteContactNotesBulk**](docs/Api/ContactNotesApi.md#deletecontactnotesbulk) | **POST** /api/v2/contacts/{id}/notes/delete | Delete contact note by given ID(s) or delete all contact notes.
*ContactNotesApi* | [**getContactNote**](docs/Api/ContactNotesApi.md#getcontactnote) | **GET** /api/v2/notes/{id} | Get a single contact note.
*ContactNotesApi* | [**getContactNotes**](docs/Api/ContactNotesApi.md#getcontactnotes) | **GET** /api/v2/contacts/{id}/notes | Fetch notes assigned to the given contact.
*ContactNotesApi* | [**updateContactNote**](docs/Api/ContactNotesApi.md#updatecontactnote) | **PUT** /api/v2/notes/{id} | Update existing contact note.
*ContactsApi* | [**blockContact**](docs/Api/ContactsApi.md#blockcontact) | **POST** /api/v2/contacts/block | Block contact from inbound and outbound communication by phone number.
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /api/v2/contacts | Create a new contact from the submitted data.
*ContactsApi* | [**deleteAllContacts**](docs/Api/ContactsApi.md#deleteallcontacts) | **DELETE** /api/v2/contact/all | Delete all contacts.
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /api/v2/contacts/{id} | Delete a single contact.
*ContactsApi* | [**deleteContactAvatar**](docs/Api/ContactsApi.md#deletecontactavatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar for the contact.
*ContactsApi* | [**deleteContactsByIds**](docs/Api/ContactsApi.md#deletecontactsbyids) | **POST** /api/v2/contacts/delete | Delete contact by given ID(s) or delete all contacts.
*ContactsApi* | [**getBlockedContacts**](docs/Api/ContactsApi.md#getblockedcontacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts.
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /api/v2/contacts/{id} | Get a single contact.
*ContactsApi* | [**getContactByPhone**](docs/Api/ContactsApi.md#getcontactbyphone) | **GET** /api/v2/contacts/phone/{phone} | Get a single contact by phone number.
*ContactsApi* | [**getContactIfBlocked**](docs/Api/ContactsApi.md#getcontactifblocked) | **GET** /api/v2/contacts/block/phone | Check is that phone number blocked
*ContactsApi* | [**getContactsAutocomplete**](docs/Api/ContactsApi.md#getcontactsautocomplete) | **GET** /api/v2/contacts/autocomplete | Get contacts autocomplete suggestions by given search term.
*ContactsApi* | [**getFavourites**](docs/Api/ContactsApi.md#getfavourites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists.
*ContactsApi* | [**getUnsubscribedContact**](docs/Api/ContactsApi.md#getunsubscribedcontact) | **GET** /api/v2/unsubscribers/{id} | Get a single unsubscribed contact.
*ContactsApi* | [**getUnsubscribers**](docs/Api/ContactsApi.md#getunsubscribers) | **GET** /api/v2/unsubscribers | Get all contact have unsubscribed from your communication.
*ContactsApi* | [**getUserContacts**](docs/Api/ContactsApi.md#getusercontacts) | **GET** /api/v2/contacts | Get all user contacts.
*ContactsApi* | [**searchContacts**](docs/Api/ContactsApi.md#searchcontacts) | **GET** /api/v2/contacts/search | Find user contacts by given parameters.
*ContactsApi* | [**unblockContact**](docs/Api/ContactsApi.md#unblockcontact) | **POST** /api/v2/contacts/unblock | Unblock contact by phone number.
*ContactsApi* | [**unblockContactsBulk**](docs/Api/ContactsApi.md#unblockcontactsbulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock several contacts by blocked contact ids or unblock all contacts
*ContactsApi* | [**unsubscribeContact**](docs/Api/ContactsApi.md#unsubscribecontact) | **POST** /api/v2/unsubscribers | Unsubscribe contact from your communication by phone number.
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /api/v2/contacts/{id} | Update existing contact.
*ContactsApi* | [**uploadContactAvatar**](docs/Api/ContactsApi.md#uploadcontactavatar) | **POST** /api/v2/contacts/{id}/avatar | Add an avatar for the contact.
*ContactsImportApi* | [**getContactImportSessionProgress**](docs/Api/ContactsImportApi.md#getcontactimportsessionprogress) | **GET** /api/v2/contacts/import/progress/{id} | Get contact import session progress.
*CustomFieldsApi* | [**createCustomField**](docs/Api/CustomFieldsApi.md#createcustomfield) | **POST** /api/v2/customfields | Create a new custom field from the submitted data.
*CustomFieldsApi* | [**deleteCustomField**](docs/Api/CustomFieldsApi.md#deletecustomfield) | **DELETE** /api/v2/customfields/{id} | Delete a single custom field.
*CustomFieldsApi* | [**getCustomField**](docs/Api/CustomFieldsApi.md#getcustomfield) | **GET** /api/v2/customfields/{id} | Get a single custom field.
*CustomFieldsApi* | [**getCustomFields**](docs/Api/CustomFieldsApi.md#getcustomfields) | **GET** /api/v2/customfields | Get all contact custom fields.
*CustomFieldsApi* | [**updateCustomField**](docs/Api/CustomFieldsApi.md#updatecustomfield) | **PUT** /api/v2/customfields/{id} | Update existing custom field.
*CustomFieldsApi* | [**updateCustomFieldValue**](docs/Api/CustomFieldsApi.md#updatecustomfieldvalue) | **PUT** /api/v2/customfields/{id}/update | Update contact&#39;s custom field value.
*InboundMessagesApi* | [**deleteInboundMessage**](docs/Api/InboundMessagesApi.md#deleteinboundmessage) | **DELETE** /api/v2/replies/{id} | Delete the incoming message.
*InboundMessagesApi* | [**deleteInboundMessagesBulk**](docs/Api/InboundMessagesApi.md#deleteinboundmessagesbulk) | **POST** /api/v2/replies/delete | Delete inbound messages by given ID(s) or delete all inbound messages.
*InboundMessagesApi* | [**getAllInboundMessages**](docs/Api/InboundMessagesApi.md#getallinboundmessages) | **GET** /api/v2/replies | Get all inbox messages.
*InboundMessagesApi* | [**getInboundMessage**](docs/Api/InboundMessagesApi.md#getinboundmessage) | **GET** /api/v2/replies/{id} | Get a single inbox message.
*InboundMessagesApi* | [**searchInboundMessages**](docs/Api/InboundMessagesApi.md#searchinboundmessages) | **GET** /api/v2/replies/search | Find inbound messages by given parameters.
*IntegrationApi* | [**createPushToken**](docs/Api/IntegrationApi.md#createpushtoken) | **POST** /api/v2/push/tokens | Add or update a device token.
*IntegrationApi* | [**deletePushToken**](docs/Api/IntegrationApi.md#deletepushtoken) | **DELETE** /api/v2/push/tokens/{type}/{deviceId} | Delete a push notification device token.
*IntegrationApi* | [**getPushTokens**](docs/Api/IntegrationApi.md#getpushtokens) | **GET** /api/v2/push/tokens | Get all device tokens assigned to the current account
*NumbersApi* | [**buyDedicatedNumber**](docs/Api/NumbersApi.md#buydedicatednumber) | **POST** /api/v2/numbers | Buy a dedicated number and assign it to the specified account.
*NumbersApi* | [**deleteDedicatedNumber**](docs/Api/NumbersApi.md#deletededicatednumber) | **DELETE** /api/v2/numbers/{id} | Cancel dedicated number subscription.
*NumbersApi* | [**deleteSenderId**](docs/Api/NumbersApi.md#deletesenderid) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID.
*NumbersApi* | [**getAvailableDedicatedNumbers**](docs/Api/NumbersApi.md#getavailablededicatednumbers) | **GET** /api/v2/numbers/available | Find available dedicated numbers to buy.
*NumbersApi* | [**getDedicatedNumber**](docs/Api/NumbersApi.md#getdedicatednumber) | **GET** /api/v2/numbers/{id} | Get a single dedicated number.
*NumbersApi* | [**getSenderId**](docs/Api/NumbersApi.md#getsenderid) | **GET** /api/v2/senderids/{id} | Get a single Sender ID.
*NumbersApi* | [**getSenderIds**](docs/Api/NumbersApi.md#getsenderids) | **GET** /api/v2/senderids | Get all sender IDs of current user.
*NumbersApi* | [**getSenderSettings**](docs/Api/NumbersApi.md#getsendersettings) | **GET** /api/v2/sender/settings | Get current user sender settings.
*NumbersApi* | [**getUserDedicatedNumbers**](docs/Api/NumbersApi.md#getuserdedicatednumbers) | **GET** /api/v2/numbers | Get user&#39;s dedicated numbers.
*NumbersApi* | [**requestSenderId**](docs/Api/NumbersApi.md#requestsenderid) | **POST** /api/v2/senderids | Request for a new Sender ID.
*NumbersApi* | [**updateSenderSetting**](docs/Api/NumbersApi.md#updatesendersetting) | **PUT** /api/v2/sender/settings | Change sender settings for specified country.
*OutboundMessageSessionsApi* | [**deleteMessageSession**](docs/Api/OutboundMessageSessionsApi.md#deletemessagesession) | **DELETE** /api/v2/sessions/{id} | Delete a message session, together with all nested messages.
*OutboundMessageSessionsApi* | [**deleteMessageSessionsBulk**](docs/Api/OutboundMessageSessionsApi.md#deletemessagesessionsbulk) | **POST** /api/v2/sessions/delete | Delete messages sessions, together with all nested messages, by given ID(s) or delete all messages sessions.
*OutboundMessageSessionsApi* | [**getAllMessageSessions**](docs/Api/OutboundMessageSessionsApi.md#getallmessagesessions) | **GET** /api/v2/sessions | Get all message sending sessions.
*OutboundMessageSessionsApi* | [**getMessageSession**](docs/Api/OutboundMessageSessionsApi.md#getmessagesession) | **GET** /api/v2/sessions/{id} | Get a message session.
*OutboundMessageSessionsApi* | [**getMessageSessionStat**](docs/Api/OutboundMessageSessionsApi.md#getmessagesessionstat) | **GET** /api/v2/sessions/{id}/stat | Get sending session statistics.
*OutboundMessageSessionsApi* | [**getMessagesBySessionId**](docs/Api/OutboundMessageSessionsApi.md#getmessagesbysessionid) | **GET** /api/v2/sessions/{id}/messages | Fetch messages by given session id.
*OutboundMessagesApi* | [**deleteAllOutboundMessages**](docs/Api/OutboundMessagesApi.md#deletealloutboundmessages) | **DELETE** /api/v2/message/all | Delete all messages.
*OutboundMessagesApi* | [**deleteOutboundMessage**](docs/Api/OutboundMessagesApi.md#deleteoutboundmessage) | **DELETE** /api/v2/messages/{id} | Delete a single message.
*OutboundMessagesApi* | [**deleteOutboundMessagesBulk**](docs/Api/OutboundMessagesApi.md#deleteoutboundmessagesbulk) | **POST** /api/v2/messages/delete | Delete outbound messages by given ID(s) or delete all outbound messages.
*OutboundMessagesApi* | [**getAllOutboundMessages**](docs/Api/OutboundMessagesApi.md#getalloutboundmessages) | **GET** /api/v2/messages | Get all user oubound messages.
*OutboundMessagesApi* | [**getMessagePreview**](docs/Api/OutboundMessagesApi.md#getmessagepreview) | **GET** /api/v2/messages/preview | Get messages preview (with tags merged) up to 100 messages per session.
*OutboundMessagesApi* | [**getMessagePrice**](docs/Api/OutboundMessagesApi.md#getmessageprice) | **GET** /api/v2/messages/price | Check pricing for a new outbound message.
*OutboundMessagesApi* | [**getMessagePrices**](docs/Api/OutboundMessagesApi.md#getmessageprices) | **GET** /api/v2/messages/prices | Get message prices for all countries.
*OutboundMessagesApi* | [**getOutboundMessage**](docs/Api/OutboundMessagesApi.md#getoutboundmessage) | **GET** /api/v2/messages/{id} | Get a single outgoing message.
*OutboundMessagesApi* | [**getOutboundMessagesHistory**](docs/Api/OutboundMessagesApi.md#getoutboundmessageshistory) | **GET** /api/v2/history | Get outbound messages history.
*OutboundMessagesApi* | [**searchOutboundMessages**](docs/Api/OutboundMessagesApi.md#searchoutboundmessages) | **GET** /api/v2/messages/search | Find outbound messages by given parameters.
*OutboundMessagesApi* | [**sendMessage**](docs/Api/OutboundMessagesApi.md#sendmessage) | **POST** /api/v2/messages | Send a new outbound message.
*OutboundMessagesApi* | [**uploadMessageAttachement**](docs/Api/OutboundMessagesApi.md#uploadmessageattachement) | **POST** /api/v2/messages/attachment | Upload a new file to insert it as a link.
*ScheduledMessagesApi* | [**deleteScheduledMessage**](docs/Api/ScheduledMessagesApi.md#deletescheduledmessage) | **DELETE** /api/v2/schedules/{id} | Delete a message session, together with all nested messages.
*ScheduledMessagesApi* | [**deleteScheduledMessagesBulk**](docs/Api/ScheduledMessagesApi.md#deletescheduledmessagesbulk) | **POST** /api/v2/schedules/delete | Delete scheduled messages by given ID(s) or delete all scheduled messages.
*ScheduledMessagesApi* | [**getAllScheduledMessages**](docs/Api/ScheduledMessagesApi.md#getallscheduledmessages) | **GET** /api/v2/schedules | Get all scheduled messages.
*ScheduledMessagesApi* | [**getScheduledMessage**](docs/Api/ScheduledMessagesApi.md#getscheduledmessage) | **GET** /api/v2/schedules/{id} | Get message schedule.
*ScheduledMessagesApi* | [**searchScheduledMessages**](docs/Api/ScheduledMessagesApi.md#searchscheduledmessages) | **GET** /api/v2/schedules/search | Find scheduled messages by given parameters.
*StatisticApi* | [**getMessagingCounters**](docs/Api/StatisticApi.md#getmessagingcounters) | **GET** /api/v2/stats/messaging/data | Return counters for messaging data views.
*StatisticApi* | [**getMessagingStat**](docs/Api/StatisticApi.md#getmessagingstat) | **GET** /api/v2/stats/messaging | Return messaging statistics.
*SurveysApi* | [**apiV2SurveysGet**](docs/Api/SurveysApi.md#apiv2surveysget) | **GET** /api/v2/surveys | Get all user surveys.
*SurveysApi* | [**cancelSurvey**](docs/Api/SurveysApi.md#cancelsurvey) | **PUT** /api/v2/surveys/{id}/cancel | Cancel a survey.
*SurveysApi* | [**createSurvey**](docs/Api/SurveysApi.md#createsurvey) | **POST** /api/v2/surveys | Create a new survey from the submitted data.
*SurveysApi* | [**createSurveyNode**](docs/Api/SurveysApi.md#createsurveynode) | **POST** /api/v2/surveys/{id}/nodes | Create a new node from the submitted data.
*SurveysApi* | [**deleteSurvey**](docs/Api/SurveysApi.md#deletesurvey) | **DELETE** /api/v2/surveys/{id} | Delete a survey.
*SurveysApi* | [**deleteSurveyNode**](docs/Api/SurveysApi.md#deletesurveynode) | **DELETE** /api/v2/surveys/nodes/{id} | Delete a node.
*SurveysApi* | [**duplicateSurvey**](docs/Api/SurveysApi.md#duplicatesurvey) | **PUT** /api/v2/surveys/{id}/duplicate | Duplicate a survey.
*SurveysApi* | [**getSurvey**](docs/Api/SurveysApi.md#getsurvey) | **GET** /api/v2/surveys/{id} | Get a survey by id.
*SurveysApi* | [**getSurveyNode**](docs/Api/SurveysApi.md#getsurveynode) | **GET** /api/v2/surveys/nodes/{id} | Get a node by id.
*SurveysApi* | [**getSurveyNodes**](docs/Api/SurveysApi.md#getsurveynodes) | **GET** /api/v2/surveys/{id}/nodes | Fetch nodes by given survey id.
*SurveysApi* | [**mergeSurveyNodes**](docs/Api/SurveysApi.md#mergesurveynodes) | **POST** /api/v2/surveys/nodes/merge | Merge two question nodes.
*SurveysApi* | [**resetSurvey**](docs/Api/SurveysApi.md#resetsurvey) | **PUT** /api/v2/surveys/{id}/reset | Reset a survey flow.
*SurveysApi* | [**startSurvey**](docs/Api/SurveysApi.md#startsurvey) | **PUT** /api/v2/surveys/{id}/start | Start a survey.
*SurveysApi* | [**updateSurvey**](docs/Api/SurveysApi.md#updatesurvey) | **PUT** /api/v2/surveys/{id} | Update existing survey.
*SurveysApi* | [**updateSurveyNode**](docs/Api/SurveysApi.md#updatesurveynode) | **PUT** /api/v2/surveys/nodes/{id} | Update existing node.
*TemplatesApi* | [**createTemplate**](docs/Api/TemplatesApi.md#createtemplate) | **POST** /api/v2/templates | Create a new template from the submitted data.
*TemplatesApi* | [**deleteTemplate**](docs/Api/TemplatesApi.md#deletetemplate) | **DELETE** /api/v2/templates/{id} | Delete a single template.
*TemplatesApi* | [**deleteTemplatesBulk**](docs/Api/TemplatesApi.md#deletetemplatesbulk) | **POST** /api/v2/templates/delete | Delete template by given ID(s) or delete all templates.
*TemplatesApi* | [**getAllTemplates**](docs/Api/TemplatesApi.md#getalltemplates) | **GET** /api/v2/templates | Get all user templates.
*TemplatesApi* | [**getTemplate**](docs/Api/TemplatesApi.md#gettemplate) | **GET** /api/v2/templates/{id} | Get a single template.
*TemplatesApi* | [**searchTemplates**](docs/Api/TemplatesApi.md#searchtemplates) | **GET** /api/v2/templates/search | Find user templates by given parameters.
*TemplatesApi* | [**updateTemplate**](docs/Api/TemplatesApi.md#updatetemplate) | **PUT** /api/v2/templates/{id} | Update existing template.
*ToolsApi* | [**doCarrierLookup**](docs/Api/ToolsApi.md#docarrierlookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup
*ToolsApi* | [**doEmailLookup**](docs/Api/ToolsApi.md#doemaillookup) | **GET** /api/v2/email-lookups/{email} | Validate Email address using Email Lookup tool
*UserApi* | [**deleteAvatar**](docs/Api/UserApi.md#deleteavatar) | **DELETE** /api/v2/user/avatar | Delete an avatar for the current user.\\
*UserApi* | [**getCurrentUser**](docs/Api/UserApi.md#getcurrentuser) | **GET** /api/v2/user | Get current user info.
*UserApi* | [**getDisallowedRules**](docs/Api/UserApi.md#getdisallowedrules) | **GET** /api/v2/user/disallowed-rules | Get an array of all rules that are disallowed to the current account.
*UserApi* | [**updateCurrentUser**](docs/Api/UserApi.md#updatecurrentuser) | **PUT** /api/v2/user | Update current user info.
*UserApi* | [**uploadAvatar**](docs/Api/UserApi.md#uploadavatar) | **POST** /api/v2/user/avatar | Add an avatar for the current user.
*UserSettingsApi* | [**getAvailableSenderSettingOptions**](docs/Api/UserSettingsApi.md#getavailablesendersettingoptions) | **GET** /api/v2/sources | Get all available sender setting options which could be used in \&quot;from\&quot; parameter of POST messages method.
*UserSettingsApi* | [**getBalanceNotificationOptions**](docs/Api/UserSettingsApi.md#getbalancenotificationoptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance
*UserSettingsApi* | [**getBalanceNotificationSettings**](docs/Api/UserSettingsApi.md#getbalancenotificationsettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings
*UserSettingsApi* | [**getCallbackSettings**](docs/Api/UserSettingsApi.md#getcallbacksettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings
*UserSettingsApi* | [**getInboundMessagesNotificationSettings**](docs/Api/UserSettingsApi.md#getinboundmessagesnotificationsettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings
*UserSettingsApi* | [**updateBalanceNotificationSettings**](docs/Api/UserSettingsApi.md#updatebalancenotificationsettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings
*UserSettingsApi* | [**updateCallbackSettings**](docs/Api/UserSettingsApi.md#updatecallbacksettings) | **PUT** /api/v2/callback/settings | Update callback URL settings
*UserSettingsApi* | [**updateChatDesktopNotificationSettings**](docs/Api/UserSettingsApi.md#updatechatdesktopnotificationsettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings
*UserSettingsApi* | [**updateInboundMessagesNotificationSettings**](docs/Api/UserSettingsApi.md#updateinboundmessagesnotificationsettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings
*UserSubaccountsApi* | [**closeSubaccount**](docs/Api/UserSubaccountsApi.md#closesubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close subaccount.
*UserSubaccountsApi* | [**getSubaccount**](docs/Api/UserSubaccountsApi.md#getsubaccount) | **GET** /api/v2/subaccounts/{id} | Get a single subaccount.
*UserSubaccountsApi* | [**getSubaccounts**](docs/Api/UserSubaccountsApi.md#getsubaccounts) | **GET** /api/v2/subaccounts | Get all subaccounts of current user.
*UserSubaccountsApi* | [**getSubaccountsWithTokens**](docs/Api/UserSubaccountsApi.md#getsubaccountswithtokens) | **POST** /api/v2/subaccounts/tokens/list | Get all subaccounts with their REST API tokens associated with specified app name.
*UserSubaccountsApi* | [**inviteSubaccount**](docs/Api/UserSubaccountsApi.md#invitesubaccount) | **POST** /api/v2/subaccounts | Invite new subaccount.
*UserSubaccountsApi* | [**requestNewSubaccountToken**](docs/Api/UserSubaccountsApi.md#requestnewsubaccounttoken) | **POST** /api/v2/subaccounts/tokens | Request a new REST API token for subaccount.


## Documentation For Models

 - [AssignContactsToListObject](docs/Model/AssignContactsToListObject.md)
 - [BadRequestResponse](docs/Model/BadRequestResponse.md)
 - [BadRequestResponseErrors](docs/Model/BadRequestResponseErrors.md)
 - [BlockContactInputObject](docs/Model/BlockContactInputObject.md)
 - [BulkSession](docs/Model/BulkSession.md)
 - [BuyDedicatedNumberInputObject](docs/Model/BuyDedicatedNumberInputObject.md)
 - [Chat](docs/Model/Chat.md)
 - [CheckPhoneVerificationCodeInputObject](docs/Model/CheckPhoneVerificationCodeInputObject.md)
 - [ClearAndAssignContactsToListInputIObject](docs/Model/ClearAndAssignContactsToListInputIObject.md)
 - [CloseChatsBulkInputObject](docs/Model/CloseChatsBulkInputObject.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactCustomField](docs/Model/ContactCustomField.md)
 - [ContactImage](docs/Model/ContactImage.md)
 - [ContactNote](docs/Model/ContactNote.md)
 - [Conversation](docs/Model/Conversation.md)
 - [Country](docs/Model/Country.md)
 - [CreateContactInputObject](docs/Model/CreateContactInputObject.md)
 - [CreateContactNoteInputObject](docs/Model/CreateContactNoteInputObject.md)
 - [CreateCustomFieldInputObject](docs/Model/CreateCustomFieldInputObject.md)
 - [CreateListInputObject](docs/Model/CreateListInputObject.md)
 - [CreatePushTokenInputObject](docs/Model/CreatePushTokenInputObject.md)
 - [CreateSurveyInputObject](docs/Model/CreateSurveyInputObject.md)
 - [CreateSurveyNodeInputObject](docs/Model/CreateSurveyNodeInputObject.md)
 - [CreateTemplateInputObject](docs/Model/CreateTemplateInputObject.md)
 - [Currency](docs/Model/Currency.md)
 - [DeleteChatMessagesBulkInputObject](docs/Model/DeleteChatMessagesBulkInputObject.md)
 - [DeleteChatsBulkInputObject](docs/Model/DeleteChatsBulkInputObject.md)
 - [DeleteContacsFromListObject](docs/Model/DeleteContacsFromListObject.md)
 - [DeleteContactNotesBulkInputObject](docs/Model/DeleteContactNotesBulkInputObject.md)
 - [DeleteContactsByIdsInputObject](docs/Model/DeleteContactsByIdsInputObject.md)
 - [DeleteInboundMessagesBulkInputObject](docs/Model/DeleteInboundMessagesBulkInputObject.md)
 - [DeleteListContactsBulkInputObject](docs/Model/DeleteListContactsBulkInputObject.md)
 - [DeleteListsBulkInputObject](docs/Model/DeleteListsBulkInputObject.md)
 - [DeleteMessageSessionsBulkInputObject](docs/Model/DeleteMessageSessionsBulkInputObject.md)
 - [DeleteOutboundMessagesBulkInputObject](docs/Model/DeleteOutboundMessagesBulkInputObject.md)
 - [DeleteScheduledMessagesBulkInputObject](docs/Model/DeleteScheduledMessagesBulkInputObject.md)
 - [DeleteTemplatesBulkInputObject](docs/Model/DeleteTemplatesBulkInputObject.md)
 - [DoAuthInputObject](docs/Model/DoAuthInputObject.md)
 - [DoAuthResponse](docs/Model/DoAuthResponse.md)
 - [DoAuthResponseMinVersions](docs/Model/DoAuthResponseMinVersions.md)
 - [DoCarrierLookupResponse](docs/Model/DoCarrierLookupResponse.md)
 - [DoEmailLookupResponse](docs/Model/DoEmailLookupResponse.md)
 - [ForwardedCall](docs/Model/ForwardedCall.md)
 - [GetAvailableDedicatedNumbersResponse](docs/Model/GetAvailableDedicatedNumbersResponse.md)
 - [GetAvailableSenderSettingOptionsResponse](docs/Model/GetAvailableSenderSettingOptionsResponse.md)
 - [GetBalanceNotificationOptionsResponse](docs/Model/GetBalanceNotificationOptionsResponse.md)
 - [GetBalanceNotificationSettingsResponse](docs/Model/GetBalanceNotificationSettingsResponse.md)
 - [GetCallbackSettingsResponse](docs/Model/GetCallbackSettingsResponse.md)
 - [GetContactsAutocompleteResponse](docs/Model/GetContactsAutocompleteResponse.md)
 - [GetInboundMessagesNotificationSettingsResponse](docs/Model/GetInboundMessagesNotificationSettingsResponse.md)
 - [GetListContactsIdsResponse](docs/Model/GetListContactsIdsResponse.md)
 - [GetMessagePreviewResponse](docs/Model/GetMessagePreviewResponse.md)
 - [GetMessagePriceResponse](docs/Model/GetMessagePriceResponse.md)
 - [GetMessagePricesResponse](docs/Model/GetMessagePricesResponse.md)
 - [GetMessageSessionStatResponse](docs/Model/GetMessageSessionStatResponse.md)
 - [GetMessagingCountersResponse](docs/Model/GetMessagingCountersResponse.md)
 - [GetMessagingStatResponse](docs/Model/GetMessagingStatResponse.md)
 - [GetPushTokensResponse](docs/Model/GetPushTokensResponse.md)
 - [GetSenderSettingsResponse](docs/Model/GetSenderSettingsResponse.md)
 - [GetSubaccountsWithTokensInputObject](docs/Model/GetSubaccountsWithTokensInputObject.md)
 - [GetSubaccountsWithTokensResponse](docs/Model/GetSubaccountsWithTokensResponse.md)
 - [GetSurveyNodesResponse](docs/Model/GetSurveyNodesResponse.md)
 - [GetUnreadMessagesTotalResponse](docs/Model/GetUnreadMessagesTotalResponse.md)
 - [GetVersionsResponse](docs/Model/GetVersionsResponse.md)
 - [Group](docs/Model/Group.md)
 - [GroupImage](docs/Model/GroupImage.md)
 - [InviteSubaccountInputObject](docs/Model/InviteSubaccountInputObject.md)
 - [Invoice](docs/Model/Invoice.md)
 - [MarkChatsReadBulkInputObject](docs/Model/MarkChatsReadBulkInputObject.md)
 - [MarkChatsUnreadBulkInputObject](docs/Model/MarkChatsUnreadBulkInputObject.md)
 - [MergeSurveyNodesInputObject](docs/Model/MergeSurveyNodesInputObject.md)
 - [MessageIn](docs/Model/MessageIn.md)
 - [MessageOut](docs/Model/MessageOut.md)
 - [MessageSession](docs/Model/MessageSession.md)
 - [MessageTemplate](docs/Model/MessageTemplate.md)
 - [MessagesIcs](docs/Model/MessagesIcs.md)
 - [MessagesIcsParameters](docs/Model/MessagesIcsParameters.md)
 - [MessagesIcsParametersRecipients](docs/Model/MessagesIcsParametersRecipients.md)
 - [MessagesIcsTextParameters](docs/Model/MessagesIcsTextParameters.md)
 - [MessagingStatItem](docs/Model/MessagingStatItem.md)
 - [MuteChatInputObject](docs/Model/MuteChatInputObject.md)
 - [MuteChatsBulkInputObject](docs/Model/MuteChatsBulkInputObject.md)
 - [NotFoundResponse](docs/Model/NotFoundResponse.md)
 - [PingResponse](docs/Model/PingResponse.md)
 - [PushToken](docs/Model/PushToken.md)
 - [ReopenChatsBulkInputObject](docs/Model/ReopenChatsBulkInputObject.md)
 - [RequestNewSubaccountTokenInputObject](docs/Model/RequestNewSubaccountTokenInputObject.md)
 - [RequestSenderIdInputObject](docs/Model/RequestSenderIdInputObject.md)
 - [ResourceLinkResponse](docs/Model/ResourceLinkResponse.md)
 - [SendMessageInputObject](docs/Model/SendMessageInputObject.md)
 - [SendMessageResponse](docs/Model/SendMessageResponse.md)
 - [SenderId](docs/Model/SenderId.md)
 - [SetChatStatusInputObject](docs/Model/SetChatStatusInputObject.md)
 - [SubaccountWithToken](docs/Model/SubaccountWithToken.md)
 - [SuccessfulResponse](docs/Model/SuccessfulResponse.md)
 - [Survey](docs/Model/Survey.md)
 - [SurveyNode](docs/Model/SurveyNode.md)
 - [SurveyRecipient](docs/Model/SurveyRecipient.md)
 - [SurveySenderCountries](docs/Model/SurveySenderCountries.md)
 - [Timezone](docs/Model/Timezone.md)
 - [UnauthorizedResponse](docs/Model/UnauthorizedResponse.md)
 - [UnblockContactInputObject](docs/Model/UnblockContactInputObject.md)
 - [UnblockContactsBulkInputObject](docs/Model/UnblockContactsBulkInputObject.md)
 - [UnmuteChatsBulkInputObject](docs/Model/UnmuteChatsBulkInputObject.md)
 - [UnsubscribeContactInputObject](docs/Model/UnsubscribeContactInputObject.md)
 - [UnsubscribedContact](docs/Model/UnsubscribedContact.md)
 - [UpdateBalanceNotificationSettingsInputObject](docs/Model/UpdateBalanceNotificationSettingsInputObject.md)
 - [UpdateCallbackSettingsInputObject](docs/Model/UpdateCallbackSettingsInputObject.md)
 - [UpdateChatDesktopNotificationSettingsInputObject](docs/Model/UpdateChatDesktopNotificationSettingsInputObject.md)
 - [UpdateContactInputObject](docs/Model/UpdateContactInputObject.md)
 - [UpdateContactNoteInputObject](docs/Model/UpdateContactNoteInputObject.md)
 - [UpdateCurrentUserInputObject](docs/Model/UpdateCurrentUserInputObject.md)
 - [UpdateCurrentUserResponse](docs/Model/UpdateCurrentUserResponse.md)
 - [UpdateCustomFieldInputObject](docs/Model/UpdateCustomFieldInputObject.md)
 - [UpdateCustomFieldValueInputObject](docs/Model/UpdateCustomFieldValueInputObject.md)
 - [UpdateInboundMessagesNotificationSettingsInputObject](docs/Model/UpdateInboundMessagesNotificationSettingsInputObject.md)
 - [UpdateListObject](docs/Model/UpdateListObject.md)
 - [UpdatePasswordInputObject](docs/Model/UpdatePasswordInputObject.md)
 - [UpdateSenderSettingInputObject](docs/Model/UpdateSenderSettingInputObject.md)
 - [UpdateSurveyInputObject](docs/Model/UpdateSurveyInputObject.md)
 - [UpdateSurveyNodeInputObject](docs/Model/UpdateSurveyNodeInputObject.md)
 - [UpdateTemplateInputObject](docs/Model/UpdateTemplateInputObject.md)
 - [User](docs/Model/User.md)
 - [UserCustomField](docs/Model/UserCustomField.md)
 - [UserImage](docs/Model/UserImage.md)
 - [UserStatement](docs/Model/UserStatement.md)
 - [UsersInbound](docs/Model/UsersInbound.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author




