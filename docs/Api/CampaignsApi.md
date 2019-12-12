# Vouchery\CampaignsApi

All URIs are relative to *https://preview.vouchery.io/api/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCampaign**](CampaignsApi.md#createCampaign) | **POST** /campaigns | Create a campaign
[**deleteCampaign**](CampaignsApi.md#deleteCampaign) | **DELETE** /campaigns/{id} | Delete a campaign
[**findSubCampaigns**](CampaignsApi.md#findSubCampaigns) | **GET** /campaigns/sub | Get sub campaigns by params
[**getCampaign**](CampaignsApi.md#getCampaign) | **GET** /campaigns/{id} | Get a campaign
[**getCampaigns**](CampaignsApi.md#getCampaigns) | **GET** /campaigns | Get main campaigns with children by params
[**updateCampaign**](CampaignsApi.md#updateCampaign) | **PATCH** /campaigns/{id} | Update a campaign



## createCampaign

> \Vouchery\Model\Campaign createCampaign($campaign)

Create a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign = new \Vouchery\Model\Campaign(); // \Vouchery\Model\Campaign | 

try {
    $result = $apiInstance->createCampaign($campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\Vouchery\Model\Campaign**](../Model/Campaign.md)|  | [optional]

### Return type

[**\Vouchery\Model\Campaign**](../Model/Campaign.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaign

> deleteCampaign($id)

Delete a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Campaign ID

try {
    $apiInstance->deleteCampaign($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID |

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


## findSubCampaigns

> \Vouchery\Model\Campaign[] findSubCampaigns($name_cont, $status_eq, $template_eq, $triggers_on_eq, $trigger_name_cont)

Get sub campaigns by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_cont = 'name_cont_example'; // string | Name contains
$status_eq = 'status_eq_example'; // string | Status
$template_eq = 'template_eq_example'; // string | Template (type) of sub campaign
$triggers_on_eq = 'triggers_on_eq_example'; // string | Triggers On
$trigger_name_cont = 'trigger_name_cont_example'; // string | Trigger Name contains

try {
    $result = $apiInstance->findSubCampaigns($name_cont, $status_eq, $template_eq, $triggers_on_eq, $trigger_name_cont);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findSubCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_cont** | **string**| Name contains | [optional]
 **status_eq** | **string**| Status | [optional]
 **template_eq** | **string**| Template (type) of sub campaign | [optional]
 **triggers_on_eq** | **string**| Triggers On | [optional]
 **trigger_name_cont** | **string**| Trigger Name contains | [optional]

### Return type

[**\Vouchery\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaign

> \Vouchery\Model\Campaign getCampaign($id)

Get a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Campaign ID

try {
    $result = $apiInstance->getCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID |

### Return type

[**\Vouchery\Model\Campaign**](../Model/Campaign.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaigns

> \Vouchery\Model\Campaign[] getCampaigns($name_cont, $team_eq, $status_eq, $template_eq)

Get main campaigns with children by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_cont = 'name_cont_example'; // string | Name contains
$team_eq = 'team_eq_example'; // string | Team
$status_eq = 'status_eq_example'; // string | Status
$template_eq = 'template_eq_example'; // string | Template (promotion type) of main campaign

try {
    $result = $apiInstance->getCampaigns($name_cont, $team_eq, $status_eq, $template_eq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_cont** | **string**| Name contains | [optional]
 **team_eq** | **string**| Team | [optional]
 **status_eq** | **string**| Status | [optional]
 **template_eq** | **string**| Template (promotion type) of main campaign | [optional]

### Return type

[**\Vouchery\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaign

> \Vouchery\Model\Campaign updateCampaign($id, $campaign)

Update a campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Vouchery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vouchery\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Campaign ID
$campaign = new \Vouchery\Model\Campaign(); // \Vouchery\Model\Campaign | 

try {
    $result = $apiInstance->updateCampaign($id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID |
 **campaign** | [**\Vouchery\Model\Campaign**](../Model/Campaign.md)|  | [optional]

### Return type

[**\Vouchery\Model\Campaign**](../Model/Campaign.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

