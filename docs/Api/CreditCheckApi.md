# Swagger\Client\CreditCheckApi

All URIs are relative to *https://capayable-api.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**creditCheckV2Post**](CreditCheckApi.md#creditCheckV2Post) | **POST** /v2/creditcheck | # Request credit check     You can perform a credit check on a user.If accepted, the order is final and is going to be paid on invoice.Remember to store the TransactionNumber of the response somewhere with the order, you’ll need it for the invoice follow up.                 The credit check counts as registering an order, so it has to be followed up by an invoice or a cancellation.If not, the order will remain open and may block the customer from doing another order with Capayable.                Note: the credit check on the live environment may take a while, so be sure to set longer timeouts (max 2 minutes). .    In the test environment, use the LastName ‘Refuse’ to get a refused response (&#x60;IsAccepted&#x60; &#x3D; &#x60;false&#x60;) with a random refuse reason.    In the production environment IsFinal should always be ‘true’. In your test environment, you can use ‘false’ while building your connection, as it will not actually register an order and therefore allow you to do multiple checks on the same address(and TransactionNumber will be empty).    If three installments is supported please use the new PaymentMethod property to select the correct payment method. The IsInThreeInstallments property is obsolete.    ## Refuse reason     (Ignore if IsAccepted&#x3D;true)  There are several possible reasons for refusing:  - &#x60;AMOUNT_EXCEEDS_LIMIT&#x60; &#x3D; 1 means the order amount is above this limit. Each shop has an order amount limit above which pay after delivery by Capayable is not available.  - &#x60;BALANCE_EXCEEDS_LIMIT&#x60;&#x3D; 2 means the order amount plus the balance of unpaid orders by the customer is above this limit. There is a limit on the unpaid sum of all orders with this shops or other shops using Capayable.   -  &#x60;NOT_CREDITWORTHY&#x60; &#x3D; 3 means the customer is not accepted for credit by this service.  Capayable uses services for the actual credit check (B2C: Experian, B2B: Graydon).   - &#x60;CREDITCHECK_UNAVAILABLE&#x60; &#x3D; 4 means the extern credit check service is not be available.  - &#x60;NOT_FOUND&#x60; &#x3D; 5 means the corporation could not be found based on its name and/or its address(B2B only).  - &#x60;ADDRESS_BLOCKED&#x60; &#x3D; 6: the invoice address is blocked by Capayable   - &#x60;TOO_YOUNG&#x60; &#x3D; 7: the customer is 18-  - &#x60;DIFFERENT_SHIPPING_ADDRESS&#x60; &#x3D; 8: for some shops, the shipping address must be the same as the invoice address  - &#x60;SHIPPING_ADDRESS_BLOCKED&#x60; &#x3D; 9: the shipping address is blocked by Capayable   - &#x60;IP_ADDRESS_BLOCKED&#x60; &#x3D; 10: the IP address is blocked by Capayable   - &#x60;COUNTRY_BLOCKED&#x60; &#x3D; 11: the country of the invoice address is blocked by Capayable   - &#x60;SHIPPING_COUNTRY_BLOCKED&#x60; &#x3D; 12: the country of the shipping address is blocked by Capayable   - &#x60;AMOUNT_TOO_LOW&#x60; &#x3D; 13: the invoice amount is to low. Each shop has a mimimum amount.  - &#x60;TOO_MANY_OPEN_INVOICES&#x60; &#x3D; 14: the customer has too still open invoices with Capyable  - &#x60;IP_ADDRESS_BLOCKED_MULTIPLE_ORDERS_WITHIN_24HRS&#x60; &#x3D; 15: for some shops, only one order per IP address is allowed in 24 hours.    In all cases the relevant contact info for the customer (or shop) is returned: the name of the company and a phone number.The customer can contact this number if he has questions about the refusal.  Get the translation of the refusereason by adding lang&#x3D;nl to the querystring in the request.


# **creditCheckV2Post**
> \Swagger\Client\Model\CreditCheckResult creditCheckV2Post($model)

# Request credit check     You can perform a credit check on a user.If accepted, the order is final and is going to be paid on invoice.Remember to store the TransactionNumber of the response somewhere with the order, you’ll need it for the invoice follow up.                 The credit check counts as registering an order, so it has to be followed up by an invoice or a cancellation.If not, the order will remain open and may block the customer from doing another order with Capayable.                Note: the credit check on the live environment may take a while, so be sure to set longer timeouts (max 2 minutes). .    In the test environment, use the LastName ‘Refuse’ to get a refused response (`IsAccepted` = `false`) with a random refuse reason.    In the production environment IsFinal should always be ‘true’. In your test environment, you can use ‘false’ while building your connection, as it will not actually register an order and therefore allow you to do multiple checks on the same address(and TransactionNumber will be empty).    If three installments is supported please use the new PaymentMethod property to select the correct payment method. The IsInThreeInstallments property is obsolete.    ## Refuse reason     (Ignore if IsAccepted=true)  There are several possible reasons for refusing:  - `AMOUNT_EXCEEDS_LIMIT` = 1 means the order amount is above this limit. Each shop has an order amount limit above which pay after delivery by Capayable is not available.  - `BALANCE_EXCEEDS_LIMIT`= 2 means the order amount plus the balance of unpaid orders by the customer is above this limit. There is a limit on the unpaid sum of all orders with this shops or other shops using Capayable.   -  `NOT_CREDITWORTHY` = 3 means the customer is not accepted for credit by this service.  Capayable uses services for the actual credit check (B2C: Experian, B2B: Graydon).   - `CREDITCHECK_UNAVAILABLE` = 4 means the extern credit check service is not be available.  - `NOT_FOUND` = 5 means the corporation could not be found based on its name and/or its address(B2B only).  - `ADDRESS_BLOCKED` = 6: the invoice address is blocked by Capayable   - `TOO_YOUNG` = 7: the customer is 18-  - `DIFFERENT_SHIPPING_ADDRESS` = 8: for some shops, the shipping address must be the same as the invoice address  - `SHIPPING_ADDRESS_BLOCKED` = 9: the shipping address is blocked by Capayable   - `IP_ADDRESS_BLOCKED` = 10: the IP address is blocked by Capayable   - `COUNTRY_BLOCKED` = 11: the country of the invoice address is blocked by Capayable   - `SHIPPING_COUNTRY_BLOCKED` = 12: the country of the shipping address is blocked by Capayable   - `AMOUNT_TOO_LOW` = 13: the invoice amount is to low. Each shop has a mimimum amount.  - `TOO_MANY_OPEN_INVOICES` = 14: the customer has too still open invoices with Capyable  - `IP_ADDRESS_BLOCKED_MULTIPLE_ORDERS_WITHIN_24HRS` = 15: for some shops, only one order per IP address is allowed in 24 hours.    In all cases the relevant contact info for the customer (or shop) is returned: the name of the company and a phone number.The customer can contact this number if he has questions about the refusal.  Get the translation of the refusereason by adding lang=nl to the querystring in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CreditCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\CreditCheckRequestV2Model(); // \Swagger\Client\Model\CreditCheckRequestV2Model | 

try {
    $result = $apiInstance->creditCheckV2Post($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCheckApi->creditCheckV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\CreditCheckRequestV2Model**](../Model/CreditCheckRequestV2Model.md)|  |

### Return type

[**\Swagger\Client\Model\CreditCheckResult**](../Model/CreditCheckResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

