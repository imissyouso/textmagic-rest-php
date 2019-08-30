# TextMagic\ContactNotesApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactNote**](ContactNotesApi.md#deleteContactNote) | **DELETE** /api/v2/notes/{id} | Delete a single contact note.
[**getContactNote**](ContactNotesApi.md#getContactNote) | **GET** /api/v2/notes/{id} | Get a single contact note.
[**updateContactNote**](ContactNotesApi.md#updateContactNote) | **PUT** /api/v2/notes/{id} | Update existing contact note.


# **deleteContactNote**
> deleteContactNote($id)

Delete a single contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteContactNote($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->deleteContactNote: ', $e->getMessage(), PHP_EOL;
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

# **getContactNote**
> \TextMagic\Models\ContactNote getContactNote($id)

Get a single contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getContactNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->getContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactNote**
> \TextMagic\Models\ResourceLinkResponse updateContactNote($updateContactNoteInputObject, $id, $xIgnoreNullValues)

Update existing contact note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateContactNoteInputObject = new \TextMagic\Models\UpdateContactNoteInputObject(); // \TextMagic\Models\UpdateContactNoteInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateContactNote($updateContactNoteInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->updateContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactNoteInputObject** | [**\TextMagic\Models\UpdateContactNoteInputObject**](../Model/UpdateContactNoteInputObject.md)|  |
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

