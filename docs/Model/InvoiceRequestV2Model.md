# InvoiceRequestV2Model

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_number** | **string** | Guid, no hyphens | 
**invoice_number** | **string** | The shop’s invoice reference | 
**invoice_date** | [**\DateTime**](\DateTime.md) | ISO8601: yyyy-MM-dd | 
**invoice_amount** | **int** | in cents | 
**invoice_description** | **string** |  | 
**invoice_pdf_submit_type** | **int** | 0 &#x3D; Url, 1 &#x3D; BccEmail, 2 &#x3D; IncludedData | 
**invoice_pdf_url** | **string** | Url to the shop’s invoice as PDF. Required if submit type&#x3D;URL | [optional] 
**invoice_pdf_email_sent_date** | [**\DateTime**](\DateTime.md) | Required if submit type&#x3D;BCC_EMAIL | [optional] 
**invoice_pdf_from_email** | **string** | Required if submit type&#x3D;BCC_EMAIL | [optional] 
**invoice_pdf_email_subject** | **string** | Part of subject to identity the email. Required if submit type&#x3D;BCC_EMAIL | [optional] 
**extra_info** | **string** | Extra info Capayable can view in their admin. Only fill with data if agreed with Capayable. | [optional] 
**culture_code** | **string** | Language Culture Code to use for communication with customer:  Two letter lowercase language code followed by dash and then by the uppercase two letter country code,   e.g. nl-NL, nl-BE, en-US  Full list: https://msdn.microsoft.com/en-us/library/ee825488(v&#x3D;cs.20).aspx | 
**invoice_pdf_data** | [**\Swagger\Client\Model\InvoicePdfDataModel**](InvoicePdfDataModel.md) | Required if submit type&#x3D;INCLUDED_DATA | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


