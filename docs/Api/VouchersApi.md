# Vouchery\VouchersApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchGenerateVouchers**](VouchersApi.md#batchGenerateVouchers) | **POST** /campaigns/{id}/vouchers/batch | Batch create vouchers
[**createVoucher**](VouchersApi.md#createVoucher) | **POST** /campaigns/{campaign_id}/vouchers | Create a voucher
[**deleteVoucher**](VouchersApi.md#deleteVoucher) | **DELETE** /vouchers/{code} | Delete a voucher
[**expireVouchers**](VouchersApi.md#expireVouchers) | **POST** /campaigns/vouchers/expire | Expire a list of vouchers
[**findVoucher**](VouchersApi.md#findVoucher) | **GET** /vouchers/find | Find a voucher by campaign metadata
[**getVoucher**](VouchersApi.md#getVoucher) | **GET** /vouchers/{code} | Get a voucher
[**getVouchers**](VouchersApi.md#getVouchers) | **GET** /campaigns/{campaign_id}/vouchers | Get all vouchers for a campaign
[**importVouchers**](VouchersApi.md#importVouchers) | **POST** /campaigns/{id}/vouchers/import | Import your own vouchers
[**updateVoucher**](VouchersApi.md#updateVoucher) | **PATCH** /vouchers/{code} | Update a voucher



## batchGenerateVouchers

> \Vouchery\Model\Voucher[] batchGenerateVouchers($id, $batch)

Batch create vouchers

<p>Generate a batch of unique vouchers. Each voucher will be created using <code>{prefix}-{random code}</code> format where code will be a random string of requested type and length. <strong>A prefix needs to be unique within a project.</strong></p> <p> Following code types are supported: <ul> <li>digits</li> <li>letters</li> <li>mixed (digits and letters)</li> </ul> </p> <p>Allowed characters for each code type have been filtered to avoid typing mistakes. Maximum number of codes possible to generate in one batch request is 50 000.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Campaign ID
$batch = new \Vouchery\Model\Batch(); // \Vouchery\Model\Batch | 

try {
    $result = $apiInstance->batchGenerateVouchers($id, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->batchGenerateVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID |
 **batch** | [**\Vouchery\Model\Batch**](../Model/Batch.md)|  | [optional]

### Return type

[**\Vouchery\Model\Voucher[]**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createVoucher

> \Vouchery\Model\Voucher createVoucher($campaign_id, $voucher)

Create a voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID
$voucher = new \Vouchery\Model\Voucher(); // \Vouchery\Model\Voucher | 

try {
    $result = $apiInstance->createVoucher($campaign_id, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->createVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |
 **voucher** | [**\Vouchery\Model\Voucher**](../Model/Voucher.md)|  | [optional]

### Return type

[**\Vouchery\Model\Voucher**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteVoucher

> deleteVoucher($code)

Delete a voucher

Delete a single voucher. Vouchers with at least one confirmed redemption can not be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code

try {
    $apiInstance->deleteVoucher($code);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->deleteVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |

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


## expireVouchers

> expireVouchers($inline_object4)

Expire a list of vouchers

Given a list of voucher codes, change their status to expired, unless they have been redeemed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \Vouchery\Model\InlineObject4(); // \Vouchery\Model\InlineObject4 | 

try {
    $apiInstance->expireVouchers($inline_object4);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->expireVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\Vouchery\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findVoucher

> \Vouchery\Model\Voucher findVoucher($medium, $purpose, $team, $channel, $budget_code, $customer_identifier)

Find a voucher by campaign metadata

<p>Find voucher by campaign metadata.</p> <p>   Optionally assign found voucher to a customer by passing customer_identifier param.   All vouchers for a customer can be fetched at <a href=\"#get_customers-identifier-vouchers\">/customers/{id}/vouchers</a>. </p> <p>If no voucher is available this endpoint will return an empty response and HTTP code <code>204 No content</code></p> <p>At least one metadata must be provided, otherwise no voucher will be returned.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$medium = array('medium_example'); // string[] | 
$purpose = array('purpose_example'); // string[] | 
$team = array('team_example'); // string[] | 
$channel = array('channel_example'); // string[] | 
$budget_code = array('budget_code_example'); // string[] | 
$customer_identifier = 'customer_identifier_example'; // string | \"Assign found voucher to a customer with this identifier. Will create customer if not present. Optional.\"

try {
    $result = $apiInstance->findVoucher($medium, $purpose, $team, $channel, $budget_code, $customer_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->findVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **medium** | [**string[]**](../Model/string.md)|  | [optional]
 **purpose** | [**string[]**](../Model/string.md)|  | [optional]
 **team** | [**string[]**](../Model/string.md)|  | [optional]
 **channel** | [**string[]**](../Model/string.md)|  | [optional]
 **budget_code** | [**string[]**](../Model/string.md)|  | [optional]
 **customer_identifier** | **string**| \&quot;Assign found voucher to a customer with this identifier. Will create customer if not present. Optional.\&quot; | [optional]

### Return type

[**\Vouchery\Model\Voucher**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getVoucher

> \Vouchery\Model\Voucher getVoucher($code)

Get a voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code

try {
    $result = $apiInstance->getVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |

### Return type

[**\Vouchery\Model\Voucher**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getVouchers

> \Vouchery\Model\Voucher[] getVouchers($campaign_id)

Get all vouchers for a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID

try {
    $result = $apiInstance->getVouchers($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |

### Return type

[**\Vouchery\Model\Voucher[]**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importVouchers

> \Vouchery\Model\InlineResponse200 importVouchers($id, $file)

Import your own vouchers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Campaign ID
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->importVouchers($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->importVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\Vouchery\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateVoucher

> \Vouchery\Model\Voucher updateVoucher($code, $voucher)

Update a voucher

Only voucher status can be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Voucher code
$voucher = new \Vouchery\Model\Voucher(); // \Vouchery\Model\Voucher | 

try {
    $result = $apiInstance->updateVoucher($code, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Voucher code |
 **voucher** | [**\Vouchery\Model\Voucher**](../Model/Voucher.md)|  | [optional]

### Return type

[**\Vouchery\Model\Voucher**](../Model/Voucher.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

