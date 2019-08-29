# Swagger\Client\ContactListsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignContactsToList**](ContactListsApi.md#assignContactsToList) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to the specified list.
[**clearAndAssignContactsToList**](ContactListsApi.md#clearAndAssignContactsToList) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts.
[**createList**](ContactListsApi.md#createList) | **POST** /api/v2/lists | Create a new list from the submitted data.
[**deleteContactsFromList**](ContactListsApi.md#deleteContactsFromList) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from the specified list.
[**deleteList**](ContactListsApi.md#deleteList) | **DELETE** /api/v2/lists/{id} | Delete a single list.
[**deleteListAvatar**](ContactListsApi.md#deleteListAvatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for the list.
[**deleteListContactsBulk**](ContactListsApi.md#deleteListContactsBulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contact from list by given ID(s) or all contacts from list.
[**deleteListsBulk**](ContactListsApi.md#deleteListsBulk) | **POST** /api/v2/lists/delete | Delete list by given ID(s) or delete all lists.
[**getContactsByListId**](ContactListsApi.md#getContactsByListId) | **GET** /api/v2/lists/{id}/contacts | Fetch user contacts by given group id.
[**getList**](ContactListsApi.md#getList) | **GET** /api/v2/lists/{id} | Get a single list.
[**getListContactsIds**](ContactListsApi.md#getListContactsIds) | **GET** /api/v2/lists/{id}/contacts/ids | Fetch all contacts IDs belonging to the list with ID.
[**getListsOfContact**](ContactListsApi.md#getListsOfContact) | **GET** /api/v2/contacts/{id}/lists | Return lists which contact belongs to.
[**getUserLists**](ContactListsApi.md#getUserLists) | **GET** /api/v2/lists | Get all user lists.
[**searchLists**](ContactListsApi.md#searchLists) | **GET** /api/v2/lists/search | Find contact lists by given parameters.
[**updateList**](ContactListsApi.md#updateList) | **PUT** /api/v2/lists/{id} | Update existing list.
[**uploadListAvatar**](ContactListsApi.md#uploadListAvatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for the list.


# **assignContactsToList**
> \Swagger\Client\Model\ResourceLinkResponse assignContactsToList($assign_contacts_to_list_object, $id)

Assign contacts to the specified list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assign_contacts_to_list_object = new \Swagger\Client\Model\AssignContactsToListObject(); // \Swagger\Client\Model\AssignContactsToListObject | Contact ID(s), separated by comma or 'all' to add all contacts belonging to the current user
$id = 1; // int | 

try {
    $result = $apiInstance->assignContactsToList($assign_contacts_to_list_object, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->assignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assign_contacts_to_list_object** | [**\Swagger\Client\Model\AssignContactsToListObject**](../Model/AssignContactsToListObject.md)| Contact ID(s), separated by comma or &#39;all&#39; to add all contacts belonging to the current user |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearAndAssignContactsToList**
> \Swagger\Client\Model\ResourceLinkResponse clearAndAssignContactsToList($clear_and_assign_contacts_to_list_input_i_object, $id)

Reset list members to the specified contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clear_and_assign_contacts_to_list_input_i_object = new \Swagger\Client\Model\ClearAndAssignContactsToListInputIObject(); // \Swagger\Client\Model\ClearAndAssignContactsToListInputIObject | Contact ID(s), separated by comma or 'all' to add all contacts belonging to the current user
$id = 1; // int | 

try {
    $result = $apiInstance->clearAndAssignContactsToList($clear_and_assign_contacts_to_list_input_i_object, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->clearAndAssignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clear_and_assign_contacts_to_list_input_i_object** | [**\Swagger\Client\Model\ClearAndAssignContactsToListInputIObject**](../Model/ClearAndAssignContactsToListInputIObject.md)| Contact ID(s), separated by comma or &#39;all&#39; to add all contacts belonging to the current user |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createList**
> \Swagger\Client\Model\ResourceLinkResponse createList($create_list_input_object, $x_ignore_nullable)

Create a new list from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_list_input_object = new \Swagger\Client\Model\CreateListInputObject(); // \Swagger\Client\Model\CreateListInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->createList($create_list_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->createList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_list_input_object** | [**\Swagger\Client\Model\CreateListInputObject**](../Model/CreateListInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsFromList**
> deleteContactsFromList($delete_contacs_from_list_object, $id)

Unassign contacts from the specified list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_contacs_from_list_object = new \Swagger\Client\Model\DeleteContacsFromListObject(); // \Swagger\Client\Model\DeleteContacsFromListObject | Contact ID(s), separated by comma
$id = 1; // int | 

try {
    $apiInstance->deleteContactsFromList($delete_contacs_from_list_object, $id);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteContactsFromList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_contacs_from_list_object** | [**\Swagger\Client\Model\DeleteContacsFromListObject**](../Model/DeleteContacsFromListObject.md)| Contact ID(s), separated by comma |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteList**
> deleteList($id)

Delete a single list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteList($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteList: ', $e->getMessage(), PHP_EOL;
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

# **deleteListAvatar**
> deleteListAvatar($id)

Delete an avatar for the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteListAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteListAvatar: ', $e->getMessage(), PHP_EOL;
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

# **deleteListContactsBulk**
> deleteListContactsBulk($delete_list_contacts_bulk_input_object, $id, $x_ignore_nullable)

Delete contact from list by given ID(s) or all contacts from list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_list_contacts_bulk_input_object = new \Swagger\Client\Model\DeleteListContactsBulkInputObject(); // \Swagger\Client\Model\DeleteListContactsBulkInputObject | 
$id = 1; // int | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->deleteListContactsBulk($delete_list_contacts_bulk_input_object, $id, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteListContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_list_contacts_bulk_input_object** | [**\Swagger\Client\Model\DeleteListContactsBulkInputObject**](../Model/DeleteListContactsBulkInputObject.md)|  |
 **id** | **int**|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListsBulk**
> deleteListsBulk($delete_lists_bulk_input_object, $x_ignore_nullable)

Delete list by given ID(s) or delete all lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_lists_bulk_input_object = new \Swagger\Client\Model\DeleteListsBulkInputObject(); // \Swagger\Client\Model\DeleteListsBulkInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->deleteListsBulk($delete_lists_bulk_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteListsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_lists_bulk_input_object** | [**\Swagger\Client\Model\DeleteListsBulkInputObject**](../Model/DeleteListsBulkInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsByListId**
> map[string,object] getContactsByListId($id, $page, $limit, $order_by, $direction)

Fetch user contacts by given group id.

A useful synonym for \"contacts/search\" command with provided \"listId\" parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Given group Id.
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$order_by = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->getContactsByListId($id, $page, $limit, $order_by, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getContactsByListId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Given group Id. |
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **order_by** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getList**
> \Swagger\Client\Model\Group getList($id)

Get a single list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListContactsIds**
> \Swagger\Client\Model\GetListContactsIdsResponse getListContactsIds($id)

Fetch all contacts IDs belonging to the list with ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getListContactsIds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getListContactsIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GetListContactsIdsResponse**](../Model/GetListContactsIdsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListsOfContact**
> map[string,object] getListsOfContact($id, $page, $limit)

Return lists which contact belongs to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getListsOfContact($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getListsOfContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
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

# **getUserLists**
> map[string,object] getUserLists($page, $limit, $order_by, $direction, $favorite_only, $only_mine)

Get all user lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$order_by = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc
$favorite_only = 0; // int | Return only favorite lists
$only_mine = 0; // int | Return only current user lists

try {
    $result = $apiInstance->getUserLists($page, $limit, $order_by, $direction, $favorite_only, $only_mine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getUserLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **order_by** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]
 **favorite_only** | **int**| Return only favorite lists | [optional] [default to 0]
 **only_mine** | **int**| Return only current user lists | [optional] [default to 0]

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLists**
> map[string,object] searchLists($page, $limit, $ids, $query, $only_mine, $only_default, $order_by, $direction)

Find contact lists by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$ids = "\"1,2,3,4\""; // string | Find lists by ID(s)
$query = "\"A\""; // string | Find lists by specified search query
$only_mine = 0; // int | Return only current user lists
$only_default = 0; // int | Return only default lists
$order_by = "id"; // string | Order results by some field. Default is id
$direction = "desc"; // string | Order direction. Default is desc

try {
    $result = $apiInstance->searchLists($page, $limit, $ids, $query, $only_mine, $only_default, $order_by, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->searchLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **ids** | **string**| Find lists by ID(s) | [optional]
 **query** | **string**| Find lists by specified search query | [optional]
 **only_mine** | **int**| Return only current user lists | [optional] [default to 0]
 **only_default** | **int**| Return only default lists | [optional] [default to 0]
 **order_by** | **string**| Order results by some field. Default is id | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc | [optional] [default to desc]

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateList**
> \Swagger\Client\Model\ResourceLinkResponse updateList($id, $update_list_object)

Update existing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 
$update_list_object = new \Swagger\Client\Model\UpdateListObject(); // \Swagger\Client\Model\UpdateListObject | 

try {
    $result = $apiInstance->updateList($id, $update_list_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **update_list_object** | [**\Swagger\Client\Model\UpdateListObject**](../Model/UpdateListObject.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadListAvatar**
> object uploadListAvatar($image, $id)

Add an avatar for the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | List avatar. Should be PNG or JPG file not more than 10 MB
$id = 1; // int | 

try {
    $result = $apiInstance->uploadListAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| List avatar. Should be PNG or JPG file not more than 10 MB |
 **id** | **int**|  |

### Return type

**object**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

