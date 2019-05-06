# CreditCheckResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_accepted** | **bool** |  | [optional] 
**transaction_number** | **string** |  | [optional] 
**refuse_reason** | **int** | 1 &#x3D; AmountExceedsLimit, 2 &#x3D; BalanceExceedsLimit, 3 &#x3D; NotCreditworthy, 4 &#x3D; CreditcheckUnavailable, 5 &#x3D; NotFound, 6 &#x3D; AddressBlocked, 7 &#x3D; TooYoung, 8 &#x3D; DifferentShippingAddress, 9 &#x3D; ShippingAddressBlocked, 10 &#x3D; IPAddressBlocked, 11 &#x3D; CountryBlocked, 12 &#x3D; ShippingCountryBlocked, 13 &#x3D; AmountTooLow, 14 &#x3D; TooManyOpenInvoices, 15 &#x3D; IPAddressBlockedMultipleOrdersWithin24Hrs, 16 &#x3D; CountryUnknown | [optional] 
**refuse_reason_translation** | **string** |  | [optional] 
**refuse_contact_name** | **string** |  | [optional] 
**refuse_contact_phone_number** | **string** |  | [optional] 
**first_installment_amount** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


