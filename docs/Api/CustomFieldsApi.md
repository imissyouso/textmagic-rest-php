# TextMagic\CustomFieldsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomField**](CustomFieldsApi.md#deleteCustomField) | **DELETE** /api/v2/customfields/{id} | Delete a single custom field.
[**getCustomField**](CustomFieldsApi.md#getCustomField) | **GET** /api/v2/customfields/{id} | Get a single custom field.
[**updateCustomField**](CustomFieldsApi.md#updateCustomField) | **PUT** /api/v2/customfields/{id} | Update existing custom field.


# **deleteCustomField**
> deleteCustomField($id)

Delete a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteCustomField($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
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

# **getCustomField**
> \TextMagic\Models\UserCustomField getCustomField($id)

Get a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UserCustomField**](../Model/UserCustomField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \TextMagic\Models\ResourceLinkResponse updateCustomField($updateCustomFieldInputObject, $id, $xIgnoreNullValues)

Update existing custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCustomFieldInputObject = new \TextMagic\Models\UpdateCustomFieldInputObject(); // \TextMagic\Models\UpdateCustomFieldInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateCustomField($updateCustomFieldInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCustomFieldInputObject** | [**\TextMagic\Models\UpdateCustomFieldInputObject**](../Model/UpdateCustomFieldInputObject.md)|  |
 **id** | **int**|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

