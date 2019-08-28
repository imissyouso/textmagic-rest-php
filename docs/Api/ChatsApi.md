# TextMagic\ChatsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeChatsBulk**](ChatsApi.md#closeChatsBulk) | **POST** /api/v2/chats/close/bulk | Close chats by chat ids or close all chats
[**closeReadChats**](ChatsApi.md#closeReadChats) | **POST** /api/v2/chats/close/read | Close all chats that have no unread messages.
[**deleteChatMessages**](ChatsApi.md#deleteChatMessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete messages from chat by given messages ID(s).
[**deleteChatsBulk**](ChatsApi.md#deleteChatsBulk) | **POST** /api/v2/chats/delete | Delete chats by given ID(s) or delete all chats.
[**getAllChats**](ChatsApi.md#getAllChats) | **GET** /api/v2/chats | Get all user chats.
[**getChat**](ChatsApi.md#getChat) | **GET** /api/v2/chats/{id} | Get a single chat.
[**getChatByPhone**](ChatsApi.md#getChatByPhone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone.
[**getChatMessages**](ChatsApi.md#getChatMessages) | **GET** /api/v2/chats/{id}/message | Fetch messages from chat with specified chat id.
[**getUnreadMessagesTotal**](ChatsApi.md#getUnreadMessagesTotal) | **GET** /api/v2/chats/unread/count | Get total amount of unread messages in the current user chats.
[**markChatsReadBulk**](ChatsApi.md#markChatsReadBulk) | **POST** /api/v2/chats/read/bulk | Mark several chats as read by chat ids or mark all chats as read
[**markChatsUnreadBulk**](ChatsApi.md#markChatsUnreadBulk) | **POST** /api/v2/chats/unread/bulk | Mark several chats as UNread by chat ids or mark all chats as UNread
[**muteChat**](ChatsApi.md#muteChat) | **POST** /api/v2/chats/mute | Set mute mode.
[**muteChatsBulk**](ChatsApi.md#muteChatsBulk) | **POST** /api/v2/chats/mute/bulk | Mute several chats by chat ids or mute all chats
[**reopenChatsBulk**](ChatsApi.md#reopenChatsBulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats by chat ids or reopen all chats
[**searchChats**](ChatsApi.md#searchChats) | **GET** /api/v2/chats/search | Find chats by inbound or outbound messages text.
[**searchChatsByIds**](ChatsApi.md#searchChatsByIds) | **GET** /api/v2/chats/search/ids | Find chats by IDs.
[**searchChatsByReceipent**](ChatsApi.md#searchChatsByReceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient (contact, list name or phone number).
[**setChatStatus**](ChatsApi.md#setChatStatus) | **POST** /api/v2/chats/status | Set status of the chat given by ID.
[**unmuteChatsBulk**](ChatsApi.md#unmuteChatsBulk) | **POST** /api/v2/chats/unmute/bulk | Unmute several chats by chat ids or unmute all chats


# **closeChatsBulk**
> closeChatsBulk($closeChatsBulkInputObject)

Close chats by chat ids or close all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$closeChatsBulkInputObject = new \TextMagic\Models\CloseChatsBulkInputObject(); // \TextMagic\Models\CloseChatsBulkInputObject | 

try {
    $apiInstance->closeChatsBulk($closeChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->closeChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **closeChatsBulkInputObject** | [**\TextMagic\Models\CloseChatsBulkInputObject**](../Model/CloseChatsBulkInputObject.md)|  | [optional]

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


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->closeReadChats();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->closeReadChats: ', $e->getMessage(), PHP_EOL;
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
> deleteChatMessages($id, $deleteChatMessagesBulk)

Delete messages from chat by given messages ID(s).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$deleteChatMessagesBulk = new \TextMagic\Models\DeleteChatMessagesBulk(); // \TextMagic\Models\DeleteChatMessagesBulk | 

try {
    $apiInstance->deleteChatMessages($id, $deleteChatMessagesBulk);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->deleteChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **deleteChatMessagesBulk** | [**\TextMagic\Models\DeleteChatMessagesBulk**](../Model/DeleteChatMessagesBulk.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatsBulk**
> deleteChatsBulk($deleteChatsBulkInputObject)

Delete chats by given ID(s) or delete all chats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteChatsBulkInputObject = new \TextMagic\Models\DeleteChatsBulkInputObject(); // \TextMagic\Models\DeleteChatsBulkInputObject | 

try {
    $apiInstance->deleteChatsBulk($deleteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->deleteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteChatsBulkInputObject** | [**\TextMagic\Models\DeleteChatsBulkInputObject**](../Model/DeleteChatsBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllChats**
> \TextMagic\Models\InlineResponse20019 getAllChats($status, $page, $limit, $orderBy, $voice, $flat)

Get all user chats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->getAllChats: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20019**](../Model/InlineResponse20019.md)

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


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->getChat: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->getChatByPhone: ', $e->getMessage(), PHP_EOL;
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
> \TextMagic\Models\InlineResponse20020 getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice)

Fetch messages from chat with specified chat id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->getChatMessages: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20020**](../Model/InlineResponse20020.md)

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


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnreadMessagesTotal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->getUnreadMessagesTotal: ', $e->getMessage(), PHP_EOL;
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

# **markChatsReadBulk**
> markChatsReadBulk($markChatsReadBulkInputObject)

Mark several chats as read by chat ids or mark all chats as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsReadBulkInputObject = new \TextMagic\Models\MarkChatsReadBulkInputObject(); // \TextMagic\Models\MarkChatsReadBulkInputObject | 

try {
    $apiInstance->markChatsReadBulk($markChatsReadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->markChatsReadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsReadBulkInputObject** | [**\TextMagic\Models\MarkChatsReadBulkInputObject**](../Model/MarkChatsReadBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markChatsUnreadBulk**
> markChatsUnreadBulk($markChatsUnreadBulkInputObject)

Mark several chats as UNread by chat ids or mark all chats as UNread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsUnreadBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkInputObject(); // \TextMagic\Models\MarkChatsUnreadBulkInputObject | 

try {
    $apiInstance->markChatsUnreadBulk($markChatsUnreadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->markChatsUnreadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsUnreadBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkInputObject**](../Model/MarkChatsUnreadBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChat**
> \TextMagic\Models\ResourceLinkResponse muteChat($muteChatInputObject)

Set mute mode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatInputObject = new \TextMagic\Models\MuteChatInputObject(); // \TextMagic\Models\MuteChatInputObject | 

try {
    $result = $apiInstance->muteChat($muteChatInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->muteChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatInputObject** | [**\TextMagic\Models\MuteChatInputObject**](../Model/MuteChatInputObject.md)|  | [optional]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChatsBulk**
> muteChatsBulk($muteChatsBulkInputObject)

Mute several chats by chat ids or mute all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatsBulkInputObject = new \TextMagic\Models\MuteChatsBulkInputObject(); // \TextMagic\Models\MuteChatsBulkInputObject | 

try {
    $apiInstance->muteChatsBulk($muteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->muteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatsBulkInputObject** | [**\TextMagic\Models\MuteChatsBulkInputObject**](../Model/MuteChatsBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reopenChatsBulk**
> reopenChatsBulk($reopenChatsBulkInputObject)

Reopen chats by chat ids or reopen all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reopenChatsBulkInputObject = new \TextMagic\Models\ReopenChatsBulkInputObject(); // \TextMagic\Models\ReopenChatsBulkInputObject | 

try {
    $apiInstance->reopenChatsBulk($reopenChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->reopenChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reopenChatsBulkInputObject** | [**\TextMagic\Models\ReopenChatsBulkInputObject**](../Model/ReopenChatsBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChats**
> \TextMagic\Models\InlineResponse20019 searchChats($page, $limit, $query)

Find chats by inbound or outbound messages text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->searchChats: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByIds**
> \TextMagic\Models\InlineResponse20019 searchChatsByIds($page, $limit, $ids)

Find chats by IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->searchChatsByIds: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByReceipent**
> \TextMagic\Models\InlineResponse20019 searchChatsByReceipent($page, $limit, $query, $orderBy)

Find chats by recipient (contact, list name or phone number).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->searchChatsByReceipent: ', $e->getMessage(), PHP_EOL;
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

[**\TextMagic\Models\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChatStatus**
> \TextMagic\Models\ResourceLinkResponse setChatStatus($setChatStatusInputObject)

Set status of the chat given by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setChatStatusInputObject = new \TextMagic\Models\SetChatStatusInputObject(); // \TextMagic\Models\SetChatStatusInputObject | 

try {
    $result = $apiInstance->setChatStatus($setChatStatusInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->setChatStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setChatStatusInputObject** | [**\TextMagic\Models\SetChatStatusInputObject**](../Model/SetChatStatusInputObject.md)|  | [optional]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmuteChatsBulk**
> unmuteChatsBulk($unmuteChatsBulkInputObject)

Unmute several chats by chat ids or unmute all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unmuteChatsBulkInputObject = new \TextMagic\Models\UnmuteChatsBulkInputObject(); // \TextMagic\Models\UnmuteChatsBulkInputObject | 

try {
    $apiInstance->unmuteChatsBulk($unmuteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->unmuteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unmuteChatsBulkInputObject** | [**\TextMagic\Models\UnmuteChatsBulkInputObject**](../Model/UnmuteChatsBulkInputObject.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

