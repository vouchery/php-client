# Vouchery\RulesApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule**](RulesApi.md#createRule) | **POST** /campaigns/{campaign_id}/rules | Create a rule
[**deleteRule**](RulesApi.md#deleteRule) | **DELETE** /rules/{id} | Delete a rule
[**getRule**](RulesApi.md#getRule) | **GET** /rules/{id} | Get a rule
[**getRules**](RulesApi.md#getRules) | **GET** /campaigns/{campaign_id}/rules | Get all rules for a campaign
[**updateRule**](RulesApi.md#updateRule) | **PATCH** /rules/{id} | Update a rule



## createRule

> \Vouchery\Model\Rule createRule($campaign_id, $unknown_base_type)

Create a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID
$unknown_base_type = new \Vouchery\Model\UNKNOWN_BASE_TYPE(); // \Vouchery\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->createRule($campaign_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->createRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |
 **unknown_base_type** | [**\Vouchery\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Vouchery\Model\Rule**](../Model/Rule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRule

> deleteRule($id)

Delete a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Rule ID

try {
    $apiInstance->deleteRule($id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Rule ID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRule

> \Vouchery\Model\Rule getRule($id)

Get a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Rule ID

try {
    $result = $apiInstance->getRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Rule ID |

### Return type

[**\Vouchery\Model\Rule**](../Model/Rule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRules

> \Vouchery\Model\Rule[] getRules($campaign_id)

Get all rules for a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID

try {
    $result = $apiInstance->getRules($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |

### Return type

[**\Vouchery\Model\Rule[]**](../Model/Rule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateRule

> \Vouchery\Model\Rule updateRule($id, $unknown_base_type)

Update a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Rule ID
$unknown_base_type = new \Vouchery\Model\UNKNOWN_BASE_TYPE(); // \Vouchery\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->updateRule($id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Rule ID |
 **unknown_base_type** | [**\Vouchery\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Vouchery\Model\Rule**](../Model/Rule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

