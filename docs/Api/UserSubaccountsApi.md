# TextMagic\UserSubaccountsApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeSubaccount**](UserSubaccountsApi.md#closeSubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close subaccount.
[**getSubaccount**](UserSubaccountsApi.md#getSubaccount) | **GET** /api/v2/subaccounts/{id} | Get a single subaccount.
[**getSubaccounts**](UserSubaccountsApi.md#getSubaccounts) | **GET** /api/v2/subaccounts | Get all subaccounts of current user.
[**inviteSubaccount**](UserSubaccountsApi.md#inviteSubaccount) | **POST** /api/v2/subaccounts | Invite new subaccount.


# **closeSubaccount**
> closeSubaccount($id)

Close subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserSubaccountsApi(
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
> \TextMagic\Models\User getSubaccount($id)

Get a single subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserSubaccountsApi(
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

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccounts**
> \TextMagic\Models\User getSubaccounts($page, $limit)

Get all subaccounts of current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserSubaccountsApi(
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

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteSubaccount**
> inviteSubaccount($inviteSubaccountInputObject, $xIgnoreNullValues)

Invite new subaccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\UserSubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inviteSubaccountInputObject = new \TextMagic\Models\InviteSubaccountInputObject(); // \TextMagic\Models\InviteSubaccountInputObject | 
$xIgnoreNullValues = true; // bool | 

try {
    $apiInstance->inviteSubaccount($inviteSubaccountInputObject, $xIgnoreNullValues);
} catch (Exception $e) {
    echo 'Exception when calling UserSubaccountsApi->inviteSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inviteSubaccountInputObject** | [**\TextMagic\Models\InviteSubaccountInputObject**](../Model/InviteSubaccountInputObject.md)|  |
 **xIgnoreNullValues** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

