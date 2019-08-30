# TextMagic\ContactsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /api/v2/contacts/{id} | Delete a single contact.
[**getContact**](ContactsApi.md#getContact) | **GET** /api/v2/contacts/{id} | Get a single contact.
[**getContactByPhone**](ContactsApi.md#getContactByPhone) | **GET** /api/v2/contacts/phone/{phone} | Get a single contact by phone number.
[**getContactIfBlocked**](ContactsApi.md#getContactIfBlocked) | **GET** /api/v2/contacts/block/phone | Check is that phone number blocked
[**getContactsAutocomplete**](ContactsApi.md#getContactsAutocomplete) | **GET** /api/v2/contacts/autocomplete | Get contacts autocomplete suggestions by given search term.
[**getUnsubscribedContact**](ContactsApi.md#getUnsubscribedContact) | **GET** /api/v2/unsubscribers/{id} | Get a single unsubscribed contact.
[**updateContact**](ContactsApi.md#updateContact) | **PUT** /api/v2/contacts/{id} | Update existing contact.


# **deleteContact**
> deleteContact($id)

Delete a single contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
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

# **getContact**
> \TextMagic\Models\Contact getContact($id)

Get a single contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | The contact id

try {
    $result = $apiInstance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The contact id |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactByPhone**
> \TextMagic\Models\Contact getContactByPhone($phone)

Get a single contact by phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "phone_example"; // string | 

try {
    $result = $apiInstance->getContactByPhone($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactIfBlocked**
> \TextMagic\Models\Contact getContactIfBlocked($phone)

Check is that phone number blocked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = "9997339956475"; // string | Phone number to check

try {
    $result = $apiInstance->getContactIfBlocked($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactIfBlocked: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| Phone number to check |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsAutocomplete**
> \TextMagic\Models\GetContactsAutocompleteResponse[] getContactsAutocomplete($query, $limit, $lists)

Get contacts autocomplete suggestions by given search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "\"A\""; // string | Find recipients by specified search query
$limit = 10; // int | How many results to return
$lists = 0; // int | Should lists be returned or not

try {
    $result = $apiInstance->getContactsAutocomplete($query, $limit, $lists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Find recipients by specified search query |
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **lists** | **int**| Should lists be returned or not | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetContactsAutocompleteResponse[]**](../Model/GetContactsAutocompleteResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribedContact**
> \TextMagic\Models\UnsubscribedContact getUnsubscribedContact($id)

Get a single unsubscribed contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getUnsubscribedContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getUnsubscribedContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UnsubscribedContact**](../Model/UnsubscribedContact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \TextMagic\Models\ResourceLinkResponse updateContact($updateContactInputObject, $id, $xIgnoreNullValues)

Update existing contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateContactInputObject = new \TextMagic\Models\UpdateContactInputObject(); // \TextMagic\Models\UpdateContactInputObject | 
$id = 1; // int | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->updateContact($updateContactInputObject, $id, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactInputObject** | [**\TextMagic\Models\UpdateContactInputObject**](../Model/UpdateContactInputObject.md)|  |
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

