<?php
/**
 * InvoiceCreditApi
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
 * InvoiceCreditApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceCreditApi
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
     * Operation invoiceCreditV2Post
     *
     * # Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result = `EXCEEDS_PERIOD_LIMIT`). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as `InvoiceDate`) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.
     *
     * @param  \Swagger\Client\Model\InvoiceCreditRequestV2Model $model model (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InvoiceCreditResult
     */
    public function invoiceCreditV2Post($model)
    {
        list($response) = $this->invoiceCreditV2PostWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation invoiceCreditV2PostWithHttpInfo
     *
     * # Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result = `EXCEEDS_PERIOD_LIMIT`). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as `InvoiceDate`) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.
     *
     * @param  \Swagger\Client\Model\InvoiceCreditRequestV2Model $model (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InvoiceCreditResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceCreditV2PostWithHttpInfo($model)
    {
        $returnType = '\Swagger\Client\Model\InvoiceCreditResult';
        $request = $this->invoiceCreditV2PostRequest($model);

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
                        '\Swagger\Client\Model\InvoiceCreditResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceCreditV2PostAsync
     *
     * # Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result = `EXCEEDS_PERIOD_LIMIT`). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as `InvoiceDate`) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.
     *
     * @param  \Swagger\Client\Model\InvoiceCreditRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceCreditV2PostAsync($model)
    {
        return $this->invoiceCreditV2PostAsyncWithHttpInfo($model)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceCreditV2PostAsyncWithHttpInfo
     *
     * # Register a return:  credit on invoice / refund  If a customer returns a product to the webshop, the shop can refund him.Therefore you can notify capayable of returns which result in a credit of the invoice.    If the invoice is ready (partially) paid, Capayable will do a regular (partial) refund. Otherwise the invoice is credited, so the customer has to pay less(or nothing). Either case is a concern for Capayable, not the shop.    You can do multiple invoice credit calls on a single invoice.The total amount can be somewhat larger than the original amount, so the shop can refund extra return shipping costs if desired.    Because Capayable starts reminding the customer after 2 weeks, returns after 14 days will NOT be accepted (Result = `EXCEEDS_PERIOD_LIMIT`). So, when using Capayable pay after delivery, customer has 14 days (counting from last delivery date, sent to Capayable as `InvoiceDate`) to return (part of) his order.    ### (Partially) undeliverable  If an order can only be partially sent, or not at all (because for instance the product is out of stock), then follow the same logic as with cancellations after invoice:   - Do an invoice call for the entire order  - Provide the actual invoice by url or BCC email  - Register an invoice credit for the amount of undeliverable products.
     *
     * @param  \Swagger\Client\Model\InvoiceCreditRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceCreditV2PostAsyncWithHttpInfo($model)
    {
        $returnType = '\Swagger\Client\Model\InvoiceCreditResult';
        $request = $this->invoiceCreditV2PostRequest($model);

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
     * Create request for operation 'invoiceCreditV2Post'
     *
     * @param  \Swagger\Client\Model\InvoiceCreditRequestV2Model $model (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function invoiceCreditV2PostRequest($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null || (is_array($model) && count($model) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $model when calling invoiceCreditV2Post'
            );
        }

        $resourcePath = '/v2/invoicecredit';
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
