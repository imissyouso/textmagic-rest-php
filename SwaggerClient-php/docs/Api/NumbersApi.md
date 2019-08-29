# Swagger\Client\NumbersApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyDedicatedNumber**](NumbersApi.md#buyDedicatedNumber) | **POST** /api/v2/numbers | Buy a dedicated number and assign it to the specified account.
[**deleteDedicatedNumber**](NumbersApi.md#deleteDedicatedNumber) | **DELETE** /api/v2/numbers/{id} | Cancel dedicated number subscription.
[**deleteSenderId**](NumbersApi.md#deleteSenderId) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID.
[**getAvailableDedicatedNumbers**](NumbersApi.md#getAvailableDedicatedNumbers) | **GET** /api/v2/numbers/available | Find available dedicated numbers to buy.
[**getDedicatedNumber**](NumbersApi.md#getDedicatedNumber) | **GET** /api/v2/numbers/{id} | Get a single dedicated number.
[**getSenderId**](NumbersApi.md#getSenderId) | **GET** /api/v2/senderids/{id} | Get a single Sender ID.
[**getSenderIds**](NumbersApi.md#getSenderIds) | **GET** /api/v2/senderids | Get all sender IDs of current user.
[**getSenderSettings**](NumbersApi.md#getSenderSettings) | **GET** /api/v2/sender/settings | Get current user sender settings.
[**getUserDedicatedNumbers**](NumbersApi.md#getUserDedicatedNumbers) | **GET** /api/v2/numbers | Get user&#39;s dedicated numbers.
[**requestSenderId**](NumbersApi.md#requestSenderId) | **POST** /api/v2/senderids | Request for a new Sender ID.
[**updateSenderSetting**](NumbersApi.md#updateSenderSetting) | **PUT** /api/v2/sender/settings | Change sender settings for specified country.


# **buyDedicatedNumber**
> buyDedicatedNumber($buy_dedicated_number_input_object, $x_ignore_nullable)

Buy a dedicated number and assign it to the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_dedicated_number_input_object = new \Swagger\Client\Model\BuyDedicatedNumberInputObject(); // \Swagger\Client\Model\BuyDedicatedNumberInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->buyDedicatedNumber($buy_dedicated_number_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->buyDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buy_dedicated_number_input_object** | [**\Swagger\Client\Model\BuyDedicatedNumberInputObject**](../Model/BuyDedicatedNumberInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDedicatedNumber**
> deleteDedicatedNumber($id)

Cancel dedicated number subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteDedicatedNumber($id);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->deleteDedicatedNumber: ', $e->getMessage(), PHP_EOL;
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

# **deleteSenderId**
> deleteSenderId($id)

Delete a Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSenderId($id);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->deleteSenderId: ', $e->getMessage(), PHP_EOL;
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

# **getAvailableDedicatedNumbers**
> \Swagger\Client\Model\GetAvailableDedicatedNumbersResponse getAvailableDedicatedNumbers($country, $prefix, $tollfree)

Find available dedicated numbers to buy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "\"GB\""; // string | Dedicated number country. Two letters in upper case
$prefix = 1; // int | Desired number prefix. Should include country code (i.e. 447 for GB). In case provide tollfree = 1 parameter and there are available tollfree numbers, this parameter will be ignore.
$tollfree = 0; // int | Should we show only tollfree numbers (tollfree available only for US). Default is false.

try {
    $result = $apiInstance->getAvailableDedicatedNumbers($country, $prefix, $tollfree);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getAvailableDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Dedicated number country. Two letters in upper case |
 **prefix** | **int**| Desired number prefix. Should include country code (i.e. 447 for GB). In case provide tollfree &#x3D; 1 parameter and there are available tollfree numbers, this parameter will be ignore. | [optional] [default to 1]
 **tollfree** | **int**| Should we show only tollfree numbers (tollfree available only for US). Default is false. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\GetAvailableDedicatedNumbersResponse**](../Model/GetAvailableDedicatedNumbersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDedicatedNumber**
> \Swagger\Client\Model\UsersInbound getDedicatedNumber($id)

Get a single dedicated number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getDedicatedNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UsersInbound**](../Model/UsersInbound.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderId**
> \Swagger\Client\Model\SenderId getSenderId($id)

Get a single Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SenderId**](../Model/SenderId.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderIds**
> map[string,object] getSenderIds($page, $limit)

Get all sender IDs of current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->getSenderIds($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getSenderIds: ', $e->getMessage(), PHP_EOL;
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

# **getSenderSettings**
> \Swagger\Client\Model\GetSenderSettingsResponse getSenderSettings($country)

Get current user sender settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Return sender settings enabled for sending to specified country. Two upper case characters

try {
    $result = $apiInstance->getSenderSettings($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getSenderSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Return sender settings enabled for sending to specified country. Two upper case characters | [optional]

### Return type

[**\Swagger\Client\Model\GetSenderSettingsResponse**](../Model/GetSenderSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDedicatedNumbers**
> map[string,object] getUserDedicatedNumbers($page, $limit, $survey_id)

Get user's dedicated numbers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return
$survey_id = 56; // int | Fetch only that numbers which are ready for the survey

try {
    $result = $apiInstance->getUserDedicatedNumbers($page, $limit, $survey_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getUserDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page | [optional] [default to 1]
 **limit** | **int**| How many results to return | [optional] [default to 10]
 **survey_id** | **int**| Fetch only that numbers which are ready for the survey | [optional]

### Return type

**map[string,object]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSenderId**
> \Swagger\Client\Model\ResourceLinkResponse requestSenderId($request_sender_id_input_object, $x_ignore_nullable)

Request for a new Sender ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_sender_id_input_object = new \Swagger\Client\Model\RequestSenderIdInputObject(); // \Swagger\Client\Model\RequestSenderIdInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->requestSenderId($request_sender_id_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_sender_id_input_object** | [**\Swagger\Client\Model\RequestSenderIdInputObject**](../Model/RequestSenderIdInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSenderSetting**
> updateSenderSetting($update_sender_setting_input_object, $x_ignore_nullable)

Change sender settings for specified country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_sender_setting_input_object = new \Swagger\Client\Model\UpdateSenderSettingInputObject(); // \Swagger\Client\Model\UpdateSenderSettingInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->updateSenderSetting($update_sender_setting_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->updateSenderSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_sender_setting_input_object** | [**\Swagger\Client\Model\UpdateSenderSettingInputObject**](../Model/UpdateSenderSettingInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

