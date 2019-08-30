# TextMagic PHP SDK

The TextMagic SMS API PHP wrapper can save you a lot of time, as it includes all the necessary API commands. It only takes a few seconds to download it from GitHub and to install it into your own app or software. After installation, you'll then be able to send text messages.

- API version: 2

For more information, please visit [https://www.textmagic.com/docs/api/](https://www.textmagic.com/docs/api/)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```javascript
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
require_once(__DIR__.'/vendor/autoload.php');
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

$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignContactsToListInputObject = new \TextMagic\Models\AssignContactsToListInputObject();
$id = 1;

try {
    $result = $apiInstance->assignContactsToList($assignContactsToListInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->assignContactsToList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://my.textmagic.com*

 Method | HTTP request | Description
------------- | ------------- | -------------
 [**assignContactsToList**](docs/Api/TextMagicApi.md#assigncontactstolist) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to the specified list.
 [**blockContact**](docs/Api/TextMagicApi.md#blockcontact) | **POST** /api/v2/contacts/block | Block contact from inbound and outbound communication by phone number.
 [**buyDedicatedNumber**](docs/Api/TextMagicApi.md#buydedicatednumber) | **POST** /api/v2/numbers | Buy a dedicated number and assign it to the specified account.
 [**cancelSurvey**](docs/Api/TextMagicApi.md#cancelsurvey) | **PUT** /api/v2/surveys/{id}/cancel | Cancel a survey.
 [**checkPhoneVerificationCode**](docs/Api/TextMagicApi.md#checkphoneverificationcode) | **PUT** /api/v2/user/phone/verification | Check user phone verification code
 [**clearAndAssignContactsToList**](docs/Api/TextMagicApi.md#clearandassigncontactstolist) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts.
 [**closeChatsBulk**](docs/Api/TextMagicApi.md#closechatsbulk) | **POST** /api/v2/chats/close/bulk | Close chats by chat ids or close all chats
 [**closeReadChats**](docs/Api/TextMagicApi.md#closereadchats) | **POST** /api/v2/chats/close/read | Close all chats that have no unread messages.
 [**closeSubaccount**](docs/Api/TextMagicApi.md#closesubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close subaccount.
 [**createContact**](docs/Api/TextMagicApi.md#createcontact) | **POST** /api/v2/contacts | Create a new contact from the submitted data.
 [**createContactNote**](docs/Api/TextMagicApi.md#createcontactnote) | **POST** /api/v2/contacts/{id}/notes | Create a new contact note.
 [**createCustomField**](docs/Api/TextMagicApi.md#createcustomfield) | **POST** /api/v2/customfields | Create a new custom field from the submitted data.
 [**createList**](docs/Api/TextMagicApi.md#createlist) | **POST** /api/v2/lists | Create a new list from the submitted data.
 [**createPushToken**](docs/Api/TextMagicApi.md#createpushtoken) | **POST** /api/v2/push/tokens | Add or update a device token.
 [**createSurvey**](docs/Api/TextMagicApi.md#createsurvey) | **POST** /api/v2/surveys | Create a new survey from the submitted data.
 [**createSurveyNode**](docs/Api/TextMagicApi.md#createsurveynode) | **POST** /api/v2/surveys/{id}/nodes | Create a new node from the submitted data.
 [**createTemplate**](docs/Api/TextMagicApi.md#createtemplate) | **POST** /api/v2/templates | Create a new template from the submitted data.
 [**deleteAllContacts**](docs/Api/TextMagicApi.md#deleteallcontacts) | **DELETE** /api/v2/contact/all | Delete all contacts.
 [**deleteAllOutboundMessages**](docs/Api/TextMagicApi.md#deletealloutboundmessages) | **DELETE** /api/v2/message/all | Delete all messages.
 [**deleteAvatar**](docs/Api/TextMagicApi.md#deleteavatar) | **DELETE** /api/v2/user/avatar | Delete an avatar for the current user.\\
 [**deleteChatMessages**](docs/Api/TextMagicApi.md#deletechatmessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete messages from chat by given messages ID(s).
 [**deleteChatsBulk**](docs/Api/TextMagicApi.md#deletechatsbulk) | **POST** /api/v2/chats/delete | Delete chats by given ID(s) or delete all chats.
 [**deleteContact**](docs/Api/TextMagicApi.md#deletecontact) | **DELETE** /api/v2/contacts/{id} | Delete a single contact.
 [**deleteContactAvatar**](docs/Api/TextMagicApi.md#deletecontactavatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar for the contact.
 [**deleteContactNote**](docs/Api/TextMagicApi.md#deletecontactnote) | **DELETE** /api/v2/notes/{id} | Delete a single contact note.
 [**deleteContactNotesBulk**](docs/Api/TextMagicApi.md#deletecontactnotesbulk) | **POST** /api/v2/contacts/{id}/notes/delete | Delete contact note by given ID(s) or delete all contact notes.
 [**deleteContactsByIds**](docs/Api/TextMagicApi.md#deletecontactsbyids) | **POST** /api/v2/contacts/delete | Delete contact by given ID(s) or delete all contacts.
 [**deleteContactsFromList**](docs/Api/TextMagicApi.md#deletecontactsfromlist) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from the specified list.
 [**deleteCustomField**](docs/Api/TextMagicApi.md#deletecustomfield) | **DELETE** /api/v2/customfields/{id} | Delete a single custom field.
 [**deleteDedicatedNumber**](docs/Api/TextMagicApi.md#deletededicatednumber) | **DELETE** /api/v2/numbers/{id} | Cancel dedicated number subscription.
 [**deleteInboundMessage**](docs/Api/TextMagicApi.md#deleteinboundmessage) | **DELETE** /api/v2/replies/{id} | Delete the incoming message.
 [**deleteInboundMessagesBulk**](docs/Api/TextMagicApi.md#deleteinboundmessagesbulk) | **POST** /api/v2/replies/delete | Delete inbound messages by given ID(s) or delete all inbound messages.
 [**deleteList**](docs/Api/TextMagicApi.md#deletelist) | **DELETE** /api/v2/lists/{id} | Delete a single list.
 [**deleteListAvatar**](docs/Api/TextMagicApi.md#deletelistavatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for the list.
 [**deleteListContactsBulk**](docs/Api/TextMagicApi.md#deletelistcontactsbulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contact from list by given ID(s) or all contacts from list.
 [**deleteListsBulk**](docs/Api/TextMagicApi.md#deletelistsbulk) | **POST** /api/v2/lists/delete | Delete list by given ID(s) or delete all lists.
 [**deleteMessageSession**](docs/Api/TextMagicApi.md#deletemessagesession) | **DELETE** /api/v2/sessions/{id} | Delete a message session, together with all nested messages.
 [**deleteMessageSessionsBulk**](docs/Api/TextMagicApi.md#deletemessagesessionsbulk) | **POST** /api/v2/sessions/delete | Delete messages sessions, together with all nested messages, by given ID(s) or delete all messages sessions.
 [**deleteOutboundMessage**](docs/Api/TextMagicApi.md#deleteoutboundmessage) | **DELETE** /api/v2/messages/{id} | Delete a single message.
 [**deleteOutboundMessagesBulk**](docs/Api/TextMagicApi.md#deleteoutboundmessagesbulk) | **POST** /api/v2/messages/delete | Delete outbound messages by given ID(s) or delete all outbound messages.
 [**deletePushToken**](docs/Api/TextMagicApi.md#deletepushtoken) | **DELETE** /api/v2/push/tokens/{type}/{deviceId} | Delete a push notification device token.
 [**deleteScheduledMessage**](docs/Api/TextMagicApi.md#deletescheduledmessage) | **DELETE** /api/v2/schedules/{id} | Delete a message session, together with all nested messages.
 [**deleteScheduledMessagesBulk**](docs/Api/TextMagicApi.md#deletescheduledmessagesbulk) | **POST** /api/v2/schedules/delete | Delete scheduled messages by given ID(s) or delete all scheduled messages.
 [**deleteSenderId**](docs/Api/TextMagicApi.md#deletesenderid) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID.
 [**deleteSurvey**](docs/Api/TextMagicApi.md#deletesurvey) | **DELETE** /api/v2/surveys/{id} | Delete a survey.
 [**deleteSurveyNode**](docs/Api/TextMagicApi.md#deletesurveynode) | **DELETE** /api/v2/surveys/nodes/{id} | Delete a node.
 [**deleteTemplate**](docs/Api/TextMagicApi.md#deletetemplate) | **DELETE** /api/v2/templates/{id} | Delete a single template.
 [**deleteTemplatesBulk**](docs/Api/TextMagicApi.md#deletetemplatesbulk) | **POST** /api/v2/templates/delete | Delete template by given ID(s) or delete all templates.
 [**doAuth**](docs/Api/TextMagicApi.md#doauth) | **POST** /api/v2/auth | Authenticate user by given username and password.
 [**doCarrierLookup**](docs/Api/TextMagicApi.md#docarrierlookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup
 [**doEmailLookup**](docs/Api/TextMagicApi.md#doemaillookup) | **GET** /api/v2/email-lookups/{email} | Validate Email address using Email Lookup tool
 [**duplicateSurvey**](docs/Api/TextMagicApi.md#duplicatesurvey) | **PUT** /api/v2/surveys/{id}/duplicate | Duplicate a survey.
 [**getAllBulkSessions**](docs/Api/TextMagicApi.md#getallbulksessions) | **GET** /api/v2/bulks | Get all bulk sending sessions.
 [**getAllChats**](docs/Api/TextMagicApi.md#getallchats) | **GET** /api/v2/chats | Get all user chats.
 [**getAllInboundMessages**](docs/Api/TextMagicApi.md#getallinboundmessages) | **GET** /api/v2/replies | Get all inbox messages.
 [**getAllMessageSessions**](docs/Api/TextMagicApi.md#getallmessagesessions) | **GET** /api/v2/sessions | Get all message sending sessions.
 [**getAllOutboundMessages**](docs/Api/TextMagicApi.md#getalloutboundmessages) | **GET** /api/v2/messages | Get all user oubound messages.
 [**getAllScheduledMessages**](docs/Api/TextMagicApi.md#getallscheduledmessages) | **GET** /api/v2/schedules | Get all scheduled messages.
 [**getAllTemplates**](docs/Api/TextMagicApi.md#getalltemplates) | **GET** /api/v2/templates | Get all user templates.
 [**getAvailableDedicatedNumbers**](docs/Api/TextMagicApi.md#getavailablededicatednumbers) | **GET** /api/v2/numbers/available | Find available dedicated numbers to buy.
 [**getAvailableSenderSettingOptions**](docs/Api/TextMagicApi.md#getavailablesendersettingoptions) | **GET** /api/v2/sources | Get all available sender setting options which could be used in \&quot;from\&quot; parameter of POST messages method.
 [**getBalanceNotificationOptions**](docs/Api/TextMagicApi.md#getbalancenotificationoptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance
 [**getBalanceNotificationSettings**](docs/Api/TextMagicApi.md#getbalancenotificationsettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings
 [**getBlockedContacts**](docs/Api/TextMagicApi.md#getblockedcontacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts.
 [**getBulkSession**](docs/Api/TextMagicApi.md#getbulksession) | **GET** /api/v2/bulks/{id} | Get bulk message session status.
 [**getCallbackSettings**](docs/Api/TextMagicApi.md#getcallbacksettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings
 [**getCallsPrices**](docs/Api/TextMagicApi.md#getcallsprices) | **GET** /api/v2/calls/price | Check pricing for a inbound/outbound call.
 [**getChat**](docs/Api/TextMagicApi.md#getchat) | **GET** /api/v2/chats/{id} | Get a single chat.
 [**getChatByPhone**](docs/Api/TextMagicApi.md#getchatbyphone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone.
 [**getChatMessages**](docs/Api/TextMagicApi.md#getchatmessages) | **GET** /api/v2/chats/{id}/message | Fetch messages from chat with specified chat id.
 [**getContact**](docs/Api/TextMagicApi.md#getcontact) | **GET** /api/v2/contacts/{id} | Get a single contact.
 [**getContactByPhone**](docs/Api/TextMagicApi.md#getcontactbyphone) | **GET** /api/v2/contacts/phone/{phone} | Get a single contact by phone number.
 [**getContactIfBlocked**](docs/Api/TextMagicApi.md#getcontactifblocked) | **GET** /api/v2/contacts/block/phone | Check is that phone number blocked
 [**getContactImportSessionProgress**](docs/Api/TextMagicApi.md#getcontactimportsessionprogress) | **GET** /api/v2/contacts/import/progress/{id} | Get contact import session progress.
 [**getContactNote**](docs/Api/TextMagicApi.md#getcontactnote) | **GET** /api/v2/notes/{id} | Get a single contact note.
 [**getContactNotes**](docs/Api/TextMagicApi.md#getcontactnotes) | **GET** /api/v2/contacts/{id}/notes | Fetch notes assigned to the given contact.
 [**getContacts**](docs/Api/TextMagicApi.md#getcontacts) | **GET** /api/v2/contacts | Get all user contacts.
 [**getContactsAutocomplete**](docs/Api/TextMagicApi.md#getcontactsautocomplete) | **GET** /api/v2/contacts/autocomplete | Get contacts autocomplete suggestions by given search term.
 [**getContactsByListId**](docs/Api/TextMagicApi.md#getcontactsbylistid) | **GET** /api/v2/lists/{id}/contacts | Fetch user contacts by given group id.
 [**getCountries**](docs/Api/TextMagicApi.md#getcountries) | **GET** /api/v2/countries | Return list of countries.
 [**getCurrentUser**](docs/Api/TextMagicApi.md#getcurrentuser) | **GET** /api/v2/user | Get current user info.
 [**getCustomField**](docs/Api/TextMagicApi.md#getcustomfield) | **GET** /api/v2/customfields/{id} | Get a single custom field.
 [**getCustomFields**](docs/Api/TextMagicApi.md#getcustomfields) | **GET** /api/v2/customfields | Get all contact custom fields.
 [**getDedicatedNumber**](docs/Api/TextMagicApi.md#getdedicatednumber) | **GET** /api/v2/numbers/{id} | Get a single dedicated number.
 [**getDisallowedRules**](docs/Api/TextMagicApi.md#getdisallowedrules) | **GET** /api/v2/user/disallowed-rules | Get an array of all rules that are disallowed to the current account.
 [**getFavourites**](docs/Api/TextMagicApi.md#getfavourites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists.
 [**getForwardedCalls**](docs/Api/TextMagicApi.md#getforwardedcalls) | **GET** /api/v2/calls | Get all forwarded calls.
 [**getInboundMessage**](docs/Api/TextMagicApi.md#getinboundmessage) | **GET** /api/v2/replies/{id} | Get a single inbox message.
 [**getInboundMessagesNotificationSettings**](docs/Api/TextMagicApi.md#getinboundmessagesnotificationsettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings
 [**getInvoices**](docs/Api/TextMagicApi.md#getinvoices) | **GET** /api/v2/invoices | Return account invoices.
 [**getList**](docs/Api/TextMagicApi.md#getlist) | **GET** /api/v2/lists/{id} | Get a single list.
 [**getListContactsIds**](docs/Api/TextMagicApi.md#getlistcontactsids) | **GET** /api/v2/lists/{id}/contacts/ids | Fetch all contacts IDs belonging to the list with ID.
 [**getListsOfContact**](docs/Api/TextMagicApi.md#getlistsofcontact) | **GET** /api/v2/contacts/{id}/lists | Return lists which contact belongs to.
 [**getMessagePreview**](docs/Api/TextMagicApi.md#getmessagepreview) | **GET** /api/v2/messages/preview | Get messages preview (with tags merged) up to 100 messages per session.
 [**getMessagePrice**](docs/Api/TextMagicApi.md#getmessageprice) | **GET** /api/v2/messages/price | Check pricing for a new outbound message.
 [**getMessagePrices**](docs/Api/TextMagicApi.md#getmessageprices) | **GET** /api/v2/messages/prices | Get message prices for all countries.
 [**getMessageSession**](docs/Api/TextMagicApi.md#getmessagesession) | **GET** /api/v2/sessions/{id} | Get a message session.
 [**getMessageSessionStat**](docs/Api/TextMagicApi.md#getmessagesessionstat) | **GET** /api/v2/sessions/{id}/stat | Get sending session statistics.
 [**getMessagesBySessionId**](docs/Api/TextMagicApi.md#getmessagesbysessionid) | **GET** /api/v2/sessions/{id}/messages | Fetch messages by given session id.
 [**getMessagingCounters**](docs/Api/TextMagicApi.md#getmessagingcounters) | **GET** /api/v2/stats/messaging/data | Return counters for messaging data views.
 [**getMessagingStat**](docs/Api/TextMagicApi.md#getmessagingstat) | **GET** /api/v2/stats/messaging | Return messaging statistics.
 [**getOutboundMessage**](docs/Api/TextMagicApi.md#getoutboundmessage) | **GET** /api/v2/messages/{id} | Get a single outgoing message.
 [**getOutboundMessagesHistory**](docs/Api/TextMagicApi.md#getoutboundmessageshistory) | **GET** /api/v2/history | Get outbound messages history.
 [**getPushTokens**](docs/Api/TextMagicApi.md#getpushtokens) | **GET** /api/v2/push/tokens | Get all device tokens assigned to the current account
 [**getScheduledMessage**](docs/Api/TextMagicApi.md#getscheduledmessage) | **GET** /api/v2/schedules/{id} | Get message schedule.
 [**getSenderId**](docs/Api/TextMagicApi.md#getsenderid) | **GET** /api/v2/senderids/{id} | Get a single Sender ID.
 [**getSenderIds**](docs/Api/TextMagicApi.md#getsenderids) | **GET** /api/v2/senderids | Get all sender IDs of current user.
 [**getSenderSettings**](docs/Api/TextMagicApi.md#getsendersettings) | **GET** /api/v2/sender/settings | Get current user sender settings.
 [**getSpendingStat**](docs/Api/TextMagicApi.md#getspendingstat) | **GET** /api/v2/stats/spending | Return account spending statistics.
 [**getState**](docs/Api/TextMagicApi.md#getstate) | **GET** /api/v2/state | Get current entities state
 [**getSubaccount**](docs/Api/TextMagicApi.md#getsubaccount) | **GET** /api/v2/subaccounts/{id} | Get a single subaccount.
 [**getSubaccounts**](docs/Api/TextMagicApi.md#getsubaccounts) | **GET** /api/v2/subaccounts | Get all subaccounts of current user.
 [**getSubaccountsWithTokens**](docs/Api/TextMagicApi.md#getsubaccountswithtokens) | **POST** /api/v2/subaccounts/tokens/list | Get all subaccounts with their REST API tokens associated with specified app name.
 [**getSurvey**](docs/Api/TextMagicApi.md#getsurvey) | **GET** /api/v2/surveys/{id} | Get a survey by id.
 [**getSurveyNode**](docs/Api/TextMagicApi.md#getsurveynode) | **GET** /api/v2/surveys/nodes/{id} | Get a node by id.
 [**getSurveyNodes**](docs/Api/TextMagicApi.md#getsurveynodes) | **GET** /api/v2/surveys/{id}/nodes | Fetch nodes by given survey id.
 [**getSurveys**](docs/Api/TextMagicApi.md#getsurveys) | **GET** /api/v2/surveys | Get all user surveys.
 [**getTemplate**](docs/Api/TextMagicApi.md#gettemplate) | **GET** /api/v2/templates/{id} | Get a single template.
 [**getTimezones**](docs/Api/TextMagicApi.md#gettimezones) | **GET** /api/v2/timezones | Return all available timezone IDs.
 [**getUnreadMessagesTotal**](docs/Api/TextMagicApi.md#getunreadmessagestotal) | **GET** /api/v2/chats/unread/count | Get total amount of unread messages in the current user chats.
 [**getUnsubscribedContact**](docs/Api/TextMagicApi.md#getunsubscribedcontact) | **GET** /api/v2/unsubscribers/{id} | Get a single unsubscribed contact.
 [**getUnsubscribers**](docs/Api/TextMagicApi.md#getunsubscribers) | **GET** /api/v2/unsubscribers | Get all contact have unsubscribed from your communication.
 [**getUserDedicatedNumbers**](docs/Api/TextMagicApi.md#getuserdedicatednumbers) | **GET** /api/v2/numbers | Get user&#39;s dedicated numbers.
 [**getUserLists**](docs/Api/TextMagicApi.md#getuserlists) | **GET** /api/v2/lists | Get all user lists.
 [**getVersions**](docs/Api/TextMagicApi.md#getversions) | **GET** /api/v2/versions | Get minimal valid apps versions
 [**inviteSubaccount**](docs/Api/TextMagicApi.md#invitesubaccount) | **POST** /api/v2/subaccounts | Invite new subaccount.
 [**markChatsReadBulk**](docs/Api/TextMagicApi.md#markchatsreadbulk) | **POST** /api/v2/chats/read/bulk | Mark several chats as read by chat ids or mark all chats as read
 [**markChatsUnreadBulk**](docs/Api/TextMagicApi.md#markchatsunreadbulk) | **POST** /api/v2/chats/unread/bulk | Mark several chats as UNread by chat ids or mark all chats as UNread
 [**mergeSurveyNodes**](docs/Api/TextMagicApi.md#mergesurveynodes) | **POST** /api/v2/surveys/nodes/merge | Merge two question nodes.
 [**muteChat**](docs/Api/TextMagicApi.md#mutechat) | **POST** /api/v2/chats/mute | Set mute mode.
 [**muteChatsBulk**](docs/Api/TextMagicApi.md#mutechatsbulk) | **POST** /api/v2/chats/mute/bulk | Mute several chats by chat ids or mute all chats
 [**ping**](docs/Api/TextMagicApi.md#ping) | **GET** /api/v2/ping | Just does a pong.
 [**reopenChatsBulk**](docs/Api/TextMagicApi.md#reopenchatsbulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats by chat ids or reopen all chats
 [**requestNewSubaccountToken**](docs/Api/TextMagicApi.md#requestnewsubaccounttoken) | **POST** /api/v2/subaccounts/tokens | Request a new REST API token for subaccount.
 [**requestSenderId**](docs/Api/TextMagicApi.md#requestsenderid) | **POST** /api/v2/senderids | Request for a new Sender ID.
 [**resetSurvey**](docs/Api/TextMagicApi.md#resetsurvey) | **PUT** /api/v2/surveys/{id}/reset | Reset a survey flow.
 [**searchChats**](docs/Api/TextMagicApi.md#searchchats) | **GET** /api/v2/chats/search | Find chats by inbound or outbound messages text.
 [**searchChatsByIds**](docs/Api/TextMagicApi.md#searchchatsbyids) | **GET** /api/v2/chats/search/ids | Find chats by IDs.
 [**searchChatsByReceipent**](docs/Api/TextMagicApi.md#searchchatsbyreceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient (contact, list name or phone number).
 [**searchContacts**](docs/Api/TextMagicApi.md#searchcontacts) | **GET** /api/v2/contacts/search | Find user contacts by given parameters.
 [**searchInboundMessages**](docs/Api/TextMagicApi.md#searchinboundmessages) | **GET** /api/v2/replies/search | Find inbound messages by given parameters.
 [**searchLists**](docs/Api/TextMagicApi.md#searchlists) | **GET** /api/v2/lists/search | Find contact lists by given parameters.
 [**searchOutboundMessages**](docs/Api/TextMagicApi.md#searchoutboundmessages) | **GET** /api/v2/messages/search | Find outbound messages by given parameters.
 [**searchScheduledMessages**](docs/Api/TextMagicApi.md#searchscheduledmessages) | **GET** /api/v2/schedules/search | Find scheduled messages by given parameters.
 [**searchTemplates**](docs/Api/TextMagicApi.md#searchtemplates) | **GET** /api/v2/templates/search | Find user templates by given parameters.
 [**sendEmailVerificationCode**](docs/Api/TextMagicApi.md#sendemailverificationcode) | **GET** /api/v2/user/email/verification | Send user email verification
 [**sendMessage**](docs/Api/TextMagicApi.md#sendmessage) | **POST** /api/v2/messages | Send a new outbound message.
 [**sendPhoneVerificationCode**](docs/Api/TextMagicApi.md#sendphoneverificationcode) | **GET** /api/v2/user/phone/verification | Send user phone verification
 [**setChatStatus**](docs/Api/TextMagicApi.md#setchatstatus) | **POST** /api/v2/chats/status | Set status of the chat given by ID.
 [**startSurvey**](docs/Api/TextMagicApi.md#startsurvey) | **PUT** /api/v2/surveys/{id}/start | Start a survey.
 [**unblockContact**](docs/Api/TextMagicApi.md#unblockcontact) | **POST** /api/v2/contacts/unblock | Unblock contact by phone number.
 [**unblockContactsBulk**](docs/Api/TextMagicApi.md#unblockcontactsbulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock several contacts by blocked contact ids or unblock all contacts
 [**unmuteChatsBulk**](docs/Api/TextMagicApi.md#unmutechatsbulk) | **POST** /api/v2/chats/unmute/bulk | Unmute several chats by chat ids or unmute all chats
 [**unsubscribeContact**](docs/Api/TextMagicApi.md#unsubscribecontact) | **POST** /api/v2/unsubscribers | Unsubscribe contact from your communication by phone number.
 [**updateBalanceNotificationSettings**](docs/Api/TextMagicApi.md#updatebalancenotificationsettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings
 [**updateCallbackSettings**](docs/Api/TextMagicApi.md#updatecallbacksettings) | **PUT** /api/v2/callback/settings | Update callback URL settings
 [**updateChatDesktopNotificationSettings**](docs/Api/TextMagicApi.md#updatechatdesktopnotificationsettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings
 [**updateContact**](docs/Api/TextMagicApi.md#updatecontact) | **PUT** /api/v2/contacts/{id} | Update existing contact.
 [**updateContactNote**](docs/Api/TextMagicApi.md#updatecontactnote) | **PUT** /api/v2/notes/{id} | Update existing contact note.
 [**updateCurrentUser**](docs/Api/TextMagicApi.md#updatecurrentuser) | **PUT** /api/v2/user | Update current user info.
 [**updateCustomField**](docs/Api/TextMagicApi.md#updatecustomfield) | **PUT** /api/v2/customfields/{id} | Update existing custom field.
 [**updateCustomFieldValue**](docs/Api/TextMagicApi.md#updatecustomfieldvalue) | **PUT** /api/v2/customfields/{id}/update | Update contact&#39;s custom field value.
 [**updateInboundMessagesNotificationSettings**](docs/Api/TextMagicApi.md#updateinboundmessagesnotificationsettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings
 [**updateList**](docs/Api/TextMagicApi.md#updatelist) | **PUT** /api/v2/lists/{id} | Update existing list.
 [**updatePassword**](docs/Api/TextMagicApi.md#updatepassword) | **PUT** /api/v2/user/password/change | Change user password.
 [**updateSenderSetting**](docs/Api/TextMagicApi.md#updatesendersetting) | **PUT** /api/v2/sender/settings | Change sender settings for specified country.
 [**updateSurvey**](docs/Api/TextMagicApi.md#updatesurvey) | **PUT** /api/v2/surveys/{id} | Update existing survey.
 [**updateSurveyNode**](docs/Api/TextMagicApi.md#updatesurveynode) | **PUT** /api/v2/surveys/nodes/{id} | Update existing node.
 [**updateTemplate**](docs/Api/TextMagicApi.md#updatetemplate) | **PUT** /api/v2/templates/{id} | Update existing template.
 [**uploadAvatar**](docs/Api/TextMagicApi.md#uploadavatar) | **POST** /api/v2/user/avatar | Add an avatar for the current user.
 [**uploadContactAvatar**](docs/Api/TextMagicApi.md#uploadcontactavatar) | **POST** /api/v2/contacts/{id}/avatar | Add an avatar for the contact.
 [**uploadListAvatar**](docs/Api/TextMagicApi.md#uploadlistavatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for the list.
 [**uploadMessageAttachment**](docs/Api/TextMagicApi.md#uploadmessageattachment) | **POST** /api/v2/messages/attachment | Upload a new file to insert it as a link.
