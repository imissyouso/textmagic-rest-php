<?php
/**
 * OutboundMessagesApi
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TextMagic API Documentation
 *
 * # Introduction TextMagic SMS API is a platform for building your own messaging app using our messaging infrastructure. It allows you to send and receive SMS text messages, query information about inbound and outbound messages, manage contacts, create templates (i.e. message formats and static texts) and schedule recurrent SMS messages as well as process bulk SMS messages.  # Getting started Get Started with the TextMagic REST API To start sending text messages using the TextMagic REST API, just follow these steps: 1. Generate the API credentials 1. Connect to our API endpoint This page provides all the information you need to get started. Here, we explain the following steps:  How to obtain the API credentials The API endpoint How the REST API works The next step How to obtain the API credentials  ## How to obtain the API credentials To start sending text messages, you need to create an API key. API keys are similar to an account password; the difference is that an API key only provides access to the API: you cannot log in to TextMagic Online using the API key.  Your program sends the login credentials with each API request as HTTP headers: X-TM-Username is your TextMagic username, while X-TM-Key is your API key.  How to obtain an API key:  1. Log in to TextMagic (or start a free trial if you haven’t registered yet). 1. Go to the API settings page. 1. Click the Add new API key button. 1. Enter an app name for this key. Note, it’s just a label, so pick any name. 1. Click Generate new key. 1. You should now see your new API key in the green notification banner above the table:  > Note for API v1 users > V1 keys are not compatible with the V2 version of the TextMagic REST API, so you will need to generate a new API key to use the V2 endpoint.  ## The API endpoint The TextMagic REST API endpoint is: ``` https://rest.textmagic.com/api/v2 ``` All the URLs referenced in this documentation should use this base URL.  ## How the REST API works REST APIs use the HTTP protocol to send and receive messages. REST messages are usually encoded as JSON documents and are an improvement over older methods such as the XML based SOAP protocol. REST APIs use the same set of methods that web browsers use: POST, GET, PUT or DELETE. These correspond to the CRUD operations: create, read, update and delete. Often, REST URIs provide direct CRUD access to entities or collections of entities, for example: http://api.foo.com/people. In this instance, to delete a person’s endpoint, you might simply call the endpoint DELETE http://api.foo.com/people/{id}. REST makes these types of operations simple.  > Example > > Let’s take the entity most often used in messaging: contacts. Imagine you want to perform operations on your contacts list: well, it’s only a matter of calling the following endpoints: > GET /api/v2/contacts (get all of your contacts) > GET /api/v2/contacts/{id} (get a specific contact) > POST /api/v2/contacts (create a new contact) > PUT /api/v2/contacts/{id} (update an existing contact) > DELETE /api/v2/contacts/{id} (delete an existing contact) It’s that simple! In fact, that’s all you need to do to manage the contacts in your TextMagic account!  # SDK wrappers ## PHP Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar quam diam, vitae ultricies neque commodo sed. Vivamus facilisis massa vitae urna dictum luctus. Morbi vitae ante ex. Nulla facilisi. Praesent tristique dolor ut leo pellentesque gravida. Curabitur non consequat sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat quis elit vel vestibulum. Donec tempor orci sed tortor aliquet fringilla. Nulla accumsan posuere velit. Nullam sollicitudin sodales ligula, sit amet lobortis justo. Quisque a vulputate libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam varius urna est, quis accumsan odio euismod non. Etiam volutpat felis pellentesque, vehicula nisi ac, iaculis quam. Nunc vulputate, lectus in pulvinar tristique, tellus arcu fermentum ligula, vel tincidunt quam eros et est.  ## JavaScript Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar quam diam, vitae ultricies neque commodo sed. Vivamus facilisis massa vitae urna dictum luctus. Morbi vitae ante ex. Nulla facilisi. Praesent tristique dolor ut leo pellentesque gravida. Curabitur non consequat sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat quis elit vel vestibulum. Donec tempor orci sed tortor aliquet fringilla. Nulla accumsan posuere velit. Nullam sollicitudin sodales ligula, sit amet lobortis justo. Quisque a vulputate libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam varius urna est, quis accumsan odio euismod non. Etiam volutpat felis pellentesque, vehicula nisi ac, iaculis quam. Nunc vulputate, lectus in pulvinar tristique, tellus arcu fermentum ligula, vel tincidunt quam eros et est.  # Live Sandbox Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar quam diam, vitae ultricies neque commodo sed. Vivamus facilisis massa vitae urna dictum luctus. Morbi vitae ante ex. Nulla facilisi. Praesent tristique dolor ut leo pellentesque gravida. Curabitur non consequat sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat quis elit vel vestibulum. Donec tempor orci sed tortor aliquet fringilla. Nulla accumsan posuere velit. Nullam sollicitudin sodales ligula, sit amet lobortis justo. Quisque a vulputate libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam varius urna est, quis accumsan odio euismod non. Etiam volutpat felis pellentesque, vehicula nisi ac, iaculis quam. Nunc vulputate, lectus in pulvinar tristique, tellus arcu fermentum ligula, vel tincidunt quam eros et est.
 *
 * OpenAPI spec version: 2
 * Contact: support@textmagi.biz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TextMagic\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TextMagic\ApiException;
use TextMagic\Configuration;
use TextMagic\HeaderSelector;
use TextMagic\ObjectSerializer;

/**
 * OutboundMessagesApi Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OutboundMessagesApi
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
     * Operation deleteAllOutboundMessages
     *
     * Delete all messages.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteAllOutboundMessages()
    {
        $this->deleteAllOutboundMessagesWithHttpInfo();
    }

    /**
     * Operation deleteAllOutboundMessagesWithHttpInfo
     *
     * Delete all messages.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAllOutboundMessagesWithHttpInfo()
    {
        $returnType = '';
        $request = $this->deleteAllOutboundMessagesRequest();

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteAllOutboundMessagesAsync
     *
     * Delete all messages.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAllOutboundMessagesAsync()
    {
        return $this->deleteAllOutboundMessagesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAllOutboundMessagesAsyncWithHttpInfo
     *
     * Delete all messages.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAllOutboundMessagesAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->deleteAllOutboundMessagesRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteAllOutboundMessages'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteAllOutboundMessagesRequest()
    {

        $resourcePath = '/api/v2/message/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteOutboundMessage
     *
     * Delete a single message.
     *
     * @param  int $id id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteOutboundMessage($id)
    {
        $this->deleteOutboundMessageWithHttpInfo($id);
    }

    /**
     * Operation deleteOutboundMessageWithHttpInfo
     *
     * Delete a single message.
     *
     * @param  int $id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOutboundMessageWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteOutboundMessageRequest($id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\NotFoundResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteOutboundMessageAsync
     *
     * Delete a single message.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutboundMessageAsync($id)
    {
        return $this->deleteOutboundMessageAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteOutboundMessageAsyncWithHttpInfo
     *
     * Delete a single message.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutboundMessageAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteOutboundMessageRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteOutboundMessage'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteOutboundMessageRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteOutboundMessage'
            );
        }

        $resourcePath = '/api/v2/messages/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteOutboundMessagesBulk
     *
     * Delete outbound messages by given ID(s) or delete all outbound messages.
     *
     * @param  \TextMagic\Models\DeleteOutboundMessagesBulkInputObject $deleteOutboundMessagesBulkInputObject deleteOutboundMessagesBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->deleteOutboundMessagesBulkWithHttpInfo($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation deleteOutboundMessagesBulkWithHttpInfo
     *
     * Delete outbound messages by given ID(s) or delete all outbound messages.
     *
     * @param  \TextMagic\Models\DeleteOutboundMessagesBulkInputObject $deleteOutboundMessagesBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOutboundMessagesBulkWithHttpInfo($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteOutboundMessagesBulkRequest($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteOutboundMessagesBulkAsync
     *
     * Delete outbound messages by given ID(s) or delete all outbound messages.
     *
     * @param  \TextMagic\Models\DeleteOutboundMessagesBulkInputObject $deleteOutboundMessagesBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutboundMessagesBulkAsync($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->deleteOutboundMessagesBulkAsyncWithHttpInfo($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteOutboundMessagesBulkAsyncWithHttpInfo
     *
     * Delete outbound messages by given ID(s) or delete all outbound messages.
     *
     * @param  \TextMagic\Models\DeleteOutboundMessagesBulkInputObject $deleteOutboundMessagesBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOutboundMessagesBulkAsyncWithHttpInfo($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteOutboundMessagesBulkRequest($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteOutboundMessagesBulk'
     *
     * @param  \TextMagic\Models\DeleteOutboundMessagesBulkInputObject $deleteOutboundMessagesBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteOutboundMessagesBulkRequest($deleteOutboundMessagesBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'deleteOutboundMessagesBulkInputObject' is set
        if ($deleteOutboundMessagesBulkInputObject === null || (is_array($deleteOutboundMessagesBulkInputObject) && count($deleteOutboundMessagesBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $deleteOutboundMessagesBulkInputObject when calling deleteOutboundMessagesBulk'
            );
        }

        $resourcePath = '/api/v2/messages/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xIgnoreNullValues !== null) {
            $headerParams['X-Ignore-Null-Values'] = ObjectSerializer::toHeaderValue($xIgnoreNullValues);
        }


        // body params
        $_tempBody = null;
        if (isset($deleteOutboundMessagesBulkInputObject)) {
            $_tempBody = $deleteOutboundMessagesBulkInputObject;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation getAllOutboundMessages
     *
     * Get all user oubound messages.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetAllOutboundMessagesResponse
     */
    public function getAllOutboundMessages($page = '1', $limit = '10', $lastId = null)
    {
        list($response) = $this->getAllOutboundMessagesWithHttpInfo($page, $limit, $lastId);
        return $response;
    }

    /**
     * Operation getAllOutboundMessagesWithHttpInfo
     *
     * Get all user oubound messages.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetAllOutboundMessagesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllOutboundMessagesWithHttpInfo($page = '1', $limit = '10', $lastId = null)
    {
        $returnType = '\TextMagic\Models\GetAllOutboundMessagesResponse';
        $request = $this->getAllOutboundMessagesRequest($page, $limit, $lastId);

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
                        '\TextMagic\Models\GetAllOutboundMessagesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllOutboundMessagesAsync
     *
     * Get all user oubound messages.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllOutboundMessagesAsync($page = '1', $limit = '10', $lastId = null)
    {
        return $this->getAllOutboundMessagesAsyncWithHttpInfo($page, $limit, $lastId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllOutboundMessagesAsyncWithHttpInfo
     *
     * Get all user oubound messages.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllOutboundMessagesAsyncWithHttpInfo($page = '1', $limit = '10', $lastId = null)
    {
        $returnType = '\TextMagic\Models\GetAllOutboundMessagesResponse';
        $request = $this->getAllOutboundMessagesRequest($page, $limit, $lastId);

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
     * Create request for operation 'getAllOutboundMessages'
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllOutboundMessagesRequest($page = '1', $limit = '10', $lastId = null)
    {

        $resourcePath = '/api/v2/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($lastId !== null) {
            $queryParams['lastId'] = ObjectSerializer::toQueryValue($lastId);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMessagePreview
     *
     * Get messages preview (with tags merged) up to 100 messages per session.
     *
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetMessagePreviewResponse
     */
    public function getMessagePreview($text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        list($response) = $this->getMessagePreviewWithHttpInfo($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
        return $response;
    }

    /**
     * Operation getMessagePreviewWithHttpInfo
     *
     * Get messages preview (with tags merged) up to 100 messages per session.
     *
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetMessagePreviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMessagePreviewWithHttpInfo($text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        $returnType = '\TextMagic\Models\GetMessagePreviewResponse';
        $request = $this->getMessagePreviewRequest($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);

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
                        '\TextMagic\Models\GetMessagePreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMessagePreviewAsync
     *
     * Get messages preview (with tags merged) up to 100 messages per session.
     *
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePreviewAsync($text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        return $this->getMessagePreviewAsyncWithHttpInfo($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMessagePreviewAsyncWithHttpInfo
     *
     * Get messages preview (with tags merged) up to 100 messages per session.
     *
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePreviewAsyncWithHttpInfo($text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        $returnType = '\TextMagic\Models\GetMessagePreviewResponse';
        $request = $this->getMessagePreviewRequest($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);

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
     * Create request for operation 'getMessagePreview'
     *
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMessagePreviewRequest($text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {

        $resourcePath = '/api/v2/messages/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($text);
        }
        // query params
        if ($templateId !== null) {
            $queryParams['templateId'] = ObjectSerializer::toQueryValue($templateId);
        }
        // query params
        if ($sendingTime !== null) {
            $queryParams['sendingTime'] = ObjectSerializer::toQueryValue($sendingTime);
        }
        // query params
        if ($sendingDateTime !== null) {
            $queryParams['sendingDateTime'] = ObjectSerializer::toQueryValue($sendingDateTime);
        }
        // query params
        if ($sendingTimezone !== null) {
            $queryParams['sendingTimezone'] = ObjectSerializer::toQueryValue($sendingTimezone);
        }
        // query params
        if ($contacts !== null) {
            $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
        }
        // query params
        if ($lists !== null) {
            $queryParams['lists'] = ObjectSerializer::toQueryValue($lists);
        }
        // query params
        if ($phones !== null) {
            $queryParams['phones'] = ObjectSerializer::toQueryValue($phones);
        }
        // query params
        if ($cutExtra !== null) {
            $queryParams['cutExtra'] = ObjectSerializer::toQueryValue($cutExtra);
        }
        // query params
        if ($partsCount !== null) {
            $queryParams['partsCount'] = ObjectSerializer::toQueryValue($partsCount);
        }
        // query params
        if ($referenceId !== null) {
            $queryParams['referenceId'] = ObjectSerializer::toQueryValue($referenceId);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($rule !== null) {
            $queryParams['rule'] = ObjectSerializer::toQueryValue($rule);
        }
        // query params
        if ($createChat !== null) {
            $queryParams['createChat'] = ObjectSerializer::toQueryValue($createChat);
        }
        // query params
        if ($tts !== null) {
            $queryParams['tts'] = ObjectSerializer::toQueryValue($tts);
        }
        // query params
        if ($local !== null) {
            $queryParams['local'] = ObjectSerializer::toQueryValue($local);
        }
        // query params
        if ($localCountry !== null) {
            $queryParams['localCountry'] = ObjectSerializer::toQueryValue($localCountry);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMessagePrice
     *
     * Check pricing for a new outbound message.
     *
     * @param  int $includeBlocked Should we show pricing for the blocked contacts. (optional, default to 0)
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetMessagePriceResponse
     */
    public function getMessagePrice($includeBlocked = '0', $text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        list($response) = $this->getMessagePriceWithHttpInfo($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
        return $response;
    }

    /**
     * Operation getMessagePriceWithHttpInfo
     *
     * Check pricing for a new outbound message.
     *
     * @param  int $includeBlocked Should we show pricing for the blocked contacts. (optional, default to 0)
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetMessagePriceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMessagePriceWithHttpInfo($includeBlocked = '0', $text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        $returnType = '\TextMagic\Models\GetMessagePriceResponse';
        $request = $this->getMessagePriceRequest($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);

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
                        '\TextMagic\Models\GetMessagePriceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMessagePriceAsync
     *
     * Check pricing for a new outbound message.
     *
     * @param  int $includeBlocked Should we show pricing for the blocked contacts. (optional, default to 0)
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePriceAsync($includeBlocked = '0', $text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        return $this->getMessagePriceAsyncWithHttpInfo($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMessagePriceAsyncWithHttpInfo
     *
     * Check pricing for a new outbound message.
     *
     * @param  int $includeBlocked Should we show pricing for the blocked contacts. (optional, default to 0)
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePriceAsyncWithHttpInfo($includeBlocked = '0', $text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {
        $returnType = '\TextMagic\Models\GetMessagePriceResponse';
        $request = $this->getMessagePriceRequest($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);

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
     * Create request for operation 'getMessagePrice'
     *
     * @param  int $includeBlocked Should we show pricing for the blocked contacts. (optional, default to 0)
     * @param  string $text Message text. Required if template_id is not set (optional)
     * @param  int $templateId Template used instead of message text. Required if text is not set (optional)
     * @param  int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now (optional)
     * @param  string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone (optional)
     * @param  string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone (optional)
     * @param  string $contacts Comma separated array of contact resources id message will be sent to (optional)
     * @param  string $lists Comma separated array of list resources id message will be sent to (optional)
     * @param  string $phones Comma separated array of E.164 phone numbers message will be sent to (optional)
     * @param  int $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is 0 (optional, default to 0)
     * @param  int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6 (optional, default to 6)
     * @param  int $referenceId Custom message reference id which can be used in your application infrastructure (optional)
     * @param  string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery (optional)
     * @param  string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details (optional)
     * @param  int $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is 0 (optional, default to 0)
     * @param  int $tts Send Text to Speech message. Default is 0 (optional, default to 0)
     * @param  int $local Treat phone numbers passed in \\&#39;phones\\&#39; field as local. Default is 0 (optional, default to 0)
     * @param  string $localCountry 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is account country (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMessagePriceRequest($includeBlocked = '0', $text = null, $templateId = null, $sendingTime = null, $sendingDateTime = null, $sendingTimezone = null, $contacts = null, $lists = null, $phones = null, $cutExtra = '0', $partsCount = '6', $referenceId = null, $from = null, $rule = null, $createChat = '0', $tts = '0', $local = '0', $localCountry = null)
    {

        $resourcePath = '/api/v2/messages/price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($includeBlocked !== null) {
            $queryParams['includeBlocked'] = ObjectSerializer::toQueryValue($includeBlocked);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($text);
        }
        // query params
        if ($templateId !== null) {
            $queryParams['templateId'] = ObjectSerializer::toQueryValue($templateId);
        }
        // query params
        if ($sendingTime !== null) {
            $queryParams['sendingTime'] = ObjectSerializer::toQueryValue($sendingTime);
        }
        // query params
        if ($sendingDateTime !== null) {
            $queryParams['sendingDateTime'] = ObjectSerializer::toQueryValue($sendingDateTime);
        }
        // query params
        if ($sendingTimezone !== null) {
            $queryParams['sendingTimezone'] = ObjectSerializer::toQueryValue($sendingTimezone);
        }
        // query params
        if ($contacts !== null) {
            $queryParams['contacts'] = ObjectSerializer::toQueryValue($contacts);
        }
        // query params
        if ($lists !== null) {
            $queryParams['lists'] = ObjectSerializer::toQueryValue($lists);
        }
        // query params
        if ($phones !== null) {
            $queryParams['phones'] = ObjectSerializer::toQueryValue($phones);
        }
        // query params
        if ($cutExtra !== null) {
            $queryParams['cutExtra'] = ObjectSerializer::toQueryValue($cutExtra);
        }
        // query params
        if ($partsCount !== null) {
            $queryParams['partsCount'] = ObjectSerializer::toQueryValue($partsCount);
        }
        // query params
        if ($referenceId !== null) {
            $queryParams['referenceId'] = ObjectSerializer::toQueryValue($referenceId);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($rule !== null) {
            $queryParams['rule'] = ObjectSerializer::toQueryValue($rule);
        }
        // query params
        if ($createChat !== null) {
            $queryParams['createChat'] = ObjectSerializer::toQueryValue($createChat);
        }
        // query params
        if ($tts !== null) {
            $queryParams['tts'] = ObjectSerializer::toQueryValue($tts);
        }
        // query params
        if ($local !== null) {
            $queryParams['local'] = ObjectSerializer::toQueryValue($local);
        }
        // query params
        if ($localCountry !== null) {
            $queryParams['localCountry'] = ObjectSerializer::toQueryValue($localCountry);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMessagePrices
     *
     * Get message prices for all countries.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetMessagePricesResponse
     */
    public function getMessagePrices()
    {
        list($response) = $this->getMessagePricesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getMessagePricesWithHttpInfo
     *
     * Get message prices for all countries.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetMessagePricesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMessagePricesWithHttpInfo()
    {
        $returnType = '\TextMagic\Models\GetMessagePricesResponse';
        $request = $this->getMessagePricesRequest();

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
                        '\TextMagic\Models\GetMessagePricesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMessagePricesAsync
     *
     * Get message prices for all countries.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePricesAsync()
    {
        return $this->getMessagePricesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMessagePricesAsyncWithHttpInfo
     *
     * Get message prices for all countries.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMessagePricesAsyncWithHttpInfo()
    {
        $returnType = '\TextMagic\Models\GetMessagePricesResponse';
        $request = $this->getMessagePricesRequest();

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
     * Create request for operation 'getMessagePrices'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMessagePricesRequest()
    {

        $resourcePath = '/api/v2/messages/prices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOutboundMessage
     *
     * Get a single outgoing message.
     *
     * @param  int $id id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\MessageOut
     */
    public function getOutboundMessage($id)
    {
        list($response) = $this->getOutboundMessageWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOutboundMessageWithHttpInfo
     *
     * Get a single outgoing message.
     *
     * @param  int $id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\MessageOut, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutboundMessageWithHttpInfo($id)
    {
        $returnType = '\TextMagic\Models\MessageOut';
        $request = $this->getOutboundMessageRequest($id);

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
                        '\TextMagic\Models\MessageOut',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\NotFoundResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOutboundMessageAsync
     *
     * Get a single outgoing message.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundMessageAsync($id)
    {
        return $this->getOutboundMessageAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOutboundMessageAsyncWithHttpInfo
     *
     * Get a single outgoing message.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundMessageAsyncWithHttpInfo($id)
    {
        $returnType = '\TextMagic\Models\MessageOut';
        $request = $this->getOutboundMessageRequest($id);

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
     * Create request for operation 'getOutboundMessage'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOutboundMessageRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getOutboundMessage'
            );
        }

        $resourcePath = '/api/v2/messages/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOutboundMessagesHistory
     *
     * Get outbound messages history.
     *
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. (optional)
     * @param  string $query Find message by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetOutboundMessagesHistoryResponse
     */
    public function getOutboundMessagesHistory($limit = '10', $lastId = null, $query = null, $orderBy = 'id', $direction = 'desc')
    {
        list($response) = $this->getOutboundMessagesHistoryWithHttpInfo($limit, $lastId, $query, $orderBy, $direction);
        return $response;
    }

    /**
     * Operation getOutboundMessagesHistoryWithHttpInfo
     *
     * Get outbound messages history.
     *
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. (optional)
     * @param  string $query Find message by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetOutboundMessagesHistoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutboundMessagesHistoryWithHttpInfo($limit = '10', $lastId = null, $query = null, $orderBy = 'id', $direction = 'desc')
    {
        $returnType = '\TextMagic\Models\GetOutboundMessagesHistoryResponse';
        $request = $this->getOutboundMessagesHistoryRequest($limit, $lastId, $query, $orderBy, $direction);

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
                        '\TextMagic\Models\GetOutboundMessagesHistoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOutboundMessagesHistoryAsync
     *
     * Get outbound messages history.
     *
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. (optional)
     * @param  string $query Find message by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundMessagesHistoryAsync($limit = '10', $lastId = null, $query = null, $orderBy = 'id', $direction = 'desc')
    {
        return $this->getOutboundMessagesHistoryAsyncWithHttpInfo($limit, $lastId, $query, $orderBy, $direction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOutboundMessagesHistoryAsyncWithHttpInfo
     *
     * Get outbound messages history.
     *
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. (optional)
     * @param  string $query Find message by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundMessagesHistoryAsyncWithHttpInfo($limit = '10', $lastId = null, $query = null, $orderBy = 'id', $direction = 'desc')
    {
        $returnType = '\TextMagic\Models\GetOutboundMessagesHistoryResponse';
        $request = $this->getOutboundMessagesHistoryRequest($limit, $lastId, $query, $orderBy, $direction);

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
     * Create request for operation 'getOutboundMessagesHistory'
     *
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. (optional)
     * @param  string $query Find message by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOutboundMessagesHistoryRequest($limit = '10', $lastId = null, $query = null, $orderBy = 'id', $direction = 'desc')
    {

        $resourcePath = '/api/v2/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($lastId !== null) {
            $queryParams['lastId'] = ObjectSerializer::toQueryValue($lastId);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($orderBy !== null) {
            $queryParams['orderBy'] = ObjectSerializer::toQueryValue($orderBy);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchOutboundMessages
     *
     * Find outbound messages by given parameters.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     * @param  string $ids Find message by ID(s) (optional)
     * @param  int $sessionId Find messages by session ID (optional)
     * @param  string $statuses Find messages by status (optional)
     * @param  int $includeDeleted Search also in deleted messages (optional, default to 0)
     * @param  string $query Find messages by specified search query (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\SearchOutboundMessagesResponse
     */
    public function searchOutboundMessages($page = '1', $limit = '10', $lastId = null, $ids = null, $sessionId = null, $statuses = null, $includeDeleted = '0', $query = null)
    {
        list($response) = $this->searchOutboundMessagesWithHttpInfo($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);
        return $response;
    }

    /**
     * Operation searchOutboundMessagesWithHttpInfo
     *
     * Find outbound messages by given parameters.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     * @param  string $ids Find message by ID(s) (optional)
     * @param  int $sessionId Find messages by session ID (optional)
     * @param  string $statuses Find messages by status (optional)
     * @param  int $includeDeleted Search also in deleted messages (optional, default to 0)
     * @param  string $query Find messages by specified search query (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\SearchOutboundMessagesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchOutboundMessagesWithHttpInfo($page = '1', $limit = '10', $lastId = null, $ids = null, $sessionId = null, $statuses = null, $includeDeleted = '0', $query = null)
    {
        $returnType = '\TextMagic\Models\SearchOutboundMessagesResponse';
        $request = $this->searchOutboundMessagesRequest($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);

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
                        '\TextMagic\Models\SearchOutboundMessagesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchOutboundMessagesAsync
     *
     * Find outbound messages by given parameters.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     * @param  string $ids Find message by ID(s) (optional)
     * @param  int $sessionId Find messages by session ID (optional)
     * @param  string $statuses Find messages by status (optional)
     * @param  int $includeDeleted Search also in deleted messages (optional, default to 0)
     * @param  string $query Find messages by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchOutboundMessagesAsync($page = '1', $limit = '10', $lastId = null, $ids = null, $sessionId = null, $statuses = null, $includeDeleted = '0', $query = null)
    {
        return $this->searchOutboundMessagesAsyncWithHttpInfo($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchOutboundMessagesAsyncWithHttpInfo
     *
     * Find outbound messages by given parameters.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     * @param  string $ids Find message by ID(s) (optional)
     * @param  int $sessionId Find messages by session ID (optional)
     * @param  string $statuses Find messages by status (optional)
     * @param  int $includeDeleted Search also in deleted messages (optional, default to 0)
     * @param  string $query Find messages by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchOutboundMessagesAsyncWithHttpInfo($page = '1', $limit = '10', $lastId = null, $ids = null, $sessionId = null, $statuses = null, $includeDeleted = '0', $query = null)
    {
        $returnType = '\TextMagic\Models\SearchOutboundMessagesResponse';
        $request = $this->searchOutboundMessagesRequest($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);

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
     * Create request for operation 'searchOutboundMessages'
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  int $lastId Filter results by ID, selecting all values lesser than the specified ID. Note that \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified (optional)
     * @param  string $ids Find message by ID(s) (optional)
     * @param  int $sessionId Find messages by session ID (optional)
     * @param  string $statuses Find messages by status (optional)
     * @param  int $includeDeleted Search also in deleted messages (optional, default to 0)
     * @param  string $query Find messages by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchOutboundMessagesRequest($page = '1', $limit = '10', $lastId = null, $ids = null, $sessionId = null, $statuses = null, $includeDeleted = '0', $query = null)
    {
        if ($ids !== null && !preg_match("/[,\\d]+/", $ids)) {
            throw new \InvalidArgumentException("invalid value for \"ids\" when calling OutboundMessagesApi.searchOutboundMessages, must conform to the pattern /[,\\d]+/.");
        }


        $resourcePath = '/api/v2/messages/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($lastId !== null) {
            $queryParams['lastId'] = ObjectSerializer::toQueryValue($lastId);
        }
        // query params
        if ($ids !== null) {
            $queryParams['ids'] = ObjectSerializer::toQueryValue($ids);
        }
        // query params
        if ($sessionId !== null) {
            $queryParams['sessionId'] = ObjectSerializer::toQueryValue($sessionId);
        }
        // query params
        if ($statuses !== null) {
            $queryParams['statuses'] = ObjectSerializer::toQueryValue($statuses);
        }
        // query params
        if ($includeDeleted !== null) {
            $queryParams['includeDeleted'] = ObjectSerializer::toQueryValue($includeDeleted);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendMessage
     *
     * Send a new outbound message.
     *
     * @param  \TextMagic\Models\SendMessageInputObject $sendMessageInputObject sendMessageInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\SendMessageResponse
     */
    public function sendMessage($sendMessageInputObject, $xIgnoreNullValues = 'true')
    {
        list($response) = $this->sendMessageWithHttpInfo($sendMessageInputObject, $xIgnoreNullValues);
        return $response;
    }

    /**
     * Operation sendMessageWithHttpInfo
     *
     * Send a new outbound message.
     *
     * @param  \TextMagic\Models\SendMessageInputObject $sendMessageInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\SendMessageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendMessageWithHttpInfo($sendMessageInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\SendMessageResponse';
        $request = $this->sendMessageRequest($sendMessageInputObject, $xIgnoreNullValues);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\SendMessageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendMessageAsync
     *
     * Send a new outbound message.
     *
     * @param  \TextMagic\Models\SendMessageInputObject $sendMessageInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageAsync($sendMessageInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->sendMessageAsyncWithHttpInfo($sendMessageInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendMessageAsyncWithHttpInfo
     *
     * Send a new outbound message.
     *
     * @param  \TextMagic\Models\SendMessageInputObject $sendMessageInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageAsyncWithHttpInfo($sendMessageInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\SendMessageResponse';
        $request = $this->sendMessageRequest($sendMessageInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'sendMessage'
     *
     * @param  \TextMagic\Models\SendMessageInputObject $sendMessageInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendMessageRequest($sendMessageInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'sendMessageInputObject' is set
        if ($sendMessageInputObject === null || (is_array($sendMessageInputObject) && count($sendMessageInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sendMessageInputObject when calling sendMessage'
            );
        }

        $resourcePath = '/api/v2/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xIgnoreNullValues !== null) {
            $headerParams['X-Ignore-Null-Values'] = ObjectSerializer::toHeaderValue($xIgnoreNullValues);
        }


        // body params
        $_tempBody = null;
        if (isset($sendMessageInputObject)) {
            $_tempBody = $sendMessageInputObject;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation uploadMessageAttachment
     *
     * Upload a new file to insert it as a link.
     *
     * @param  \SplFileObject $file Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\UploadMessageAttachmentResponse
     */
    public function uploadMessageAttachment($file)
    {
        list($response) = $this->uploadMessageAttachmentWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation uploadMessageAttachmentWithHttpInfo
     *
     * Upload a new file to insert it as a link.
     *
     * @param  \SplFileObject $file Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\UploadMessageAttachmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadMessageAttachmentWithHttpInfo($file)
    {
        $returnType = '\TextMagic\Models\UploadMessageAttachmentResponse';
        $request = $this->uploadMessageAttachmentRequest($file);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UploadMessageAttachmentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\BadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TextMagic\Models\UnauthorizedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadMessageAttachmentAsync
     *
     * Upload a new file to insert it as a link.
     *
     * @param  \SplFileObject $file Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadMessageAttachmentAsync($file)
    {
        return $this->uploadMessageAttachmentAsyncWithHttpInfo($file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadMessageAttachmentAsyncWithHttpInfo
     *
     * Upload a new file to insert it as a link.
     *
     * @param  \SplFileObject $file Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadMessageAttachmentAsyncWithHttpInfo($file)
    {
        $returnType = '\TextMagic\Models\UploadMessageAttachmentResponse';
        $request = $this->uploadMessageAttachmentRequest($file);

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
     * Create request for operation 'uploadMessageAttachment'
     *
     * @param  \SplFileObject $file Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadMessageAttachmentRequest($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null || (is_array($file) && count($file) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling uploadMessageAttachment'
            );
        }

        $resourcePath = '/api/v2/messages/attachment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($file), 'rb');
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
