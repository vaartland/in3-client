# Swagger\Client\PartnerRegistrationCheckApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerRegistrationCheckV2Post**](PartnerRegistrationCheckApi.md#partnerRegistrationCheckV2Post) | **POST** /v2/partner/registrationcheck | 


# **partnerRegistrationCheckV2Post**
> \Swagger\Client\Model\RegistrationCheckResultViewModel partnerRegistrationCheckV2Post($v2_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PartnerRegistrationCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v2_model = new \Swagger\Client\Model\PartnerRegistrationCheckRequestV2Model(); // \Swagger\Client\Model\PartnerRegistrationCheckRequestV2Model | 

try {
    $result = $apiInstance->partnerRegistrationCheckV2Post($v2_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerRegistrationCheckApi->partnerRegistrationCheckV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v2_model** | [**\Swagger\Client\Model\PartnerRegistrationCheckRequestV2Model**](../Model/PartnerRegistrationCheckRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\RegistrationCheckResultViewModel**](../Model/RegistrationCheckResultViewModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

