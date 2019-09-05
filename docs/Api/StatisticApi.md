# TextMagic\StatisticApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessagingCounters**](StatisticApi.md#getMessagingCounters) | **GET** /api/v2/stats/messaging/data | Return counters for messaging data views.
[**getMessagingStat**](StatisticApi.md#getMessagingStat) | **GET** /api/v2/stats/messaging | Return messaging statistics.


# **getMessagingCounters**
> \TextMagic\Models\GetMessagingCountersResponse getMessagingCounters()

Return counters for messaging data views.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\StatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessagingCounters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticApi->getMessagingCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetMessagingCountersResponse**](../Model/GetMessagingCountersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingStat**
> \TextMagic\Models\GetMessagingStatResponse getMessagingStat($by, $start, $end)

Return messaging statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\StatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$by = "off"; // string | Group results by specified period: off, day, month or year. Default is off
$start = 56; // int | Start date in unix timestamp format. Default is 7 days ago
$end = "end_example"; // string | End date in unix timestamp format. Default is now

try {
    $result = $apiInstance->getMessagingStat($by, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticApi->getMessagingStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **by** | **string**| Group results by specified period: off, day, month or year. Default is off | [optional] [default to off]
 **start** | **int**| Start date in unix timestamp format. Default is 7 days ago | [optional]
 **end** | **string**| End date in unix timestamp format. Default is now | [optional]

### Return type

[**\TextMagic\Models\GetMessagingStatResponse**](../Model/GetMessagingStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

