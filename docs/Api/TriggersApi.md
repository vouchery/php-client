# Vouchery\TriggersApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTrigger**](TriggersApi.md#createTrigger) | **POST** /triggers | Create a trigger



## createTrigger

> \Vouchery\Model\Trigger createTrigger($trigger)

Create a trigger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\TriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trigger = new \Vouchery\Model\Trigger(); // \Vouchery\Model\Trigger | 

try {
    $result = $apiInstance->createTrigger($trigger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggersApi->createTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trigger** | [**\Vouchery\Model\Trigger**](../Model/Trigger.md)|  | [optional]

### Return type

[**\Vouchery\Model\Trigger**](../Model/Trigger.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

