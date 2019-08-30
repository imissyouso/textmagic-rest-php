# TextMagic\OutboundMessageSessionsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMessageSession**](OutboundMessageSessionsApi.md#deleteMessageSession) | **DELETE** /api/v2/sessions/{id} | Delete a message session, together with all nested messages.
[**getMessageSession**](OutboundMessageSessionsApi.md#getMessageSession) | **GET** /api/v2/sessions/{id} | Get a message session.
[**getMessageSessionStat**](OutboundMessageSessionsApi.md#getMessageSessionStat) | **GET** /api/v2/sessions/{id}/stat | Get sending session statistics.


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


$apiInstance = new TextMagic\Api\OutboundMessageSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteMessageSession($id);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessageSessionsApi->deleteMessageSession: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessageSessionsApi(
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
    echo 'Exception when calling OutboundMessageSessionsApi->getMessageSession: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\OutboundMessageSessionsApi(
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
    echo 'Exception when calling OutboundMessageSessionsApi->getMessageSessionStat: ', $e->getMessage(), PHP_EOL;
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

