# Swagger\Client\UserSubaccountsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeSubaccount**](UserSubaccountsApi.md#closeSubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close subaccount.
[**getSubaccount**](UserSubaccountsApi.md#getSubaccount) | **GET** /api/v2/subaccounts/{id} | Get a single subaccount.
[**getSubaccounts**](UserSubaccountsApi.md#getSubaccounts) | **GET** /api/v2/subaccounts | Get all subaccounts of current user.
[**getSubaccountsWithTokens**](UserSubaccountsApi.md#getSubaccountsWithTokens) | **POST** /api/v2/subaccounts/tokens/list | Get all subaccounts with their REST API tokens associated with specified app name.
[**inviteSubaccount**](UserSubaccountsApi.md#inviteSubaccount) | **POST** /api/v2/subaccounts | Invite new subaccount.
[**requestNewSubaccountToken**](UserSubaccountsApi.md#requestNewSubaccountToken) | **POST** /api/v2/subaccounts/tokens | Request a new REST API token for subaccount.


# **closeSubaccount**
> closeSubaccount($id)

Close subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->closeSubaccount($id);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->closeSubaccount: ', $e->getMessage(), PHP_EOL;
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

# **getSubaccount**
> \Swagger\Client\Model\User getSubaccount($id)

Get a single subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSubaccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->getSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccounts**
> \Swagger\Client\Model\User getSubaccounts($page, $limit)

Get all subaccounts of current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getSubaccounts($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->getSubaccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccountsWithTokens**
> \Swagger\Client\Model\GetSubaccountsWithTokensResponse getSubaccountsWithTokens($get_subaccounts_with_tokens_input_object, $page, $limit, $x_ignore_nullable)

Get all subaccounts with their REST API tokens associated with specified app name.

When more than one token related to app name, last key will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_subaccounts_with_tokens_input_object = new \Swagger\Client\Model\GetSubaccountsWithTokensInputObject(); // \Swagger\Client\Model\GetSubaccountsWithTokensInputObject | 
$page = 1; // float | Fetch specified results page
$limit = 10; // int | How many results to return
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->getSubaccountsWithTokens($get_subaccounts_with_tokens_input_object, $page, $limit, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->getSubaccountsWithTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_subaccounts_with_tokens_input_object** | [**\Swagger\Client\Model\GetSubaccountsWithTokensInputObject**](../Model/GetSubaccountsWithTokensInputObject.md)|  | [optional]
 **page** | **float**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\GetSubaccountsWithTokensResponse**](../Model/GetSubaccountsWithTokensResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteSubaccount**
> inviteSubaccount($invite_subaccount_input_object, $x_ignore_nullable)

Invite new subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_subaccount_input_object = new \Swagger\Client\Model\InviteSubaccountInputObject(); // \Swagger\Client\Model\InviteSubaccountInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->inviteSubaccount($invite_subaccount_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->inviteSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invite_subaccount_input_object** | [**\Swagger\Client\Model\InviteSubaccountInputObject**](../Model/InviteSubaccountInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewSubaccountToken**
> \Swagger\Client\Model\User requestNewSubaccountToken($request_new_subaccount_token_input_object, $x_ignore_nullable)

Request a new REST API token for subaccount.

Returning user object, key and app name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_new_subaccount_token_input_object = new \Swagger\Client\Model\RequestNewSubaccountTokenInputObject(); // \Swagger\Client\Model\RequestNewSubaccountTokenInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->requestNewSubaccountToken($request_new_subaccount_token_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->requestNewSubaccountToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_new_subaccount_token_input_object** | [**\Swagger\Client\Model\RequestNewSubaccountTokenInputObject**](../Model/RequestNewSubaccountTokenInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

