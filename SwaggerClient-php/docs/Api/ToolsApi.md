# Swagger\Client\ToolsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doCarrierLookup**](ToolsApi.md#doCarrierLookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup
[**doEmailLookup**](ToolsApi.md#doEmailLookup) | **GET** /api/v2/email-lookups/{email} | Validate Email address using Email Lookup tool


# **doCarrierLookup**
> \Swagger\Client\Model\DoCarrierLookupResponse doCarrierLookup($phone, $country)

Carrier Lookup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "\"1-541-754-3010\""; // string | 
$country = "US"; // string | Country code for local formatted numbers

try {
    $result = $apiInstance->doCarrierLookup($phone, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->doCarrierLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |
 **country** | **string**| Country code for local formatted numbers | [optional] [default to US]

### Return type

[**\Swagger\Client\Model\DoCarrierLookupResponse**](../Model/DoCarrierLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doEmailLookup**
> \Swagger\Client\Model\DoEmailLookupResponse doEmailLookup($email)

Validate Email address using Email Lookup tool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "\"andrey.v@textmagic.biz\""; // string | 

try {
    $result = $apiInstance->doEmailLookup($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->doEmailLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\Swagger\Client\Model\DoEmailLookupResponse**](../Model/DoEmailLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

