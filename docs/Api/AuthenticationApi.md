# TextMagic\AuthenticationApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPhoneVerificationCode**](AuthenticationApi.md#checkPhoneVerificationCode) | **PUT** /api/v2/user/phone/verification | Check user phone verification code
[**doAuth**](AuthenticationApi.md#doAuth) | **POST** /api/v2/auth | Authenticate user by given username and password.
[**sendEmailVerificationCode**](AuthenticationApi.md#sendEmailVerificationCode) | **GET** /api/v2/user/email/verification | Send user email verification
[**sendPhoneVerificationCode**](AuthenticationApi.md#sendPhoneVerificationCode) | **GET** /api/v2/user/phone/verification | Send user phone verification
[**updatePassword**](AuthenticationApi.md#updatePassword) | **PUT** /api/v2/user/password/change | Change user password.


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

# **doAuth**
> \TextMagic\Models\DoAuthResponse doAuth($doAuthInputObject, $xIgnoreNullValues)

Authenticate user by given username and password.

Returning a username and token that you should pass to the all requests (in X-TM-Username and X-TM-Key, respectively)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TextMagic\Api\AuthenticationApi(
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
    echo 'Exception when calling AuthenticationApi->doAuth: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sendEmailVerificationCode();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendEmailVerificationCode: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sendPhoneVerificationCode();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TextMagic\Api\AuthenticationApi(
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
    echo 'Exception when calling AuthenticationApi->updatePassword: ', $e->getMessage(), PHP_EOL;
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

