# Swagger\Client\PartnerInstallmentApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerInstallmentV2Post**](PartnerInstallmentApi.md#partnerInstallmentV2Post) | **POST** /v2/partner/installment | 


# **partnerInstallmentV2Post**
> \Swagger\Client\Model\InstallmentResultModel partnerInstallmentV2Post($item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PartnerInstallmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = new \Swagger\Client\Model\PartnerInstallmentRequestV2Model(); // \Swagger\Client\Model\PartnerInstallmentRequestV2Model | 

try {
    $result = $apiInstance->partnerInstallmentV2Post($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerInstallmentApi->partnerInstallmentV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\Swagger\Client\Model\PartnerInstallmentRequestV2Model**](../Model/PartnerInstallmentRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\InstallmentResultModel**](../Model/InstallmentResultModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

