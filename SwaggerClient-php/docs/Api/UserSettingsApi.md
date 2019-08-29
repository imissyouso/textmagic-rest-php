# Swagger\Client\UserSettingsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableSenderSettingOptions**](UserSettingsApi.md#getAvailableSenderSettingOptions) | **GET** /api/v2/sources | Get all available sender setting options which could be used in \&quot;from\&quot; parameter of POST messages method.
[**getBalanceNotificationOptions**](UserSettingsApi.md#getBalanceNotificationOptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance
[**getBalanceNotificationSettings**](UserSettingsApi.md#getBalanceNotificationSettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings
[**getCallbackSettings**](UserSettingsApi.md#getCallbackSettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings
[**getInboundMessagesNotificationSettings**](UserSettingsApi.md#getInboundMessagesNotificationSettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings
[**updateBalanceNotificationSettings**](UserSettingsApi.md#updateBalanceNotificationSettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings
[**updateCallbackSettings**](UserSettingsApi.md#updateCallbackSettings) | **PUT** /api/v2/callback/settings | Update callback URL settings
[**updateChatDesktopNotificationSettings**](UserSettingsApi.md#updateChatDesktopNotificationSettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings
[**updateInboundMessagesNotificationSettings**](UserSettingsApi.md#updateInboundMessagesNotificationSettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings


# **getAvailableSenderSettingOptions**
> \Swagger\Client\Model\GetAvailableSenderSettingOptionsResponse getAvailableSenderSettingOptions($country)

Get all available sender setting options which could be used in \"from\" parameter of POST messages method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
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
    echo 'Exception when calling UserSettingsApi->getAvailableSenderSettingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Return sender setting options available in specific country only. Two upper case characters | [optional]

### Return type

[**\Swagger\Client\Model\GetAvailableSenderSettingOptionsResponse**](../Model/GetAvailableSenderSettingOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationOptions**
> \Swagger\Client\Model\GetBalanceNotificationOptionsResponse getBalanceNotificationOptions()

Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->getBalanceNotificationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetBalanceNotificationOptionsResponse**](../Model/GetBalanceNotificationOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationSettings**
> \Swagger\Client\Model\GetBalanceNotificationSettingsResponse getBalanceNotificationSettings()

Get balance notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->getBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetBalanceNotificationSettingsResponse**](../Model/GetBalanceNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallbackSettings**
> \Swagger\Client\Model\GetCallbackSettingsResponse getCallbackSettings()

Fetch callback URL settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallbackSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->getCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetCallbackSettingsResponse**](../Model/GetCallbackSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundMessagesNotificationSettings**
> \Swagger\Client\Model\GetInboundMessagesNotificationSettingsResponse getInboundMessagesNotificationSettings()

Get inbound messages notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboundMessagesNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->getInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetInboundMessagesNotificationSettingsResponse**](../Model/GetInboundMessagesNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBalanceNotificationSettings**
> updateBalanceNotificationSettings($update_balance_notification_settings_input_object, $x_ignore_nullable)

Update balance notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_balance_notification_settings_input_object = new \Swagger\Client\Model\UpdateBalanceNotificationSettingsInputObject(); // \Swagger\Client\Model\UpdateBalanceNotificationSettingsInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updateBalanceNotificationSettings($update_balance_notification_settings_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->updateBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_balance_notification_settings_input_object** | [**\Swagger\Client\Model\UpdateBalanceNotificationSettingsInputObject**](../Model/UpdateBalanceNotificationSettingsInputObject.md)|  | [optional]
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCallbackSettings**
> updateCallbackSettings($update_callback_settings_input_object, $x_ignore_nullable)

Update callback URL settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_callback_settings_input_object = new \Swagger\Client\Model\UpdateCallbackSettingsInputObject(); // \Swagger\Client\Model\UpdateCallbackSettingsInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updateCallbackSettings($update_callback_settings_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->updateCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_callback_settings_input_object** | [**\Swagger\Client\Model\UpdateCallbackSettingsInputObject**](../Model/UpdateCallbackSettingsInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChatDesktopNotificationSettings**
> updateChatDesktopNotificationSettings($update_chat_desktop_notification_settings_input_object, $x_ignore_nullable)

Update chat desktop notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_chat_desktop_notification_settings_input_object = new \Swagger\Client\Model\UpdateChatDesktopNotificationSettingsInputObject(); // \Swagger\Client\Model\UpdateChatDesktopNotificationSettingsInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updateChatDesktopNotificationSettings($update_chat_desktop_notification_settings_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->updateChatDesktopNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_chat_desktop_notification_settings_input_object** | [**\Swagger\Client\Model\UpdateChatDesktopNotificationSettingsInputObject**](../Model/UpdateChatDesktopNotificationSettingsInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInboundMessagesNotificationSettings**
> updateInboundMessagesNotificationSettings($update_inbound_messages_notification_settings_input_object, $x_ignore_nullable)

Update inbound messages notification settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_inbound_messages_notification_settings_input_object = new \Swagger\Client\Model\UpdateInboundMessagesNotificationSettingsInputObject(); // \Swagger\Client\Model\UpdateInboundMessagesNotificationSettingsInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updateInboundMessagesNotificationSettings($update_inbound_messages_notification_settings_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->updateInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_inbound_messages_notification_settings_input_object** | [**\Swagger\Client\Model\UpdateInboundMessagesNotificationSettingsInputObject**](../Model/UpdateInboundMessagesNotificationSettingsInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

