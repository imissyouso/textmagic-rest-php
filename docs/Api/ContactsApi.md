# TextMagic\ContactsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**blockContact**](ContactsApi.md#blockContact) | **POST** /api/v2/contacts/block | Block contact from inbound and outbound communication by phone number.
[**createContact**](ContactsApi.md#createContact) | **POST** /api/v2/contacts | Create a new contact from the submitted data.
[**deleteAllContacts**](ContactsApi.md#deleteAllContacts) | **DELETE** /api/v2/contact/all | Delete all contacts.
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /api/v2/contacts/{id} | Delete a single contact.
[**deleteContactAvatar**](ContactsApi.md#deleteContactAvatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar for the contact.
[**deleteContactsByIds**](ContactsApi.md#deleteContactsByIds) | **POST** /api/v2/contacts/delete | Delete contact by given ID(s) or delete all contacts.
[**getBlockedContacts**](ContactsApi.md#getBlockedContacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts.
[**getContact**](ContactsApi.md#getContact) | **GET** /api/v2/contacts/{id} | Get a single contact.
[**getContactByPhone**](ContactsApi.md#getContactByPhone) | **GET** /api/v2/contacts/phone/{phone} | Get a single contact by phone number.
[**getContactIfBlocked**](ContactsApi.md#getContactIfBlocked) | **GET** /api/v2/contacts/block/phone | Check is that phone number blocked
[**getContactsAutocomplete**](ContactsApi.md#getContactsAutocomplete) | **GET** /api/v2/contacts/autocomplete | Get contacts autocomplete suggestions by given search term.
[**getFavourites**](ContactsApi.md#getFavourites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists.
[**getUnsubscribedContact**](ContactsApi.md#getUnsubscribedContact) | **GET** /api/v2/unsubscribers/{id} | Get a single unsubscribed contact.
[**getUnsubscribers**](ContactsApi.md#getUnsubscribers) | **GET** /api/v2/unsubscribers | Get all contact have unsubscribed from your communication.
[**getUserContacts**](ContactsApi.md#getUserContacts) | **GET** /api/v2/contacts | Get all user contacts.
[**searchContacts**](ContactsApi.md#searchContacts) | **GET** /api/v2/contacts/search | Find user contacts by given parameters.
[**unblockContact**](ContactsApi.md#unblockContact) | **POST** /api/v2/contacts/unblock | Unblock contact by phone number.
[**unblockContactsBulk**](ContactsApi.md#unblockContactsBulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock several contacts by blocked contact ids or unblock all contacts
[**unsubscribeContact**](ContactsApi.md#unsubscribeContact) | **POST** /api/v2/unsubscribers | Unsubscribe contact from your communication by phone number.
[**updateContact**](ContactsApi.md#updateContact) | **PUT** /api/v2/contacts/{id} | Update existing contact.
[**uploadContactAvatar**](ContactsApi.md#uploadContactAvatar) | **POST** /api/v2/contacts/{id}/avatar | Add an avatar for the contact.


# **blockContact**
> \TextMagic\Models\ResourceLinkResponse blockContact($blockContactInputObject, $xIgnoreNullValues)

Block contact from inbound and outbound communication by phone number.

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
$blockContactInputObject = new \TextMagic\Models\BlockContactInputObject(); // \TextMagic\Models\BlockContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->blockContact($blockContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->blockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockContactInputObject** | [**\TextMagic\Models\BlockContactInputObject**](../Model/BlockContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \TextMagic\Models\ResourceLinkResponse createContact($createContactInputObject, $xIgnoreNullValues)

Create a new contact from the submitted data.

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
$createContactInputObject = new \TextMagic\Models\CreateContactInputObject(); // \TextMagic\Models\CreateContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->createContact($createContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createContactInputObject** | [**\TextMagic\Models\CreateContactInputObject**](../Model/CreateContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllContacts**
> deleteAllContacts()

Delete all contacts.

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

try {
    $apiInstance->deleteAllContacts();
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteAllContacts: ', $e->getMessage(), PHP_EOL;
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

# **deleteContactAvatar**
> deleteContactAvatar($id)

Delete an avatar for the contact.

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
$id = 56; // int | 

try {
    $apiInstance->deleteContactAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactAvatar: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsByIds**
> deleteContactsByIds($deleteContactsByIdsInputObject, $xIgnoreNullValues)

Delete contact by given ID(s) or delete all contacts.

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
$deleteContactsByIdsInputObject = new \TextMagic\Models\DeleteContactsByIdsInputObject(); // \TextMagic\Models\DeleteContactsByIdsInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->deleteContactsByIds($deleteContactsByIdsInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteContactsByIdsInputObject** | [**\TextMagic\Models\DeleteContactsByIdsInputObject**](../Model/DeleteContactsByIdsInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockedContacts**
> \TextMagic\Models\GetBlockedContactsResponse getBlockedContacts($page, $limit, $query, $orderBy, $direction)

Get blocked contacts.

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
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "query_example"; // string | Find blocked contacts by specified search query
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getBlockedContacts($page, $limit, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getBlockedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find blocked contacts by specified search query | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetBlockedContactsResponse**](../Model/GetBlockedContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

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

# **getFavourites**
> \TextMagic\Models\GetFavouritesResponse getFavourites($page, $limit, $query)

Get favorite contacts and lists.

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
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$query = "A"; // string | Find contacts or lists by specified search query

try {
    $result = $apiInstance->getFavourites($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFavourites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **query** | **string**| Find contacts or lists by specified search query | [optional] [default to A]

### Return type

[**\TextMagic\Models\GetFavouritesResponse**](../Model/GetFavouritesResponse.md)

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

# **getUnsubscribers**
> \TextMagic\Models\GetUnsubscribersResponse getUnsubscribers($page, $limit)

Get all contact have unsubscribed from your communication.

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
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getUnsubscribers($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getUnsubscribers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetUnsubscribersResponse**](../Model/GetUnsubscribersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserContacts**
> \TextMagic\Models\GetUserContactsResponse getUserContacts($page, $limit, $shared, $orderBy, $direction)

Get all user contacts.

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
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$shared = 0; // int | Should shared contacts to be included
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getUserContacts($page, $limit, $shared, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getUserContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **shared** | **int**| Should shared contacts to be included | [optional] [default to 0]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetUserContactsResponse**](../Model/GetUserContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContacts**
> \TextMagic\Models\SearchContactsResponse searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $country, $orderBy, $direction)

Find user contacts by given parameters.

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
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$shared = 0; // int | Should shared contacts to be included
$ids = "ids_example"; // string | Find contact by ID(s)
$listId = 56; // int | Find contact by List ID
$includeBlocked = 56; // int | Should blocked contacts to be included
$query = "query_example"; // string | Find contacts by specified search query
$local = 0; // int | Treat phone number passed in 'query' field as local. Default is 0
$country = "country_example"; // string | 2-letter ISO country code for local phone numbers, used when 'local' is set to true. Default is account country
$orderBy = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $country, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **shared** | **int**| Should shared contacts to be included | [optional] [default to 0]
 **ids** | **string**| Find contact by ID(s) | [optional]
 **listId** | **int**| Find contact by List ID | [optional]
 **includeBlocked** | **int**| Should blocked contacts to be included | [optional]
 **query** | **string**| Find contacts by specified search query | [optional]
 **local** | **int**| Treat phone number passed in &#39;query&#39; field as local. Default is 0 | [optional] [default to 0]
 **country** | **string**| 2-letter ISO country code for local phone numbers, used when &#39;local&#39; is set to true. Default is account country | [optional]
 **orderBy** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchContactsResponse**](../Model/SearchContactsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContact**
> unblockContact($unblockContactInputObject, $xIgnoreNullValues)

Unblock contact by phone number.

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
$unblockContactInputObject = new \TextMagic\Models\UnblockContactInputObject(); // \TextMagic\Models\UnblockContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->unblockContact($unblockContactInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->unblockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactInputObject** | [**\TextMagic\Models\UnblockContactInputObject**](../Model/UnblockContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContactsBulk**
> unblockContactsBulk($unblockContactsBulkInputObject, $xIgnoreNullValues)

Unblock several contacts by blocked contact ids or unblock all contacts

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
$unblockContactsBulkInputObject = new \TextMagic\Models\UnblockContactsBulkInputObject(); // \TextMagic\Models\UnblockContactsBulkInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->unblockContactsBulk($unblockContactsBulkInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->unblockContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactsBulkInputObject** | [**\TextMagic\Models\UnblockContactsBulkInputObject**](../Model/UnblockContactsBulkInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeContact**
> \TextMagic\Models\ResourceLinkResponse unsubscribeContact($unsubscribeContactInputObject, $xIgnoreNullValues)

Unsubscribe contact from your communication by phone number.

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
$unsubscribeContactInputObject = new \TextMagic\Models\UnsubscribeContactInputObject(); // \TextMagic\Models\UnsubscribeContactInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $result = $apiInstance->unsubscribeContact($unsubscribeContactInputObject, $xIgnoreNullValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsubscribeContactInputObject** | [**\TextMagic\Models\UnsubscribeContactInputObject**](../Model/UnsubscribeContactInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

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

# **uploadContactAvatar**
> \TextMagic\Models\ResourceLinkResponse uploadContactAvatar($image, $id)

Add an avatar for the contact.

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
$image = "/path/to/file.txt"; // \SplFileObject | Contact avatar. Should be PNG or JPG file not more than 10 MB
$id = 56; // int | 

try {
    $result = $apiInstance->uploadContactAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->uploadContactAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| Contact avatar. Should be PNG or JPG file not more than 10 MB |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

