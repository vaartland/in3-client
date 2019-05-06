# Swagger\Client\InvoiceApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceV2Post**](InvoiceApi.md#invoiceV2Post) | **POST** /v2/invoice | # Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (&#x60;InvoicePdfSubmitType&#x60;):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal &#x3D;true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (&#x60;capayable-invoice-bcc@tritac.com&#x60;) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (&#x60;InvoicePdfEmailSentDate&#x60;)  - the from email address (&#x60;InvoicePdfFromEmail&#x60;)  - the order reference in the subject (&#x60;InvoicePdfEmailSubject&#x60;). &#x60;InvoicePdfEmailSubject&#x60; does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject &#x3D; \&quot;Order confirmation O-123 in yourshop.nl\&quot;, and &#x60;InvoicePdfEmailSubject&#x60; &#x3D; \&quot;O-123\&quot; is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.


# **invoiceV2Post**
> \Swagger\Client\Model\InvoiceResult invoiceV2Post($model)

# Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (`InvoicePdfSubmitType`):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal =true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (`capayable-invoice-bcc@tritac.com`) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (`InvoicePdfEmailSentDate`)  - the from email address (`InvoicePdfFromEmail`)  - the order reference in the subject (`InvoicePdfEmailSubject`). `InvoicePdfEmailSubject` does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject = \"Order confirmation O-123 in yourshop.nl\", and `InvoicePdfEmailSubject` = \"O-123\" is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\InvoiceRequestV2Model(); // \Swagger\Client\Model\InvoiceRequestV2Model | 

try {
    $result = $apiInstance->invoiceV2Post($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\InvoiceRequestV2Model**](../Model/InvoiceRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\InvoiceResult**](../Model/InvoiceResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

