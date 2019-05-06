# Swagger\Client\CancellationApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancellationV2Post**](CancellationApi.md#cancellationV2Post) | **POST** /v2/cancellation | # Cancel creditcheck  How to cancel an creditcheck/order? If an invoice call has been done, do an invoice credit for the full amount of the order. If an invoice call has not been done yet you can do a cancellation call, like below.


# **cancellationV2Post**
> \Swagger\Client\Model\CancellationResult cancellationV2Post($item)

# Cancel creditcheck  How to cancel an creditcheck/order? If an invoice call has been done, do an invoice credit for the full amount of the order. If an invoice call has not been done yet you can do a cancellation call, like below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CancellationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = new \Swagger\Client\Model\CancellationRequestV2Model(); // \Swagger\Client\Model\CancellationRequestV2Model | 

try {
    $result = $apiInstance->cancellationV2Post($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\Swagger\Client\Model\CancellationRequestV2Model**](../Model/CancellationRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\CancellationResult**](../Model/CancellationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

