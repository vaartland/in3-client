# Swagger\Client\InvoiceCreditApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceCreditV2Post**](InvoiceCreditApi.md#invoiceCreditV2Post) | **POST** /v2/invoicecredit | # Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result &#x3D; &#x60;EXCEEDS_PERIOD_LIMIT&#x60;). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as &#x60;InvoiceDate&#x60;) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.


# **invoiceCreditV2Post**
> \Swagger\Client\Model\InvoiceCreditResult invoiceCreditV2Post($model)

# Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result = `EXCEEDS_PERIOD_LIMIT`). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as `InvoiceDate`) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\InvoiceCreditRequestV2Model(); // \Swagger\Client\Model\InvoiceCreditRequestV2Model | 

try {
    $result = $apiInstance->invoiceCreditV2Post($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceCreditApi->invoiceCreditV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\InvoiceCreditRequestV2Model**](../Model/InvoiceCreditRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\InvoiceCreditResult**](../Model/InvoiceCreditResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

