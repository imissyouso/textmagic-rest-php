# Swagger\Client\CustomFieldsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomField**](CustomFieldsApi.md#createCustomField) | **POST** /api/v2/customfields | Create a new custom field from the submitted data.
[**deleteCustomField**](CustomFieldsApi.md#deleteCustomField) | **DELETE** /api/v2/customfields/{id} | Delete a single custom field.
[**getCustomField**](CustomFieldsApi.md#getCustomField) | **GET** /api/v2/customfields/{id} | Get a single custom field.
[**getCustomFields**](CustomFieldsApi.md#getCustomFields) | **GET** /api/v2/customfields | Get all contact custom fields.
[**updateCustomField**](CustomFieldsApi.md#updateCustomField) | **PUT** /api/v2/customfields/{id} | Update existing custom field.
[**updateCustomFieldValue**](CustomFieldsApi.md#updateCustomFieldValue) | **PUT** /api/v2/customfields/{id}/update | Update contact&#39;s custom field value.


# **createCustomField**
> \Swagger\Client\Model\ResourceLinkResponse createCustomField($create_custom_field_input_object, $x_ignore_nullable)

Create a new custom field from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_input_object = new \Swagger\Client\Model\CreateCustomFieldInputObject(); // \Swagger\Client\Model\CreateCustomFieldInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->createCustomField($create_custom_field_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_custom_field_input_object** | [**\Swagger\Client\Model\CreateCustomFieldInputObject**](../Model/CreateCustomFieldInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomField**
> deleteCustomField($id)

Delete a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
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
> \Swagger\Client\Model\UserCustomField getCustomField($id)

Get a single custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
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

[**\Swagger\Client\Model\UserCustomField**](../Model/UserCustomField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFields**
> map[string,object] getCustomFields($page, $limit)

Get all contact custom fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getCustomFields($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \Swagger\Client\Model\ResourceLinkResponse updateCustomField($update_custom_field_input_object, $id, $x_ignore_nullable)

Update existing custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_custom_field_input_object = new \Swagger\Client\Model\UpdateCustomFieldInputObject(); // \Swagger\Client\Model\UpdateCustomFieldInputObject | 
$id = 1; // int | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->updateCustomField($update_custom_field_input_object, $id, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_custom_field_input_object** | [**\Swagger\Client\Model\UpdateCustomFieldInputObject**](../Model/UpdateCustomFieldInputObject.md)|  |
 **id** | **int**|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldValue**
> \Swagger\Client\Model\ResourceLinkResponse updateCustomFieldValue($update_custom_field_value_input_object, $id, $x_ignore_nullable)

Update contact's custom field value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_custom_field_value_input_object = new \Swagger\Client\Model\UpdateCustomFieldValueInputObject(); // \Swagger\Client\Model\UpdateCustomFieldValueInputObject | 
$id = "id_example"; // string | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->updateCustomFieldValue($update_custom_field_value_input_object, $id, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updateCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_custom_field_value_input_object** | [**\Swagger\Client\Model\UpdateCustomFieldValueInputObject**](../Model/UpdateCustomFieldValueInputObject.md)|  |
 **id** | **string**|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

