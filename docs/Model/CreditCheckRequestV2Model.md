# CreditCheckRequestV2Model

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_name** | **string** |  | 
**initials** | **string** |  | 
**gender** | **int** | 0 &#x3D; Male, 1 &#x3D; Female, 2 &#x3D; Unknown | 
**birth_date** | [**\DateTime**](\DateTime.md) | ISO8601: yyyy-MM-dd | 
**street_name** | **string** |  | 
**house_number** | **int** |  | 
**house_number_suffix** | **string** | String part of house number (e.g. 27b) | [optional] 
**zip_code** | **string** |  | 
**city** | **string** |  | 
**country_code** | **string** | ISO country code | 
**has_different_shipping_address** | **bool** |  | 
**shipping_street_name** | **string** |  | [optional] 
**shipping_house_number** | **int** |  | [optional] 
**shipping_house_number_suffix** | **string** |  | [optional] 
**shipping_zip_code** | **string** |  | [optional] 
**shipping_city** | **string** |  | [optional] 
**shipping_country_code** | **string** |  | [optional] 
**phone_number** | **string** |  | 
**fax_number** | **string** |  | [optional] 
**email_address** | **string** |  | 
**ip_address** | **string** |  | 
**is_corporation** | **bool** |  | 
**is_sole_proprietor** | **bool** | Is customer a sole proprietor [eenmanszaak]/ freelancer, independent contractor [zzp]. Required if IsCorporation&#x3D;1 | [optional] 
**corporation_name** | **string** | Required if IsCorporation&#x3D;1 | [optional] 
**co_c_number** | **string** | Chamber of Commerce number. Required if IsCorporation&#x3D;1 | [optional] 
**is_final** | **bool** | true (invoice request will follow later)  false (just check, only for testing!) | 
**claim_amount** | **int** | in cents | 
**payment_method** | **int** | Payment method to use for credit check0 &#x3D; AfterDelivery, 1 &#x3D; In3Flexible, 2 &#x3D; In3Garant | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


