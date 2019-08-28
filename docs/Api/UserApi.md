# TextMagic\UserApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAvatar**](UserApi.md#deleteAvatar) | **DELETE** /api/v2/user/avatar | Delete an avatar for the current user.\\
[**getCurrentUser**](UserApi.md#getCurrentUser) | **GET** /api/v2/user | Get current user info.
[**getDisallowedRules**](UserApi.md#getDisallowedRules) | **GET** /api/v2/user/disallowed-rules | Get an array of all rules that are disallowed to the current account.
[**updateCurrentUser**](UserApi.md#updateCurrentUser) | **PUT** /api/v2/user | Update current user info.
[**uploadAvatar**](UserApi.md#uploadAvatar) | **POST** /api/v2/user/avatar | Add an avatar for the current user.


# **deleteAvatar**
> deleteAvatar()

Delete an avatar for the current user.\\

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAvatar();
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteAvatar: ', $e->getMessage(), PHP_EOL;
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

# **getCurrentUser**
> \TextMagic\Models\User getCurrentUser()

Get current user info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisallowedRules**
> string[] getDisallowedRules()

Get an array of all rules that are disallowed to the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDisallowedRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getDisallowedRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrentUser**
> \TextMagic\Models\UpdateCurrentUserResponse updateCurrentUser($updateUserInputObject)

Update current user info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateUserInputObject = new \TextMagic\Models\UpdateCurrentUserResponse(); // \TextMagic\Models\UpdateCurrentUserResponse | 

try {
    $result = $apiInstance->updateCurrentUser($updateUserInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateUserInputObject** | [**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)|  | [optional]

### Return type

[**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAvatar**
> uploadAvatar($image)

Add an avatar for the current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | User avatar. Should be PNG or JPG file not more than 10 MB

try {
    $apiInstance->uploadAvatar($image);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->uploadAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| User avatar. Should be PNG or JPG file not more than 10 MB |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

