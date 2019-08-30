# TextMagic\TemplatesApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTemplate**](TemplatesApi.md#deleteTemplate) | **DELETE** /api/v2/templates/{id} | Delete a single template.
[**getTemplate**](TemplatesApi.md#getTemplate) | **GET** /api/v2/templates/{id} | Get a single template.
[**updateTemplate**](TemplatesApi.md#updateTemplate) | **PUT** /api/v2/templates/{id} | Update existing template.


# **deleteTemplate**
> deleteTemplate($id)

Delete a single template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getTemplate**
> \TextMagic\Models\MessageTemplate getTemplate($id)

Get a single template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \TextMagic\Models\ResourceLinkResponse updateTemplate($updateTemplateInputObject, $id, $xIgnoreNullValues)

Update existing template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateTemplateInputObject = new \TextMagic\Models\UpdateTemplateInputObject(); // \TextMagic\Models\UpdateTemplateInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateTemplate($updateTemplateInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateTemplateInputObject** | [**\TextMagic\Models\UpdateTemplateInputObject**](../Model/UpdateTemplateInputObject.md)|  |
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

