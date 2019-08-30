# TextMagic\UserApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentUser**](UserApi.md#getCurrentUser) | **GET** /api/v2/user | Get current user info.
[**getDisallowedRules**](UserApi.md#getDisallowedRules) | **GET** /api/v2/user/disallowed-rules | Get an array of all rules that are disallowed to the current account.
[**updateCurrentUser**](UserApi.md#updateCurrentUser) | **PUT** /api/v2/user | Update current user info.


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
> \TextMagic\Models\UpdateCurrentUserResponse updateCurrentUser($updateCurrentUserInputObject, $xIgnoreNullValues)

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
$updateCurrentUserInputObject = new \TextMagic\Models\UpdateCurrentUserInputObject(); // \TextMagic\Models\UpdateCurrentUserInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateCurrentUser($updateCurrentUserInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCurrentUserInputObject** | [**\TextMagic\Models\UpdateCurrentUserInputObject**](../Model/UpdateCurrentUserInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

