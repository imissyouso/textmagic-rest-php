# TextMagic\IntegrationApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPushToken**](IntegrationApi.md#createPushToken) | **POST** /api/v2/push/tokens | Add or update a device token.
[**deletePushToken**](IntegrationApi.md#deletePushToken) | **DELETE** /api/v2/push/tokens/{type}/{deviceId} | Delete a push notification device token.
[**getPushTokens**](IntegrationApi.md#getPushTokens) | **GET** /api/v2/push/tokens | Get all device tokens assigned to the current account


# **createPushToken**
> createPushToken($createPushTokenInputObject, $xIgnoreNullable)

Add or update a device token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createPushTokenInputObject = new \TextMagic\Models\CreatePushTokenInputObject(); // \TextMagic\Models\CreatePushTokenInputObject | 
$xIgnoreNullable = true; // bool | 

try {
    $apiInstance->createPushToken($createPushTokenInputObject, $xIgnoreNullable);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createPushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPushTokenInputObject** | [**\TextMagic\Models\CreatePushTokenInputObject**](../Model/CreatePushTokenInputObject.md)|  |
 **xIgnoreNullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

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


$apiInstance = new TextMagic\Api\IntegrationApi(
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
    echo 'Exception when calling IntegrationApi->deletePushToken: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPushTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getPushTokens: ', $e->getMessage(), PHP_EOL;
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

