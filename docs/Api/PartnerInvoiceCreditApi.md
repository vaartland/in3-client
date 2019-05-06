# Swagger\Client\PartnerInvoiceCreditApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerInvoiceCreditV2Post**](PartnerInvoiceCreditApi.md#partnerInvoiceCreditV2Post) | **POST** /v2/partner/invoicecredit | 


# **partnerInvoiceCreditV2Post**
> \Swagger\Client\Model\InvoiceCreditResult partnerInvoiceCreditV2Post($item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PartnerInvoiceCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = new \Swagger\Client\Model\PartnerInvoiceCreditRequestV2Model(); // \Swagger\Client\Model\PartnerInvoiceCreditRequestV2Model | 

try {
    $result = $apiInstance->partnerInvoiceCreditV2Post($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerInvoiceCreditApi->partnerInvoiceCreditV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\Swagger\Client\Model\PartnerInvoiceCreditRequestV2Model**](../Model/PartnerInvoiceCreditRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\InvoiceCreditResult**](../Model/InvoiceCreditResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

