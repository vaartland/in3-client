<?php
/**
 * InvoiceApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Capayable API V2
 *
 * API for Pay after delivery and Pay in 3 installments
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * InvoiceApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation invoiceV2Post
     *
     * # Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (`InvoicePdfSubmitType`):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal =true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (`capayable-invoice-bcc@tritac.com`) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (`InvoicePdfEmailSentDate`)  - the from email address (`InvoicePdfFromEmail`)  - the order reference in the subject (`InvoicePdfEmailSubject`). `InvoicePdfEmailSubject` does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject = \"Order confirmation O-123 in yourshop.nl\", and `InvoicePdfEmailSubject` = \"O-123\" is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.
     *
     * @param  \Swagger\Client\Model\InvoiceRequestV2Model $model model (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InvoiceResult
     */
    public function invoiceV2Post($model)
    {
        list($response) = $this->invoiceV2PostWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation invoiceV2PostWithHttpInfo
     *
     * # Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (`InvoicePdfSubmitType`):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal =true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (`capayable-invoice-bcc@tritac.com`) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (`InvoicePdfEmailSentDate`)  - the from email address (`InvoicePdfFromEmail`)  - the order reference in the subject (`InvoicePdfEmailSubject`). `InvoicePdfEmailSubject` does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject = \"Order confirmation O-123 in yourshop.nl\", and `InvoicePdfEmailSubject` = \"O-123\" is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.
     *
     * @param  \Swagger\Client\Model\InvoiceRequestV2Model $model (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InvoiceResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceV2PostWithHttpInfo($model)
    {
        $returnType = '\Swagger\Client\Model\InvoiceResult';
        $request = $this->invoiceV2PostRequest($model);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InvoiceResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceV2PostAsync
     *
     * # Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (`InvoicePdfSubmitType`):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal =true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (`capayable-invoice-bcc@tritac.com`) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (`InvoicePdfEmailSentDate`)  - the from email address (`InvoicePdfFromEmail`)  - the order reference in the subject (`InvoicePdfEmailSubject`). `InvoicePdfEmailSubject` does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject = \"Order confirmation O-123 in yourshop.nl\", and `InvoicePdfEmailSubject` = \"O-123\" is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.
     *
     * @param  \Swagger\Client\Model\InvoiceRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV2PostAsync($model)
    {
        return $this->invoiceV2PostAsyncWithHttpInfo($model)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceV2PostAsyncWithHttpInfo
     *
     * # Register invoice follow up    If the creditcheck succeeds, you can request a follow-up by Capayable on the payment of the invoice the webshop sends to the user. The webshop sent the invoice to the user. This call is just to notify that Capayable should follow up on it. Typically you do this Invoice call on shipping the products of the order.     Use the expected delivery date as invoice date, because from then on the customer should pay for delivery.    If the order is split into multiple shipments, do the invoice call for the entire order only on the last shipment, with the expected delivery date of that shipment as the invoice date.    ## PDF invoice    Capayable requires a PDF-copy of the invoice.  You can choose one of these options (`InvoicePdfSubmitType`):  - a. to provide a url to the invoice PDF in the invoice request   - b. to provide the invoice data in InvoicePdfData field (Capayable generates the PDF from this)   - c. If above are not possible for your shop, you can provide the invoice (PDF or text) via email.     ### a. Set invoice url  Set a full link to the PDF invoice in InvoicePdfUrl. Make sure the invoice file is not too large (max. 1 MB).     ### b. Set InvoicePdfData  Give the data of the invoice in the call. The data from the lines is presented in the invoice without extra processing,  so you have to set the correct formatting (do NOT set prices in cents for the invoice), the currency sign and provide lines for the subtotal and the total.  - ProductLines: order lines for each product  - TotalLines: for shipping costs, discounts, VAT and totals (isTotal =true)    ### c. Send PDF invoice via email (BCC)  Either you include Capayable (`capayable-invoice-bcc@tritac.com`) as BCC in the order confirmation email you sent to the customer where the invoice as PDF is attached.  Or you can send a separate email to Capayable with the invoice PDF attached.If no PDF is attached, the email text body will be used as invoice and converted to PDF by the API.  The email is matched:  - the date (`InvoicePdfEmailSentDate`)  - the from email address (`InvoicePdfFromEmail`)  - the order reference in the subject (`InvoicePdfEmailSubject`). `InvoicePdfEmailSubject` does not have to match the entire subject, that is contained with the subject is sufficient.    E.g. subject = \"Order confirmation O-123 in yourshop.nl\", and `InvoicePdfEmailSubject` = \"O-123\" is fine.    You have to send this email within an hour after the invoice request. It is also possible to send it earlier, for example around the time of the final creditcheck. Then, it will be matched after you’ve sent in the invoice request.
     *
     * @param  \Swagger\Client\Model\InvoiceRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV2PostAsyncWithHttpInfo($model)
    {
        $returnType = '\Swagger\Client\Model\InvoiceResult';
        $request = $this->invoiceV2PostRequest($model);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'invoiceV2Post'
     *
     * @param  \Swagger\Client\Model\InvoiceRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function invoiceV2PostRequest($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null || (is_array($model) && count($model) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $model when calling invoiceV2Post'
            );
        }

        $resourcePath = '/v2/invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'text/xml'],
                ['application/json', 'text/json', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
