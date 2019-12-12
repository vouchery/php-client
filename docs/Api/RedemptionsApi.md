# Vouchery\RedemptionsApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmRedemption**](RedemptionsApi.md#confirmRedemption) | **PATCH** /vouchers/{code}/redemptions | Confirm a redemption
[**createRedemption**](RedemptionsApi.md#createRedemption) | **POST** /vouchers/{code}/redemptions | Create a redemption
[**deleteRedemption**](RedemptionsApi.md#deleteRedemption) | **DELETE** /vouchers/{code}/redemptions | Delete a redemption
[**getRedemption**](RedemptionsApi.md#getRedemption) | **GET** /vouchers/{code}/redemptions | Get a redemption
[**getRedemptions**](RedemptionsApi.md#getRedemptions) | **GET** /campaigns/{campaign_id}/redemptions | Get all redemptions for a campaign



## confirmRedemption

> \Vouchery\Model\Redemption confirmRedemption($code, $transaction_id)

Confirm a redemption

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code
$transaction_id = 'transaction_id_example'; // string | ID which identifies the transaction in customer system, e.g. order number, invoice number

try {
    $result = $apiInstance->confirmRedemption($code, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->confirmRedemption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |
 **transaction_id** | **string**| ID which identifies the transaction in customer system, e.g. order number, invoice number |

### Return type

[**\Vouchery\Model\Redemption**](../Model/Redemption.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRedemption

> \Vouchery\Model\Redemption createRedemption($code, $redemption)

Create a redemption

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code
$redemption = new \Vouchery\Model\Redemption(); // \Vouchery\Model\Redemption | 

try {
    $result = $apiInstance->createRedemption($code, $redemption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->createRedemption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |
 **redemption** | [**\Vouchery\Model\Redemption**](../Model/Redemption.md)|  | [optional]

### Return type

[**\Vouchery\Model\Redemption**](../Model/Redemption.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRedemption

> deleteRedemption($code, $transaction_id)

Delete a redemption

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code
$transaction_id = 'transaction_id_example'; // string | ID which identifies the transaction in customer system, e.g. order number, invoice number

try {
    $apiInstance->deleteRedemption($code, $transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->deleteRedemption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |
 **transaction_id** | **string**| ID which identifies the transaction in customer system, e.g. order number, invoice number |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRedemption

> \Vouchery\Model\Redemption getRedemption($code, $transaction_id)

Get a redemption

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code
$transaction_id = 'transaction_id_example'; // string | ID which identifies the transaction in customer system, e.g. order number, invoice number

try {
    $result = $apiInstance->getRedemption($code, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getRedemption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |
 **transaction_id** | **string**| ID which identifies the transaction in customer system, e.g. order number, invoice number |

### Return type

[**\Vouchery\Model\Redemption**](../Model/Redemption.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRedemptions

> \Vouchery\Model\Redemption[] getRedemptions($campaign_id)

Get all redemptions for a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID

try {
    $result = $apiInstance->getRedemptions($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getRedemptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |

### Return type

[**\Vouchery\Model\Redemption[]**](../Model/Redemption.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

