<?php
/**
 * ChatsApi
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
 * ChatsApi Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChatsApi
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
     * Operation closeChatsBulk
     *
     * Close chats by chat ids or close all chats
     *
     * @param  \TextMagic\Models\CloseChatsBulkInputObject $closeChatsBulkInputObject closeChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function closeChatsBulk($closeChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->closeChatsBulkWithHttpInfo($closeChatsBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation closeChatsBulkWithHttpInfo
     *
     * Close chats by chat ids or close all chats
     *
     * @param  \TextMagic\Models\CloseChatsBulkInputObject $closeChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function closeChatsBulkWithHttpInfo($closeChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->closeChatsBulkRequest($closeChatsBulkInputObject, $xIgnoreNullValues);

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
     * Operation closeChatsBulkAsync
     *
     * Close chats by chat ids or close all chats
     *
     * @param  \TextMagic\Models\CloseChatsBulkInputObject $closeChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeChatsBulkAsync($closeChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->closeChatsBulkAsyncWithHttpInfo($closeChatsBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation closeChatsBulkAsyncWithHttpInfo
     *
     * Close chats by chat ids or close all chats
     *
     * @param  \TextMagic\Models\CloseChatsBulkInputObject $closeChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeChatsBulkAsyncWithHttpInfo($closeChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->closeChatsBulkRequest($closeChatsBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'closeChatsBulk'
     *
     * @param  \TextMagic\Models\CloseChatsBulkInputObject $closeChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function closeChatsBulkRequest($closeChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'closeChatsBulkInputObject' is set
        if ($closeChatsBulkInputObject === null || (is_array($closeChatsBulkInputObject) && count($closeChatsBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $closeChatsBulkInputObject when calling closeChatsBulk'
            );
        }

        $resourcePath = '/api/v2/chats/close/bulk';
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
        if (isset($closeChatsBulkInputObject)) {
            $_tempBody = $closeChatsBulkInputObject;
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
     * Operation closeReadChats
     *
     * Close all chats that have no unread messages.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function closeReadChats()
    {
        $this->closeReadChatsWithHttpInfo();
    }

    /**
     * Operation closeReadChatsWithHttpInfo
     *
     * Close all chats that have no unread messages.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function closeReadChatsWithHttpInfo()
    {
        $returnType = '';
        $request = $this->closeReadChatsRequest();

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
     * Operation closeReadChatsAsync
     *
     * Close all chats that have no unread messages.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeReadChatsAsync()
    {
        return $this->closeReadChatsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation closeReadChatsAsyncWithHttpInfo
     *
     * Close all chats that have no unread messages.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeReadChatsAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->closeReadChatsRequest();

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
     * Create request for operation 'closeReadChats'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function closeReadChatsRequest()
    {

        $resourcePath = '/api/v2/chats/close/read';
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteChatMessages
     *
     * Delete messages from chat by given messages ID(s).
     *
     * @param  \TextMagic\Models\DeleteChatMessagesBulkInputObject $deleteChatMessagesBulkInputObject deleteChatMessagesBulkInputObject (required)
     * @param  int $id id (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteChatMessages($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues = 'true')
    {
        $this->deleteChatMessagesWithHttpInfo($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues);
    }

    /**
     * Operation deleteChatMessagesWithHttpInfo
     *
     * Delete messages from chat by given messages ID(s).
     *
     * @param  \TextMagic\Models\DeleteChatMessagesBulkInputObject $deleteChatMessagesBulkInputObject (required)
     * @param  int $id (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteChatMessagesWithHttpInfo($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteChatMessagesRequest($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues);

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
     * Operation deleteChatMessagesAsync
     *
     * Delete messages from chat by given messages ID(s).
     *
     * @param  \TextMagic\Models\DeleteChatMessagesBulkInputObject $deleteChatMessagesBulkInputObject (required)
     * @param  int $id (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteChatMessagesAsync($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues = 'true')
    {
        return $this->deleteChatMessagesAsyncWithHttpInfo($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteChatMessagesAsyncWithHttpInfo
     *
     * Delete messages from chat by given messages ID(s).
     *
     * @param  \TextMagic\Models\DeleteChatMessagesBulkInputObject $deleteChatMessagesBulkInputObject (required)
     * @param  int $id (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteChatMessagesAsyncWithHttpInfo($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteChatMessagesRequest($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues);

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
     * Create request for operation 'deleteChatMessages'
     *
     * @param  \TextMagic\Models\DeleteChatMessagesBulkInputObject $deleteChatMessagesBulkInputObject (required)
     * @param  int $id (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteChatMessagesRequest($deleteChatMessagesBulkInputObject, $id, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'deleteChatMessagesBulkInputObject' is set
        if ($deleteChatMessagesBulkInputObject === null || (is_array($deleteChatMessagesBulkInputObject) && count($deleteChatMessagesBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $deleteChatMessagesBulkInputObject when calling deleteChatMessages'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteChatMessages'
            );
        }

        $resourcePath = '/api/v2/chats/{id}/messages/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xIgnoreNullValues !== null) {
            $headerParams['X-Ignore-Null-Values'] = ObjectSerializer::toHeaderValue($xIgnoreNullValues);
        }

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
        if (isset($deleteChatMessagesBulkInputObject)) {
            $_tempBody = $deleteChatMessagesBulkInputObject;
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
     * Operation deleteChatsBulk
     *
     * Delete chats by given ID(s) or delete all chats.
     *
     * @param  \TextMagic\Models\DeleteChatsBulkInputObject $deleteChatsBulkInputObject deleteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteChatsBulk($deleteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->deleteChatsBulkWithHttpInfo($deleteChatsBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation deleteChatsBulkWithHttpInfo
     *
     * Delete chats by given ID(s) or delete all chats.
     *
     * @param  \TextMagic\Models\DeleteChatsBulkInputObject $deleteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteChatsBulkWithHttpInfo($deleteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteChatsBulkRequest($deleteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Operation deleteChatsBulkAsync
     *
     * Delete chats by given ID(s) or delete all chats.
     *
     * @param  \TextMagic\Models\DeleteChatsBulkInputObject $deleteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteChatsBulkAsync($deleteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->deleteChatsBulkAsyncWithHttpInfo($deleteChatsBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteChatsBulkAsyncWithHttpInfo
     *
     * Delete chats by given ID(s) or delete all chats.
     *
     * @param  \TextMagic\Models\DeleteChatsBulkInputObject $deleteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteChatsBulkAsyncWithHttpInfo($deleteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->deleteChatsBulkRequest($deleteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'deleteChatsBulk'
     *
     * @param  \TextMagic\Models\DeleteChatsBulkInputObject $deleteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteChatsBulkRequest($deleteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'deleteChatsBulkInputObject' is set
        if ($deleteChatsBulkInputObject === null || (is_array($deleteChatsBulkInputObject) && count($deleteChatsBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $deleteChatsBulkInputObject when calling deleteChatsBulk'
            );
        }

        $resourcePath = '/api/v2/chats/delete';
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
        if (isset($deleteChatsBulkInputObject)) {
            $_tempBody = $deleteChatsBulkInputObject;
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
     * Operation getAllChats
     *
     * Get all user chats.
     *
     * @param  string $status Fetch only (a)ctive, (c)losed or (d)eleted chats (optional)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     * @param  int $flat Should additional contact info be included (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetAllChatsResponse
     */
    public function getAllChats($status = null, $page = '1', $limit = '10', $orderBy = 'id', $voice = '0', $flat = '0')
    {
        list($response) = $this->getAllChatsWithHttpInfo($status, $page, $limit, $orderBy, $voice, $flat);
        return $response;
    }

    /**
     * Operation getAllChatsWithHttpInfo
     *
     * Get all user chats.
     *
     * @param  string $status Fetch only (a)ctive, (c)losed or (d)eleted chats (optional)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     * @param  int $flat Should additional contact info be included (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetAllChatsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllChatsWithHttpInfo($status = null, $page = '1', $limit = '10', $orderBy = 'id', $voice = '0', $flat = '0')
    {
        $returnType = '\TextMagic\Models\GetAllChatsResponse';
        $request = $this->getAllChatsRequest($status, $page, $limit, $orderBy, $voice, $flat);

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
                        '\TextMagic\Models\GetAllChatsResponse',
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
     * Operation getAllChatsAsync
     *
     * Get all user chats.
     *
     * @param  string $status Fetch only (a)ctive, (c)losed or (d)eleted chats (optional)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     * @param  int $flat Should additional contact info be included (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllChatsAsync($status = null, $page = '1', $limit = '10', $orderBy = 'id', $voice = '0', $flat = '0')
    {
        return $this->getAllChatsAsyncWithHttpInfo($status, $page, $limit, $orderBy, $voice, $flat)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllChatsAsyncWithHttpInfo
     *
     * Get all user chats.
     *
     * @param  string $status Fetch only (a)ctive, (c)losed or (d)eleted chats (optional)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     * @param  int $flat Should additional contact info be included (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllChatsAsyncWithHttpInfo($status = null, $page = '1', $limit = '10', $orderBy = 'id', $voice = '0', $flat = '0')
    {
        $returnType = '\TextMagic\Models\GetAllChatsResponse';
        $request = $this->getAllChatsRequest($status, $page, $limit, $orderBy, $voice, $flat);

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
     * Create request for operation 'getAllChats'
     *
     * @param  string $status Fetch only (a)ctive, (c)losed or (d)eleted chats (optional)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     * @param  int $flat Should additional contact info be included (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllChatsRequest($status = null, $page = '1', $limit = '10', $orderBy = 'id', $voice = '0', $flat = '0')
    {

        $resourcePath = '/api/v2/chats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($orderBy !== null) {
            $queryParams['orderBy'] = ObjectSerializer::toQueryValue($orderBy);
        }
        // query params
        if ($voice !== null) {
            $queryParams['voice'] = ObjectSerializer::toQueryValue($voice);
        }
        // query params
        if ($flat !== null) {
            $queryParams['flat'] = ObjectSerializer::toQueryValue($flat);
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
     * Operation getChat
     *
     * Get a single chat.
     *
     * @param  int $id id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\Chat
     */
    public function getChat($id)
    {
        list($response) = $this->getChatWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getChatWithHttpInfo
     *
     * Get a single chat.
     *
     * @param  int $id (required)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\Chat, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChatWithHttpInfo($id)
    {
        $returnType = '\TextMagic\Models\Chat';
        $request = $this->getChatRequest($id);

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
                        '\TextMagic\Models\Chat',
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
     * Operation getChatAsync
     *
     * Get a single chat.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatAsync($id)
    {
        return $this->getChatAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getChatAsyncWithHttpInfo
     *
     * Get a single chat.
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatAsyncWithHttpInfo($id)
    {
        $returnType = '\TextMagic\Models\Chat';
        $request = $this->getChatRequest($id);

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
     * Create request for operation 'getChat'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getChatRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getChat'
            );
        }

        $resourcePath = '/api/v2/chats/{id}';
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
     * Operation getChatByPhone
     *
     * Find chats by phone.
     *
     * @param  string $phone phone (required)
     * @param  int $upsert Create a new chat if not found (optional, default to 0)
     * @param  int $reopen Reopen chat if found or do not change status (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\Chat
     */
    public function getChatByPhone($phone, $upsert = '0', $reopen = '0')
    {
        list($response) = $this->getChatByPhoneWithHttpInfo($phone, $upsert, $reopen);
        return $response;
    }

    /**
     * Operation getChatByPhoneWithHttpInfo
     *
     * Find chats by phone.
     *
     * @param  string $phone (required)
     * @param  int $upsert Create a new chat if not found (optional, default to 0)
     * @param  int $reopen Reopen chat if found or do not change status (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\Chat, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChatByPhoneWithHttpInfo($phone, $upsert = '0', $reopen = '0')
    {
        $returnType = '\TextMagic\Models\Chat';
        $request = $this->getChatByPhoneRequest($phone, $upsert, $reopen);

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
                        '\TextMagic\Models\Chat',
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
     * Operation getChatByPhoneAsync
     *
     * Find chats by phone.
     *
     * @param  string $phone (required)
     * @param  int $upsert Create a new chat if not found (optional, default to 0)
     * @param  int $reopen Reopen chat if found or do not change status (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatByPhoneAsync($phone, $upsert = '0', $reopen = '0')
    {
        return $this->getChatByPhoneAsyncWithHttpInfo($phone, $upsert, $reopen)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getChatByPhoneAsyncWithHttpInfo
     *
     * Find chats by phone.
     *
     * @param  string $phone (required)
     * @param  int $upsert Create a new chat if not found (optional, default to 0)
     * @param  int $reopen Reopen chat if found or do not change status (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatByPhoneAsyncWithHttpInfo($phone, $upsert = '0', $reopen = '0')
    {
        $returnType = '\TextMagic\Models\Chat';
        $request = $this->getChatByPhoneRequest($phone, $upsert, $reopen);

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
     * Create request for operation 'getChatByPhone'
     *
     * @param  string $phone (required)
     * @param  int $upsert Create a new chat if not found (optional, default to 0)
     * @param  int $reopen Reopen chat if found or do not change status (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getChatByPhoneRequest($phone, $upsert = '0', $reopen = '0')
    {
        // verify the required parameter 'phone' is set
        if ($phone === null || (is_array($phone) && count($phone) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phone when calling getChatByPhone'
            );
        }

        $resourcePath = '/api/v2/chats/{phone}/by/phone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($upsert !== null) {
            $queryParams['upsert'] = ObjectSerializer::toQueryValue($upsert);
        }
        // query params
        if ($reopen !== null) {
            $queryParams['reopen'] = ObjectSerializer::toQueryValue($reopen);
        }

        // path params
        if ($phone !== null) {
            $resourcePath = str_replace(
                '{' . 'phone' . '}',
                ObjectSerializer::toPathValue($phone),
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
     * Operation getChatMessages
     *
     * Fetch messages from chat with specified chat id.
     *
     * @param  int $id id (required)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find messages by specified search query (optional)
     * @param  int $start Return messages since specified timestamp only (optional)
     * @param  int $end Return messages up to specified timestamp only (optional)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetChatMessagesResponse
     */
    public function getChatMessages($id, $page = '1', $limit = '10', $query = null, $start = null, $end = null, $direction = 'desc', $voice = '0')
    {
        list($response) = $this->getChatMessagesWithHttpInfo($id, $page, $limit, $query, $start, $end, $direction, $voice);
        return $response;
    }

    /**
     * Operation getChatMessagesWithHttpInfo
     *
     * Fetch messages from chat with specified chat id.
     *
     * @param  int $id (required)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find messages by specified search query (optional)
     * @param  int $start Return messages since specified timestamp only (optional)
     * @param  int $end Return messages up to specified timestamp only (optional)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetChatMessagesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChatMessagesWithHttpInfo($id, $page = '1', $limit = '10', $query = null, $start = null, $end = null, $direction = 'desc', $voice = '0')
    {
        $returnType = '\TextMagic\Models\GetChatMessagesResponse';
        $request = $this->getChatMessagesRequest($id, $page, $limit, $query, $start, $end, $direction, $voice);

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
                        '\TextMagic\Models\GetChatMessagesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getChatMessagesAsync
     *
     * Fetch messages from chat with specified chat id.
     *
     * @param  int $id (required)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find messages by specified search query (optional)
     * @param  int $start Return messages since specified timestamp only (optional)
     * @param  int $end Return messages up to specified timestamp only (optional)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatMessagesAsync($id, $page = '1', $limit = '10', $query = null, $start = null, $end = null, $direction = 'desc', $voice = '0')
    {
        return $this->getChatMessagesAsyncWithHttpInfo($id, $page, $limit, $query, $start, $end, $direction, $voice)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getChatMessagesAsyncWithHttpInfo
     *
     * Fetch messages from chat with specified chat id.
     *
     * @param  int $id (required)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find messages by specified search query (optional)
     * @param  int $start Return messages since specified timestamp only (optional)
     * @param  int $end Return messages up to specified timestamp only (optional)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChatMessagesAsyncWithHttpInfo($id, $page = '1', $limit = '10', $query = null, $start = null, $end = null, $direction = 'desc', $voice = '0')
    {
        $returnType = '\TextMagic\Models\GetChatMessagesResponse';
        $request = $this->getChatMessagesRequest($id, $page, $limit, $query, $start, $end, $direction, $voice);

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
     * Create request for operation 'getChatMessages'
     *
     * @param  int $id (required)
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find messages by specified search query (optional)
     * @param  int $start Return messages since specified timestamp only (optional)
     * @param  int $end Return messages up to specified timestamp only (optional)
     * @param  string $direction Order direction. Default is desc (optional, default to desc)
     * @param  int $voice Fetch results with voice calls (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getChatMessagesRequest($id, $page = '1', $limit = '10', $query = null, $start = null, $end = null, $direction = 'desc', $voice = '0')
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getChatMessages'
            );
        }

        $resourcePath = '/api/v2/chats/{id}/message';
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
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction);
        }
        // query params
        if ($voice !== null) {
            $queryParams['voice'] = ObjectSerializer::toQueryValue($voice);
        }

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
     * Operation getUnreadMessagesTotal
     *
     * Get total amount of unread messages in the current user chats.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\GetUnreadMessagesTotalResponse
     */
    public function getUnreadMessagesTotal()
    {
        list($response) = $this->getUnreadMessagesTotalWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUnreadMessagesTotalWithHttpInfo
     *
     * Get total amount of unread messages in the current user chats.
     *
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\GetUnreadMessagesTotalResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUnreadMessagesTotalWithHttpInfo()
    {
        $returnType = '\TextMagic\Models\GetUnreadMessagesTotalResponse';
        $request = $this->getUnreadMessagesTotalRequest();

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
                        '\TextMagic\Models\GetUnreadMessagesTotalResponse',
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
     * Operation getUnreadMessagesTotalAsync
     *
     * Get total amount of unread messages in the current user chats.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnreadMessagesTotalAsync()
    {
        return $this->getUnreadMessagesTotalAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUnreadMessagesTotalAsyncWithHttpInfo
     *
     * Get total amount of unread messages in the current user chats.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnreadMessagesTotalAsyncWithHttpInfo()
    {
        $returnType = '\TextMagic\Models\GetUnreadMessagesTotalResponse';
        $request = $this->getUnreadMessagesTotalRequest();

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
     * Create request for operation 'getUnreadMessagesTotal'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUnreadMessagesTotalRequest()
    {

        $resourcePath = '/api/v2/chats/unread/count';
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
     * Operation markChatsReadBulk
     *
     * Mark several chats as read by chat ids or mark all chats as read
     *
     * @param  \TextMagic\Models\MarkChatsReadBulkInputObject $markChatsReadBulkInputObject markChatsReadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function markChatsReadBulk($markChatsReadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->markChatsReadBulkWithHttpInfo($markChatsReadBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation markChatsReadBulkWithHttpInfo
     *
     * Mark several chats as read by chat ids or mark all chats as read
     *
     * @param  \TextMagic\Models\MarkChatsReadBulkInputObject $markChatsReadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function markChatsReadBulkWithHttpInfo($markChatsReadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->markChatsReadBulkRequest($markChatsReadBulkInputObject, $xIgnoreNullValues);

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
     * Operation markChatsReadBulkAsync
     *
     * Mark several chats as read by chat ids or mark all chats as read
     *
     * @param  \TextMagic\Models\MarkChatsReadBulkInputObject $markChatsReadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function markChatsReadBulkAsync($markChatsReadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->markChatsReadBulkAsyncWithHttpInfo($markChatsReadBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation markChatsReadBulkAsyncWithHttpInfo
     *
     * Mark several chats as read by chat ids or mark all chats as read
     *
     * @param  \TextMagic\Models\MarkChatsReadBulkInputObject $markChatsReadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function markChatsReadBulkAsyncWithHttpInfo($markChatsReadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->markChatsReadBulkRequest($markChatsReadBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'markChatsReadBulk'
     *
     * @param  \TextMagic\Models\MarkChatsReadBulkInputObject $markChatsReadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function markChatsReadBulkRequest($markChatsReadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'markChatsReadBulkInputObject' is set
        if ($markChatsReadBulkInputObject === null || (is_array($markChatsReadBulkInputObject) && count($markChatsReadBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $markChatsReadBulkInputObject when calling markChatsReadBulk'
            );
        }

        $resourcePath = '/api/v2/chats/read/bulk';
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
        if (isset($markChatsReadBulkInputObject)) {
            $_tempBody = $markChatsReadBulkInputObject;
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
     * Operation markChatsUnreadBulk
     *
     * Mark several chats as UNread by chat ids or mark all chats as UNread
     *
     * @param  \TextMagic\Models\MarkChatsUnreadBulkInputObject $markChatsUnreadBulkInputObject markChatsUnreadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function markChatsUnreadBulk($markChatsUnreadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->markChatsUnreadBulkWithHttpInfo($markChatsUnreadBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation markChatsUnreadBulkWithHttpInfo
     *
     * Mark several chats as UNread by chat ids or mark all chats as UNread
     *
     * @param  \TextMagic\Models\MarkChatsUnreadBulkInputObject $markChatsUnreadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function markChatsUnreadBulkWithHttpInfo($markChatsUnreadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->markChatsUnreadBulkRequest($markChatsUnreadBulkInputObject, $xIgnoreNullValues);

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
     * Operation markChatsUnreadBulkAsync
     *
     * Mark several chats as UNread by chat ids or mark all chats as UNread
     *
     * @param  \TextMagic\Models\MarkChatsUnreadBulkInputObject $markChatsUnreadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function markChatsUnreadBulkAsync($markChatsUnreadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->markChatsUnreadBulkAsyncWithHttpInfo($markChatsUnreadBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation markChatsUnreadBulkAsyncWithHttpInfo
     *
     * Mark several chats as UNread by chat ids or mark all chats as UNread
     *
     * @param  \TextMagic\Models\MarkChatsUnreadBulkInputObject $markChatsUnreadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function markChatsUnreadBulkAsyncWithHttpInfo($markChatsUnreadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->markChatsUnreadBulkRequest($markChatsUnreadBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'markChatsUnreadBulk'
     *
     * @param  \TextMagic\Models\MarkChatsUnreadBulkInputObject $markChatsUnreadBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function markChatsUnreadBulkRequest($markChatsUnreadBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'markChatsUnreadBulkInputObject' is set
        if ($markChatsUnreadBulkInputObject === null || (is_array($markChatsUnreadBulkInputObject) && count($markChatsUnreadBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $markChatsUnreadBulkInputObject when calling markChatsUnreadBulk'
            );
        }

        $resourcePath = '/api/v2/chats/unread/bulk';
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
        if (isset($markChatsUnreadBulkInputObject)) {
            $_tempBody = $markChatsUnreadBulkInputObject;
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
     * Operation muteChat
     *
     * Set mute mode.
     *
     * @param  \TextMagic\Models\MuteChatInputObject $muteChatInputObject muteChatInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\ResourceLinkResponse
     */
    public function muteChat($muteChatInputObject, $xIgnoreNullValues = 'true')
    {
        list($response) = $this->muteChatWithHttpInfo($muteChatInputObject, $xIgnoreNullValues);
        return $response;
    }

    /**
     * Operation muteChatWithHttpInfo
     *
     * Set mute mode.
     *
     * @param  \TextMagic\Models\MuteChatInputObject $muteChatInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\ResourceLinkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function muteChatWithHttpInfo($muteChatInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\ResourceLinkResponse';
        $request = $this->muteChatRequest($muteChatInputObject, $xIgnoreNullValues);

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
                        '\TextMagic\Models\ResourceLinkResponse',
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
     * Operation muteChatAsync
     *
     * Set mute mode.
     *
     * @param  \TextMagic\Models\MuteChatInputObject $muteChatInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function muteChatAsync($muteChatInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->muteChatAsyncWithHttpInfo($muteChatInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation muteChatAsyncWithHttpInfo
     *
     * Set mute mode.
     *
     * @param  \TextMagic\Models\MuteChatInputObject $muteChatInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function muteChatAsyncWithHttpInfo($muteChatInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\ResourceLinkResponse';
        $request = $this->muteChatRequest($muteChatInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'muteChat'
     *
     * @param  \TextMagic\Models\MuteChatInputObject $muteChatInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function muteChatRequest($muteChatInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'muteChatInputObject' is set
        if ($muteChatInputObject === null || (is_array($muteChatInputObject) && count($muteChatInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $muteChatInputObject when calling muteChat'
            );
        }

        $resourcePath = '/api/v2/chats/mute';
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
        if (isset($muteChatInputObject)) {
            $_tempBody = $muteChatInputObject;
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
     * Operation muteChatsBulk
     *
     * Mute several chats by chat ids or mute all chats
     *
     * @param  \TextMagic\Models\MuteChatsBulkInputObject $muteChatsBulkInputObject muteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function muteChatsBulk($muteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->muteChatsBulkWithHttpInfo($muteChatsBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation muteChatsBulkWithHttpInfo
     *
     * Mute several chats by chat ids or mute all chats
     *
     * @param  \TextMagic\Models\MuteChatsBulkInputObject $muteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function muteChatsBulkWithHttpInfo($muteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->muteChatsBulkRequest($muteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Operation muteChatsBulkAsync
     *
     * Mute several chats by chat ids or mute all chats
     *
     * @param  \TextMagic\Models\MuteChatsBulkInputObject $muteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function muteChatsBulkAsync($muteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->muteChatsBulkAsyncWithHttpInfo($muteChatsBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation muteChatsBulkAsyncWithHttpInfo
     *
     * Mute several chats by chat ids or mute all chats
     *
     * @param  \TextMagic\Models\MuteChatsBulkInputObject $muteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function muteChatsBulkAsyncWithHttpInfo($muteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->muteChatsBulkRequest($muteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'muteChatsBulk'
     *
     * @param  \TextMagic\Models\MuteChatsBulkInputObject $muteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function muteChatsBulkRequest($muteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'muteChatsBulkInputObject' is set
        if ($muteChatsBulkInputObject === null || (is_array($muteChatsBulkInputObject) && count($muteChatsBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $muteChatsBulkInputObject when calling muteChatsBulk'
            );
        }

        $resourcePath = '/api/v2/chats/mute/bulk';
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
        if (isset($muteChatsBulkInputObject)) {
            $_tempBody = $muteChatsBulkInputObject;
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
     * Operation reopenChatsBulk
     *
     * Reopen chats by chat ids or reopen all chats
     *
     * @param  \TextMagic\Models\ReopenChatsBulkInputObject $reopenChatsBulkInputObject reopenChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reopenChatsBulk($reopenChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->reopenChatsBulkWithHttpInfo($reopenChatsBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation reopenChatsBulkWithHttpInfo
     *
     * Reopen chats by chat ids or reopen all chats
     *
     * @param  \TextMagic\Models\ReopenChatsBulkInputObject $reopenChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reopenChatsBulkWithHttpInfo($reopenChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->reopenChatsBulkRequest($reopenChatsBulkInputObject, $xIgnoreNullValues);

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
     * Operation reopenChatsBulkAsync
     *
     * Reopen chats by chat ids or reopen all chats
     *
     * @param  \TextMagic\Models\ReopenChatsBulkInputObject $reopenChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reopenChatsBulkAsync($reopenChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->reopenChatsBulkAsyncWithHttpInfo($reopenChatsBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reopenChatsBulkAsyncWithHttpInfo
     *
     * Reopen chats by chat ids or reopen all chats
     *
     * @param  \TextMagic\Models\ReopenChatsBulkInputObject $reopenChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reopenChatsBulkAsyncWithHttpInfo($reopenChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->reopenChatsBulkRequest($reopenChatsBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'reopenChatsBulk'
     *
     * @param  \TextMagic\Models\ReopenChatsBulkInputObject $reopenChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reopenChatsBulkRequest($reopenChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'reopenChatsBulkInputObject' is set
        if ($reopenChatsBulkInputObject === null || (is_array($reopenChatsBulkInputObject) && count($reopenChatsBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reopenChatsBulkInputObject when calling reopenChatsBulk'
            );
        }

        $resourcePath = '/api/v2/chats/reopen/bulk';
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
        if (isset($reopenChatsBulkInputObject)) {
            $_tempBody = $reopenChatsBulkInputObject;
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
     * Operation searchChats
     *
     * Find chats by inbound or outbound messages text.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\SearchChatsResponse
     */
    public function searchChats($page = '1', $limit = '10', $query = null)
    {
        list($response) = $this->searchChatsWithHttpInfo($page, $limit, $query);
        return $response;
    }

    /**
     * Operation searchChatsWithHttpInfo
     *
     * Find chats by inbound or outbound messages text.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\SearchChatsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchChatsWithHttpInfo($page = '1', $limit = '10', $query = null)
    {
        $returnType = '\TextMagic\Models\SearchChatsResponse';
        $request = $this->searchChatsRequest($page, $limit, $query);

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
                        '\TextMagic\Models\SearchChatsResponse',
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
     * Operation searchChatsAsync
     *
     * Find chats by inbound or outbound messages text.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsAsync($page = '1', $limit = '10', $query = null)
    {
        return $this->searchChatsAsyncWithHttpInfo($page, $limit, $query)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchChatsAsyncWithHttpInfo
     *
     * Find chats by inbound or outbound messages text.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsAsyncWithHttpInfo($page = '1', $limit = '10', $query = null)
    {
        $returnType = '\TextMagic\Models\SearchChatsResponse';
        $request = $this->searchChatsRequest($page, $limit, $query);

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
     * Create request for operation 'searchChats'
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchChatsRequest($page = '1', $limit = '10', $query = null)
    {

        $resourcePath = '/api/v2/chats/search';
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
     * Operation searchChatsByIds
     *
     * Find chats by IDs.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $ids Find chats by ID(s) (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\SearchChatsByIdsResponse
     */
    public function searchChatsByIds($page = '1', $limit = '10', $ids = null)
    {
        list($response) = $this->searchChatsByIdsWithHttpInfo($page, $limit, $ids);
        return $response;
    }

    /**
     * Operation searchChatsByIdsWithHttpInfo
     *
     * Find chats by IDs.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $ids Find chats by ID(s) (optional)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\SearchChatsByIdsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchChatsByIdsWithHttpInfo($page = '1', $limit = '10', $ids = null)
    {
        $returnType = '\TextMagic\Models\SearchChatsByIdsResponse';
        $request = $this->searchChatsByIdsRequest($page, $limit, $ids);

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
                        '\TextMagic\Models\SearchChatsByIdsResponse',
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
     * Operation searchChatsByIdsAsync
     *
     * Find chats by IDs.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $ids Find chats by ID(s) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsByIdsAsync($page = '1', $limit = '10', $ids = null)
    {
        return $this->searchChatsByIdsAsyncWithHttpInfo($page, $limit, $ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchChatsByIdsAsyncWithHttpInfo
     *
     * Find chats by IDs.
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $ids Find chats by ID(s) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsByIdsAsyncWithHttpInfo($page = '1', $limit = '10', $ids = null)
    {
        $returnType = '\TextMagic\Models\SearchChatsByIdsResponse';
        $request = $this->searchChatsByIdsRequest($page, $limit, $ids);

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
     * Create request for operation 'searchChatsByIds'
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $ids Find chats by ID(s) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchChatsByIdsRequest($page = '1', $limit = '10', $ids = null)
    {
        if ($ids !== null && !preg_match("/[,\\d]+/", $ids)) {
            throw new \InvalidArgumentException("invalid value for \"ids\" when calling ChatsApi.searchChatsByIds, must conform to the pattern /[,\\d]+/.");
        }


        $resourcePath = '/api/v2/chats/search/ids';
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
        if ($ids !== null) {
            $queryParams['ids'] = ObjectSerializer::toQueryValue($ids);
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
     * Operation searchChatsByReceipent
     *
     * Find chats by recipient (contact, list name or phone number).
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\SearchChatsByReceipentResponse
     */
    public function searchChatsByReceipent($page = '1', $limit = '10', $query = null, $orderBy = 'id')
    {
        list($response) = $this->searchChatsByReceipentWithHttpInfo($page, $limit, $query, $orderBy);
        return $response;
    }

    /**
     * Operation searchChatsByReceipentWithHttpInfo
     *
     * Find chats by recipient (contact, list name or phone number).
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\SearchChatsByReceipentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchChatsByReceipentWithHttpInfo($page = '1', $limit = '10', $query = null, $orderBy = 'id')
    {
        $returnType = '\TextMagic\Models\SearchChatsByReceipentResponse';
        $request = $this->searchChatsByReceipentRequest($page, $limit, $query, $orderBy);

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
                        '\TextMagic\Models\SearchChatsByReceipentResponse',
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
     * Operation searchChatsByReceipentAsync
     *
     * Find chats by recipient (contact, list name or phone number).
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsByReceipentAsync($page = '1', $limit = '10', $query = null, $orderBy = 'id')
    {
        return $this->searchChatsByReceipentAsyncWithHttpInfo($page, $limit, $query, $orderBy)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchChatsByReceipentAsyncWithHttpInfo
     *
     * Find chats by recipient (contact, list name or phone number).
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchChatsByReceipentAsyncWithHttpInfo($page = '1', $limit = '10', $query = null, $orderBy = 'id')
    {
        $returnType = '\TextMagic\Models\SearchChatsByReceipentResponse';
        $request = $this->searchChatsByReceipentRequest($page, $limit, $query, $orderBy);

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
     * Create request for operation 'searchChatsByReceipent'
     *
     * @param  int $page Fetch specified results page (optional, default to 1)
     * @param  int $limit How many results to return (optional, default to 10)
     * @param  string $query Find chats by specified search query (optional)
     * @param  string $orderBy Order results by some field. Default is id (optional, default to id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchChatsByReceipentRequest($page = '1', $limit = '10', $query = null, $orderBy = 'id')
    {

        $resourcePath = '/api/v2/chats/search/recipients';
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
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($orderBy !== null) {
            $queryParams['orderBy'] = ObjectSerializer::toQueryValue($orderBy);
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
     * Operation setChatStatus
     *
     * Set status of the chat given by ID.
     *
     * @param  \TextMagic\Models\SetChatStatusInputObject $setChatStatusInputObject setChatStatusInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TextMagic\Models\ResourceLinkResponse
     */
    public function setChatStatus($setChatStatusInputObject, $xIgnoreNullValues = 'true')
    {
        list($response) = $this->setChatStatusWithHttpInfo($setChatStatusInputObject, $xIgnoreNullValues);
        return $response;
    }

    /**
     * Operation setChatStatusWithHttpInfo
     *
     * Set status of the chat given by ID.
     *
     * @param  \TextMagic\Models\SetChatStatusInputObject $setChatStatusInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TextMagic\Models\ResourceLinkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setChatStatusWithHttpInfo($setChatStatusInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\ResourceLinkResponse';
        $request = $this->setChatStatusRequest($setChatStatusInputObject, $xIgnoreNullValues);

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
                        '\TextMagic\Models\ResourceLinkResponse',
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
     * Operation setChatStatusAsync
     *
     * Set status of the chat given by ID.
     *
     * @param  \TextMagic\Models\SetChatStatusInputObject $setChatStatusInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setChatStatusAsync($setChatStatusInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->setChatStatusAsyncWithHttpInfo($setChatStatusInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setChatStatusAsyncWithHttpInfo
     *
     * Set status of the chat given by ID.
     *
     * @param  \TextMagic\Models\SetChatStatusInputObject $setChatStatusInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setChatStatusAsyncWithHttpInfo($setChatStatusInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '\TextMagic\Models\ResourceLinkResponse';
        $request = $this->setChatStatusRequest($setChatStatusInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'setChatStatus'
     *
     * @param  \TextMagic\Models\SetChatStatusInputObject $setChatStatusInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setChatStatusRequest($setChatStatusInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'setChatStatusInputObject' is set
        if ($setChatStatusInputObject === null || (is_array($setChatStatusInputObject) && count($setChatStatusInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $setChatStatusInputObject when calling setChatStatus'
            );
        }

        $resourcePath = '/api/v2/chats/status';
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
        if (isset($setChatStatusInputObject)) {
            $_tempBody = $setChatStatusInputObject;
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
     * Operation unmuteChatsBulk
     *
     * Unmute several chats by chat ids or unmute all chats
     *
     * @param  \TextMagic\Models\UnmuteChatsBulkInputObject $unmuteChatsBulkInputObject unmuteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function unmuteChatsBulk($unmuteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $this->unmuteChatsBulkWithHttpInfo($unmuteChatsBulkInputObject, $xIgnoreNullValues);
    }

    /**
     * Operation unmuteChatsBulkWithHttpInfo
     *
     * Unmute several chats by chat ids or unmute all chats
     *
     * @param  \TextMagic\Models\UnmuteChatsBulkInputObject $unmuteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \TextMagic\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function unmuteChatsBulkWithHttpInfo($unmuteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->unmuteChatsBulkRequest($unmuteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Operation unmuteChatsBulkAsync
     *
     * Unmute several chats by chat ids or unmute all chats
     *
     * @param  \TextMagic\Models\UnmuteChatsBulkInputObject $unmuteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unmuteChatsBulkAsync($unmuteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        return $this->unmuteChatsBulkAsyncWithHttpInfo($unmuteChatsBulkInputObject, $xIgnoreNullValues)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unmuteChatsBulkAsyncWithHttpInfo
     *
     * Unmute several chats by chat ids or unmute all chats
     *
     * @param  \TextMagic\Models\UnmuteChatsBulkInputObject $unmuteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unmuteChatsBulkAsyncWithHttpInfo($unmuteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        $returnType = '';
        $request = $this->unmuteChatsBulkRequest($unmuteChatsBulkInputObject, $xIgnoreNullValues);

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
     * Create request for operation 'unmuteChatsBulk'
     *
     * @param  \TextMagic\Models\UnmuteChatsBulkInputObject $unmuteChatsBulkInputObject (required)
     * @param  bool $xIgnoreNullValues (optional, default to true)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function unmuteChatsBulkRequest($unmuteChatsBulkInputObject, $xIgnoreNullValues = 'true')
    {
        // verify the required parameter 'unmuteChatsBulkInputObject' is set
        if ($unmuteChatsBulkInputObject === null || (is_array($unmuteChatsBulkInputObject) && count($unmuteChatsBulkInputObject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $unmuteChatsBulkInputObject when calling unmuteChatsBulk'
            );
        }

        $resourcePath = '/api/v2/chats/unmute/bulk';
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
        if (isset($unmuteChatsBulkInputObject)) {
            $_tempBody = $unmuteChatsBulkInputObject;
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
