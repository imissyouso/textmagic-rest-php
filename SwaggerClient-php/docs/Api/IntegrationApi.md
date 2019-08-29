# Swagger\Client\IntegrationApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPushToken**](IntegrationApi.md#createPushToken) | **POST** /api/v2/push/tokens | Add or update a device token.
[**deletePushToken**](IntegrationApi.md#deletePushToken) | **DELETE** /api/v2/push/tokens/{type}/{deviceId} | Delete a push notification device token.
[**getPushTokens**](IntegrationApi.md#getPushTokens) | **GET** /api/v2/push/tokens | Get all device tokens assigned to the current account


# **createPushToken**
> createPushToken($create_push_token_input_object, $x_ignore_nullable)

Add or update a device token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_push_token_input_object = new \Swagger\Client\Model\CreatePushTokenInputObject(); // \Swagger\Client\Model\CreatePushTokenInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->createPushToken($create_push_token_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createPushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_push_token_input_object** | [**\Swagger\Client\Model\CreatePushTokenInputObject**](../Model/CreatePushTokenInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePushToken**
> deletePushToken($type, $device_id)

Delete a push notification device token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | 
$device_id = 56; // int | 

try {
    $apiInstance->deletePushToken($type, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deletePushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **device_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushTokens**
> \Swagger\Client\Model\GetPushTokensResponse getPushTokens()

Get all device tokens assigned to the current account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IntegrationApi(
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

[**\Swagger\Client\Model\GetPushTokensResponse**](../Model/GetPushTokensResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

