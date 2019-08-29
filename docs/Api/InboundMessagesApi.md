# TextMagic\InboundMessagesApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInboundMessage**](InboundMessagesApi.md#deleteInboundMessage) | **DELETE** /api/v2/replies/{id} | Delete the incoming message.
[**deleteInboundMessagesBulk**](InboundMessagesApi.md#deleteInboundMessagesBulk) | **POST** /api/v2/replies/delete | Delete inbound messages by given ID(s) or delete all inbound messages.
[**getAllInboundMessages**](InboundMessagesApi.md#getAllInboundMessages) | **GET** /api/v2/replies | Get all inbox messages.
[**getInboundMessage**](InboundMessagesApi.md#getInboundMessage) | **GET** /api/v2/replies/{id} | Get a single inbox message.
[**searchInboundMessages**](InboundMessagesApi.md#searchInboundMessages) | **GET** /api/v2/replies/search | Find inbound messages by given parameters.


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


$apiInstance = new TextMagic\Api\InboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteInboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling InboundMessagesApi->deleteInboundMessage: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\InboundMessagesApi(
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
    echo 'Exception when calling InboundMessagesApi->deleteInboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\InboundMessagesApi(
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
    echo 'Exception when calling InboundMessagesApi->getAllInboundMessages: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\InboundMessagesApi(
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
    echo 'Exception when calling InboundMessagesApi->getInboundMessage: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\InboundMessagesApi(
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
    echo 'Exception when calling InboundMessagesApi->searchInboundMessages: ', $e->getMessage(), PHP_EOL;
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

