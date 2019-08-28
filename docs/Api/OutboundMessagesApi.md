# TextMagic\OutboundMessagesApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllOutboundMessages**](OutboundMessagesApi.md#deleteAllOutboundMessages) | **DELETE** /api/v2/message/all | Delete all messages.
[**deleteOutboundMessage**](OutboundMessagesApi.md#deleteOutboundMessage) | **DELETE** /api/v2/messages/{id} | Delete a single message.
[**deleteOutboundMessagesBulk**](OutboundMessagesApi.md#deleteOutboundMessagesBulk) | **POST** /api/v2/messages/delete | Delete outbound messages by given ID(s) or delete all outbound messages.
[**getAllOutboundMessages**](OutboundMessagesApi.md#getAllOutboundMessages) | **GET** /api/v2/messages | Get all user oubound messages.
[**getMessagePreview**](OutboundMessagesApi.md#getMessagePreview) | **GET** /api/v2/messages/preview | Get messages preview (with tags merged) up to 100 messages per session.
[**getMessagePrice**](OutboundMessagesApi.md#getMessagePrice) | **GET** /api/v2/messages/price | Check pricing for a new outbound message.
[**getMessagePrices**](OutboundMessagesApi.md#getMessagePrices) | **GET** /api/v2/messages/prices | Get message prices for all countries.
[**getOutboundMessage**](OutboundMessagesApi.md#getOutboundMessage) | **GET** /api/v2/messages/{id} | Get a single outgoing message.
[**getOutboundMessagesHistory**](OutboundMessagesApi.md#getOutboundMessagesHistory) | **GET** /api/v2/history | Get outbound messages history.
[**searchOutboundMessages**](OutboundMessagesApi.md#searchOutboundMessages) | **GET** /api/v2/messages/search | Find outbound messages by given parameters.
[**sendMessage**](OutboundMessagesApi.md#sendMessage) | **POST** /api/v2/messages | Send a new outbound message.
[**uploadMessageAttachement**](OutboundMessagesApi.md#uploadMessageAttachement) | **POST** /api/v2/messages/attachment | Upload a new file to insert it as a link.


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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllOutboundMessages();
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->deleteAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteOutboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->deleteOutboundMessage: ', $e->getMessage(), PHP_EOL;
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
> deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject)

Delete outbound messages by given ID(s) or delete all outbound messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteOutboundMessagesBulkInputObject = new \TextMagic\Models\DeleteOutboundMessagesBulkInputObject(); // \TextMagic\Models\DeleteOutboundMessagesBulkInputObject | 

try {
    $apiInstance->deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->deleteOutboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteOutboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteOutboundMessagesBulkInputObject**](../Model/DeleteOutboundMessagesBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOutboundMessages**
> \TextMagic\Models\InlineResponse20011 getAllOutboundMessages($page, $limit, $lastId)

Get all user oubound messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->getAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20011**](../Model/InlineResponse20011.md)

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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->getMessagePreview: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->getMessagePrice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessagePrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->getMessagePrices: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->getOutboundMessage: ', $e->getMessage(), PHP_EOL;
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
> \TextMagic\Models\InlineResponse20014 getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction)

Get outbound messages history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->getOutboundMessagesHistory: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOutboundMessages**
> \TextMagic\Models\InlineResponse20011 searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query)

Find outbound messages by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
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
    echo 'Exception when calling OutboundMessagesApi->searchOutboundMessages: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \TextMagic\Models\SendMessageResponse sendMessage($getMessagePriceInputObject)

Send a new outbound message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getMessagePriceInputObject = new \TextMagic\Models\GetMessagePriceInputObject(); // \TextMagic\Models\GetMessagePriceInputObject | 

try {
    $result = $apiInstance->sendMessage($getMessagePriceInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getMessagePriceInputObject** | [**\TextMagic\Models\GetMessagePriceInputObject**](../Model/GetMessagePriceInputObject.md)|  | [optional]

### Return type

[**\TextMagic\Models\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMessageAttachement**
> \TextMagic\Models\InlineResponse2012 uploadMessageAttachement($file)

Upload a new file to insert it as a link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats

try {
    $result = $apiInstance->uploadMessageAttachement($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->uploadMessageAttachement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats |

### Return type

[**\TextMagic\Models\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

