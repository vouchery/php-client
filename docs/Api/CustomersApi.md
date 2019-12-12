# Vouchery\CustomersApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignVouchersToCustomer**](CustomersApi.md#assignVouchersToCustomer) | **PATCH** /customers/{identifier}/vouchers | Assign vouchers to a customer
[**createCustomer**](CustomersApi.md#createCustomer) | **POST** /customers | Create a customer
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /customers/{identifier} | Delete a customer
[**getCustomer**](CustomersApi.md#getCustomer) | **GET** /customers/{identifier} | Get a customer
[**getCustomerRedemptions**](CustomersApi.md#getCustomerRedemptions) | **GET** /customers/{identifier}/redemptions | Get redemptions performed by a customer
[**getCustomerVouchers**](CustomersApi.md#getCustomerVouchers) | **GET** /customers/{identifier}/vouchers | Get vouchers assigned to a customer
[**getCustomers**](CustomersApi.md#getCustomers) | **GET** /customers | Get all customers
[**importCustomers**](CustomersApi.md#importCustomers) | **POST** /customers/import | Import your own customers
[**removeVouchersFromCustomer**](CustomersApi.md#removeVouchersFromCustomer) | **DELETE** /customers/{identifier}/vouchers | Remove (unassign) vouchers from a customer
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PATCH** /customers/{identifier} | Update a customer



## assignVouchersToCustomer

> \Vouchery\Model\Customer assignVouchersToCustomer($identifier, $inline_object1)

Assign vouchers to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier
$inline_object1 = new \Vouchery\Model\InlineObject1(); // \Vouchery\Model\InlineObject1 | 

try {
    $result = $apiInstance->assignVouchersToCustomer($identifier, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->assignVouchersToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |
 **inline_object1** | [**\Vouchery\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\Vouchery\Model\Customer**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCustomer

> \Vouchery\Model\Customer createCustomer($customer)

Create a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = new \Vouchery\Model\Customer(); // \Vouchery\Model\Customer | 

try {
    $result = $apiInstance->createCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Vouchery\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\Vouchery\Model\Customer**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomer

> deleteCustomer($identifier)

Delete a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier

try {
    $apiInstance->deleteCustomer($identifier);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |

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


## getCustomer

> \Vouchery\Model\Customer getCustomer($identifier)

Get a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier

try {
    $result = $apiInstance->getCustomer($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |

### Return type

[**\Vouchery\Model\Customer**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerRedemptions

> \Vouchery\Model\Redemption[] getCustomerRedemptions($identifier)

Get redemptions performed by a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier

try {
    $result = $apiInstance->getCustomerRedemptions($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerRedemptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |

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


## getCustomerVouchers

> \Vouchery\Model\Voucher[] getCustomerVouchers($identifier)

Get vouchers assigned to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier

try {
    $result = $apiInstance->getCustomerVouchers($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |

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


## getCustomers

> \Vouchery\Model\Customer[] getCustomers()

Get all customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Vouchery\Model\Customer[]**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCustomers

> \Vouchery\Model\InlineResponse200 importCustomers($file)

Import your own customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->importCustomers($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->importCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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


## removeVouchersFromCustomer

> \Vouchery\Model\Customer removeVouchersFromCustomer($identifier, $inline_object)

Remove (unassign) vouchers from a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier
$inline_object = new \Vouchery\Model\InlineObject(); // \Vouchery\Model\InlineObject | 

try {
    $result = $apiInstance->removeVouchersFromCustomer($identifier, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->removeVouchersFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |
 **inline_object** | [**\Vouchery\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Vouchery\Model\Customer**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomer

> \Vouchery\Model\Customer updateCustomer($identifier, $customer)

Update a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Customer identifier
$customer = new \Vouchery\Model\Customer(); // \Vouchery\Model\Customer | 

try {
    $result = $apiInstance->updateCustomer($identifier, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Customer identifier |
 **customer** | [**\Vouchery\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\Vouchery\Model\Customer**](../Model/Customer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

