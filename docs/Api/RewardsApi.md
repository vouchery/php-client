# Vouchery\RewardsApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReward**](RewardsApi.md#createReward) | **POST** /campaigns/{campaign_id}/rewards | Create a reward
[**deleteReward**](RewardsApi.md#deleteReward) | **DELETE** /rewards/{id} | Delete a reward
[**getReward**](RewardsApi.md#getReward) | **GET** /rewards/{id} | Get a reward
[**getRewards**](RewardsApi.md#getRewards) | **GET** /campaigns/{campaign_id}/rewards | Get all rewards for a campaign
[**updateReward**](RewardsApi.md#updateReward) | **PATCH** /rewards/{id} | Update a reward



## createReward

> \Vouchery\Model\Reward createReward($campaign_id, $unknown_base_type)

Create a reward

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID
$unknown_base_type = new \Vouchery\Model\UNKNOWN_BASE_TYPE(); // \Vouchery\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->createReward($campaign_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->createReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |
 **unknown_base_type** | [**\Vouchery\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Vouchery\Model\Reward**](../Model/Reward.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReward

> deleteReward($id)

Delete a reward

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Reward ID

try {
    $apiInstance->deleteReward($id);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->deleteReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Reward ID |

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


## getReward

> \Vouchery\Model\Reward getReward($id)

Get a reward

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Reward ID

try {
    $result = $apiInstance->getReward($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Reward ID |

### Return type

[**\Vouchery\Model\Reward**](../Model/Reward.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRewards

> \Vouchery\Model\Reward[] getRewards($campaign_id)

Get all rewards for a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Campaign ID

try {
    $result = $apiInstance->getRewards($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID |

### Return type

[**\Vouchery\Model\Reward[]**](../Model/Reward.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReward

> \Vouchery\Model\Reward updateReward($id, $unknown_base_type)

Update a reward

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Vouchery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchery\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Reward ID
$unknown_base_type = new \Vouchery\Model\UNKNOWN_BASE_TYPE(); // \Vouchery\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->updateReward($id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->updateReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Reward ID |
 **unknown_base_type** | [**\Vouchery\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Vouchery\Model\Reward**](../Model/Reward.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

