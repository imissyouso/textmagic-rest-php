# Swagger\Client\AuthenticationApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPhoneVerificationCode**](AuthenticationApi.md#checkPhoneVerificationCode) | **PUT** /api/v2/user/phone/verification | Check user phone verification code
[**doAuth**](AuthenticationApi.md#doAuth) | **POST** /api/v2/auth | Authenticate user by given username and password.
[**sendEmailVerificationCode**](AuthenticationApi.md#sendEmailVerificationCode) | **GET** /api/v2/user/email/verification | Send user email verification
[**sendPhoneVerificationCode**](AuthenticationApi.md#sendPhoneVerificationCode) | **GET** /api/v2/user/phone/verification | Send user phone verification
[**updatePassword**](AuthenticationApi.md#updatePassword) | **PUT** /api/v2/user/password/change | Change user password.


# **checkPhoneVerificationCode**
> checkPhoneVerificationCode($check_phone_verification_code_input_object, $x_ignore_nullable)

Check user phone verification code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_phone_verification_code_input_object = new \Swagger\Client\Model\CheckPhoneVerificationCodeInputObject(); // \Swagger\Client\Model\CheckPhoneVerificationCodeInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->checkPhoneVerificationCode($check_phone_verification_code_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->checkPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_phone_verification_code_input_object** | [**\Swagger\Client\Model\CheckPhoneVerificationCodeInputObject**](../Model/CheckPhoneVerificationCodeInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doAuth**
> \Swagger\Client\Model\DoAuthResponse doAuth($do_auth_input_object, $x_ignore_nullable)

Authenticate user by given username and password.

Returning a username and token that you should pass to the all requests (in X-TM-Username and X-TM-Key, respectively)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$do_auth_input_object = new \Swagger\Client\Model\DoAuthInputObject(); // \Swagger\Client\Model\DoAuthInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->doAuth($do_auth_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->doAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **do_auth_input_object** | [**\Swagger\Client\Model\DoAuthInputObject**](../Model/DoAuthInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\DoAuthResponse**](../Model/DoAuthResponse.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AuthenticationApi(
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
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AuthenticationApi(
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
> updatePassword($update_password_input_object, $x_ignore_nullable)

Change user password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_password_input_object = new \Swagger\Client\Model\UpdatePasswordInputObject(); // \Swagger\Client\Model\UpdatePasswordInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updatePassword($update_password_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_password_input_object** | [**\Swagger\Client\Model\UpdatePasswordInputObject**](../Model/UpdatePasswordInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

