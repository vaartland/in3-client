# Swagger\Client\InstallmentApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installmentV2Post**](InstallmentApi.md#installmentV2Post) | **POST** /v2/installment | # Register first installment payment (own PSP only)    For ‘in three installments’ orders, register the first installment payment immediately after the creditcheck. Only use this if you don’t pay through Capayable but use your own PSP (option B above).


# **installmentV2Post**
> \Swagger\Client\Model\InstallmentResultModel installmentV2Post($model)

# Register first installment payment (own PSP only)    For ‘in three installments’ orders, register the first installment payment immediately after the creditcheck. Only use this if you don’t pay through Capayable but use your own PSP (option B above).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\InstallmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\InstallmentRequestV2Model(); // \Swagger\Client\Model\InstallmentRequestV2Model | 

try {
    $result = $apiInstance->installmentV2Post($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentApi->installmentV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\InstallmentRequestV2Model**](../Model/InstallmentRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\InstallmentResultModel**](../Model/InstallmentResultModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

