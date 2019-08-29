# Swagger\Client\SurveysApi

All URIs are relative to *http://my.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2SurveysGet**](SurveysApi.md#apiV2SurveysGet) | **GET** /api/v2/surveys | Get all user surveys.
[**cancelSurvey**](SurveysApi.md#cancelSurvey) | **PUT** /api/v2/surveys/{id}/cancel | Cancel a survey.
[**createSurvey**](SurveysApi.md#createSurvey) | **POST** /api/v2/surveys | Create a new survey from the submitted data.
[**createSurveyNode**](SurveysApi.md#createSurveyNode) | **POST** /api/v2/surveys/{id}/nodes | Create a new node from the submitted data.
[**deleteSurvey**](SurveysApi.md#deleteSurvey) | **DELETE** /api/v2/surveys/{id} | Delete a survey.
[**deleteSurveyNode**](SurveysApi.md#deleteSurveyNode) | **DELETE** /api/v2/surveys/nodes/{id} | Delete a node.
[**duplicateSurvey**](SurveysApi.md#duplicateSurvey) | **PUT** /api/v2/surveys/{id}/duplicate | Duplicate a survey.
[**getSurvey**](SurveysApi.md#getSurvey) | **GET** /api/v2/surveys/{id} | Get a survey by id.
[**getSurveyNode**](SurveysApi.md#getSurveyNode) | **GET** /api/v2/surveys/nodes/{id} | Get a node by id.
[**getSurveyNodes**](SurveysApi.md#getSurveyNodes) | **GET** /api/v2/surveys/{id}/nodes | Fetch nodes by given survey id.
[**mergeSurveyNodes**](SurveysApi.md#mergeSurveyNodes) | **POST** /api/v2/surveys/nodes/merge | Merge two question nodes.
[**resetSurvey**](SurveysApi.md#resetSurvey) | **PUT** /api/v2/surveys/{id}/reset | Reset a survey flow.
[**startSurvey**](SurveysApi.md#startSurvey) | **PUT** /api/v2/surveys/{id}/start | Start a survey.
[**updateSurvey**](SurveysApi.md#updateSurvey) | **PUT** /api/v2/surveys/{id} | Update existing survey.
[**updateSurveyNode**](SurveysApi.md#updateSurveyNode) | **PUT** /api/v2/surveys/nodes/{id} | Update existing node.


# **apiV2SurveysGet**
> map[string,object] apiV2SurveysGet($page, $limit)

Get all user surveys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page
$limit = 10; // int | How many results to return

try {
    $result = $apiInstance->apiV2SurveysGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->apiV2SurveysGet: ', $e->getMessage(), PHP_EOL;
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

# **cancelSurvey**
> \Swagger\Client\Model\ResourceLinkResponse cancelSurvey($id)

Cancel a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->cancelSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->cancelSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSurvey**
> \Swagger\Client\Model\ResourceLinkResponse createSurvey($create_survey_input_object, $x_ignore_nullable)

Create a new survey from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_survey_input_object = new \Swagger\Client\Model\CreateSurveyInputObject(); // \Swagger\Client\Model\CreateSurveyInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->createSurvey($create_survey_input_object, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->createSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_survey_input_object** | [**\Swagger\Client\Model\CreateSurveyInputObject**](../Model/CreateSurveyInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSurveyNode**
> \Swagger\Client\Model\ResourceLinkResponse createSurveyNode($create_survey_node_input_object, $id, $x_ignore_nullable)

Create a new node from the submitted data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_survey_node_input_object = new \Swagger\Client\Model\CreateSurveyNodeInputObject(); // \Swagger\Client\Model\CreateSurveyNodeInputObject | 
$id = 1; // int | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->createSurveyNode($create_survey_node_input_object, $id, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->createSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_survey_node_input_object** | [**\Swagger\Client\Model\CreateSurveyNodeInputObject**](../Model/CreateSurveyNodeInputObject.md)|  |
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

# **deleteSurvey**
> deleteSurvey($id)

Delete a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSurvey($id);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->deleteSurvey: ', $e->getMessage(), PHP_EOL;
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

# **deleteSurveyNode**
> deleteSurveyNode($id)

Delete a node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $apiInstance->deleteSurveyNode($id);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->deleteSurveyNode: ', $e->getMessage(), PHP_EOL;
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

# **duplicateSurvey**
> \Swagger\Client\Model\ResourceLinkResponse duplicateSurvey($id)

Duplicate a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->duplicateSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->duplicateSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurvey**
> \Swagger\Client\Model\Survey getSurvey($id)

Get a survey by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->getSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Survey**](../Model/Survey.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurveyNode**
> \Swagger\Client\Model\SurveyNode getSurveyNode($id)

Get a node by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurveyNode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->getSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SurveyNode**](../Model/SurveyNode.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSurveyNodes**
> \Swagger\Client\Model\GetSurveyNodesResponse getSurveyNodes($id)

Fetch nodes by given survey id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->getSurveyNodes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->getSurveyNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GetSurveyNodesResponse**](../Model/GetSurveyNodesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeSurveyNodes**
> mergeSurveyNodes($merge_survey_nodes_input_object, $x_ignore_nullable)

Merge two question nodes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merge_survey_nodes_input_object = new \Swagger\Client\Model\MergeSurveyNodesInputObject(); // \Swagger\Client\Model\MergeSurveyNodesInputObject | 
$x_ignore_nullable = true; // bool | 

try {
    $apiInstance->mergeSurveyNodes($merge_survey_nodes_input_object, $x_ignore_nullable);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->mergeSurveyNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merge_survey_nodes_input_object** | [**\Swagger\Client\Model\MergeSurveyNodesInputObject**](../Model/MergeSurveyNodesInputObject.md)|  |
 **x_ignore_nullable** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetSurvey**
> \Swagger\Client\Model\ResourceLinkResponse resetSurvey($id)

Reset a survey flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->resetSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->resetSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSurvey**
> \Swagger\Client\Model\ResourceLinkResponse startSurvey($id)

Start a survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | 

try {
    $result = $apiInstance->startSurvey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->startSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSurvey**
> \Swagger\Client\Model\ResourceLinkResponse updateSurvey($update_survey_input_object, $id, $x_ignore_nullable)

Update existing survey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_survey_input_object = new \Swagger\Client\Model\UpdateSurveyInputObject(); // \Swagger\Client\Model\UpdateSurveyInputObject | 
$id = 1; // int | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->updateSurvey($update_survey_input_object, $id, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->updateSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_survey_input_object** | [**\Swagger\Client\Model\UpdateSurveyInputObject**](../Model/UpdateSurveyInputObject.md)|  |
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

# **updateSurveyNode**
> \Swagger\Client\Model\ResourceLinkResponse updateSurveyNode($update_survey_node_input_object, $id, $x_ignore_nullable)

Update existing node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SurveysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_survey_node_input_object = new \Swagger\Client\Model\UpdateSurveyNodeInputObject(); // \Swagger\Client\Model\UpdateSurveyNodeInputObject | 
$id = 1; // int | 
$x_ignore_nullable = true; // bool | 

try {
    $result = $apiInstance->updateSurveyNode($update_survey_node_input_object, $id, $x_ignore_nullable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveysApi->updateSurveyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_survey_node_input_object** | [**\Swagger\Client\Model\UpdateSurveyNodeInputObject**](../Model/UpdateSurveyNodeInputObject.md)|  |
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

