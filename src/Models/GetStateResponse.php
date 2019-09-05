<?php
/**
 * GetStateResponse
 *
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

namespace TextMagic\Models;

use \ArrayAccess;
use \TextMagic\ObjectSerializer;

/**
 * GetStateResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetStateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetStateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'systemCacheClear' => 'int',
        'systemExit' => 'int',
        'systemAlert' => 'int',
        'systemAccountStateChanged' => 'int',
        'messageDeleted' => 'int',
        'messageIncoming' => 'int',
        'messageIncomingDeleted' => 'int',
        'messageStateChanged' => 'int',
        'messageBulkEnd' => 'int',
        'messageWipeEnd' => 'int',
        'messageSent' => 'int',
        'messageSessionDeleted' => 'int',
        'messageCacheClear' => 'int',
        'messageIncomingCacheClear' => 'int',
        'messageScheduleAdded' => 'int',
        'messageScheduleStateChanged' => 'int',
        'messageScheduleDeleted' => 'int',
        'messageScheduleCacheClear' => 'int',
        'messageTemplateCacheClear' => 'int',
        'callFinished' => 'int',
        'chatCreated' => 'int',
        'chatMarkedAsRead' => 'int',
        'chatMuted' => 'int',
        'chatUnmuted' => 'int',
        'chatDeleted' => 'int',
        'chatClosed' => 'int',
        'chatReopened' => 'int',
        'chatCacheClear' => 'int',
        'contactAdded' => 'int',
        'contactDeleted' => 'int',
        'contactStateChanged' => 'int',
        'listAdded' => 'int',
        'listDeleted' => 'int',
        'listStateChanged' => 'int',
        'contactWipeEnd' => 'int',
        'contactImportEnd' => 'int',
        'contactCacheClear' => 'int',
        'listCacheClear' => 'int',
        'customFieldsCacheClear' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'systemCacheClear' => null,
        'systemExit' => null,
        'systemAlert' => null,
        'systemAccountStateChanged' => null,
        'messageDeleted' => null,
        'messageIncoming' => null,
        'messageIncomingDeleted' => null,
        'messageStateChanged' => null,
        'messageBulkEnd' => null,
        'messageWipeEnd' => null,
        'messageSent' => null,
        'messageSessionDeleted' => null,
        'messageCacheClear' => null,
        'messageIncomingCacheClear' => null,
        'messageScheduleAdded' => null,
        'messageScheduleStateChanged' => null,
        'messageScheduleDeleted' => null,
        'messageScheduleCacheClear' => null,
        'messageTemplateCacheClear' => null,
        'callFinished' => null,
        'chatCreated' => null,
        'chatMarkedAsRead' => null,
        'chatMuted' => null,
        'chatUnmuted' => null,
        'chatDeleted' => null,
        'chatClosed' => null,
        'chatReopened' => null,
        'chatCacheClear' => null,
        'contactAdded' => null,
        'contactDeleted' => null,
        'contactStateChanged' => null,
        'listAdded' => null,
        'listDeleted' => null,
        'listStateChanged' => null,
        'contactWipeEnd' => null,
        'contactImportEnd' => null,
        'contactCacheClear' => null,
        'listCacheClear' => null,
        'customFieldsCacheClear' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'systemCacheClear' => 'systemCacheClear',
        'systemExit' => 'systemExit',
        'systemAlert' => 'systemAlert',
        'systemAccountStateChanged' => 'systemAccountStateChanged',
        'messageDeleted' => 'messageDeleted',
        'messageIncoming' => 'messageIncoming',
        'messageIncomingDeleted' => 'messageIncomingDeleted',
        'messageStateChanged' => 'messageStateChanged',
        'messageBulkEnd' => 'messageBulkEnd',
        'messageWipeEnd' => 'messageWipeEnd',
        'messageSent' => 'messageSent',
        'messageSessionDeleted' => 'messageSessionDeleted',
        'messageCacheClear' => 'messageCacheClear',
        'messageIncomingCacheClear' => 'messageIncomingCacheClear',
        'messageScheduleAdded' => 'messageScheduleAdded',
        'messageScheduleStateChanged' => 'messageScheduleStateChanged',
        'messageScheduleDeleted' => 'messageScheduleDeleted',
        'messageScheduleCacheClear' => 'messageScheduleCacheClear',
        'messageTemplateCacheClear' => 'messageTemplateCacheClear',
        'callFinished' => 'callFinished',
        'chatCreated' => 'chatCreated',
        'chatMarkedAsRead' => 'chatMarkedAsRead',
        'chatMuted' => 'chatMuted',
        'chatUnmuted' => 'chatUnmuted',
        'chatDeleted' => 'chatDeleted',
        'chatClosed' => 'chatClosed',
        'chatReopened' => 'chatReopened',
        'chatCacheClear' => 'chatCacheClear',
        'contactAdded' => 'contactAdded',
        'contactDeleted' => 'contactDeleted',
        'contactStateChanged' => 'contactStateChanged',
        'listAdded' => 'listAdded',
        'listDeleted' => 'listDeleted',
        'listStateChanged' => 'listStateChanged',
        'contactWipeEnd' => 'contactWipeEnd',
        'contactImportEnd' => 'contactImportEnd',
        'contactCacheClear' => 'contactCacheClear',
        'listCacheClear' => 'listCacheClear',
        'customFieldsCacheClear' => 'customFieldsCacheClear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'systemCacheClear' => 'setSystemCacheClear',
        'systemExit' => 'setSystemExit',
        'systemAlert' => 'setSystemAlert',
        'systemAccountStateChanged' => 'setSystemAccountStateChanged',
        'messageDeleted' => 'setMessageDeleted',
        'messageIncoming' => 'setMessageIncoming',
        'messageIncomingDeleted' => 'setMessageIncomingDeleted',
        'messageStateChanged' => 'setMessageStateChanged',
        'messageBulkEnd' => 'setMessageBulkEnd',
        'messageWipeEnd' => 'setMessageWipeEnd',
        'messageSent' => 'setMessageSent',
        'messageSessionDeleted' => 'setMessageSessionDeleted',
        'messageCacheClear' => 'setMessageCacheClear',
        'messageIncomingCacheClear' => 'setMessageIncomingCacheClear',
        'messageScheduleAdded' => 'setMessageScheduleAdded',
        'messageScheduleStateChanged' => 'setMessageScheduleStateChanged',
        'messageScheduleDeleted' => 'setMessageScheduleDeleted',
        'messageScheduleCacheClear' => 'setMessageScheduleCacheClear',
        'messageTemplateCacheClear' => 'setMessageTemplateCacheClear',
        'callFinished' => 'setCallFinished',
        'chatCreated' => 'setChatCreated',
        'chatMarkedAsRead' => 'setChatMarkedAsRead',
        'chatMuted' => 'setChatMuted',
        'chatUnmuted' => 'setChatUnmuted',
        'chatDeleted' => 'setChatDeleted',
        'chatClosed' => 'setChatClosed',
        'chatReopened' => 'setChatReopened',
        'chatCacheClear' => 'setChatCacheClear',
        'contactAdded' => 'setContactAdded',
        'contactDeleted' => 'setContactDeleted',
        'contactStateChanged' => 'setContactStateChanged',
        'listAdded' => 'setListAdded',
        'listDeleted' => 'setListDeleted',
        'listStateChanged' => 'setListStateChanged',
        'contactWipeEnd' => 'setContactWipeEnd',
        'contactImportEnd' => 'setContactImportEnd',
        'contactCacheClear' => 'setContactCacheClear',
        'listCacheClear' => 'setListCacheClear',
        'customFieldsCacheClear' => 'setCustomFieldsCacheClear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'systemCacheClear' => 'getSystemCacheClear',
        'systemExit' => 'getSystemExit',
        'systemAlert' => 'getSystemAlert',
        'systemAccountStateChanged' => 'getSystemAccountStateChanged',
        'messageDeleted' => 'getMessageDeleted',
        'messageIncoming' => 'getMessageIncoming',
        'messageIncomingDeleted' => 'getMessageIncomingDeleted',
        'messageStateChanged' => 'getMessageStateChanged',
        'messageBulkEnd' => 'getMessageBulkEnd',
        'messageWipeEnd' => 'getMessageWipeEnd',
        'messageSent' => 'getMessageSent',
        'messageSessionDeleted' => 'getMessageSessionDeleted',
        'messageCacheClear' => 'getMessageCacheClear',
        'messageIncomingCacheClear' => 'getMessageIncomingCacheClear',
        'messageScheduleAdded' => 'getMessageScheduleAdded',
        'messageScheduleStateChanged' => 'getMessageScheduleStateChanged',
        'messageScheduleDeleted' => 'getMessageScheduleDeleted',
        'messageScheduleCacheClear' => 'getMessageScheduleCacheClear',
        'messageTemplateCacheClear' => 'getMessageTemplateCacheClear',
        'callFinished' => 'getCallFinished',
        'chatCreated' => 'getChatCreated',
        'chatMarkedAsRead' => 'getChatMarkedAsRead',
        'chatMuted' => 'getChatMuted',
        'chatUnmuted' => 'getChatUnmuted',
        'chatDeleted' => 'getChatDeleted',
        'chatClosed' => 'getChatClosed',
        'chatReopened' => 'getChatReopened',
        'chatCacheClear' => 'getChatCacheClear',
        'contactAdded' => 'getContactAdded',
        'contactDeleted' => 'getContactDeleted',
        'contactStateChanged' => 'getContactStateChanged',
        'listAdded' => 'getListAdded',
        'listDeleted' => 'getListDeleted',
        'listStateChanged' => 'getListStateChanged',
        'contactWipeEnd' => 'getContactWipeEnd',
        'contactImportEnd' => 'getContactImportEnd',
        'contactCacheClear' => 'getContactCacheClear',
        'listCacheClear' => 'getListCacheClear',
        'customFieldsCacheClear' => 'getCustomFieldsCacheClear'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['systemCacheClear'] = isset($data['systemCacheClear']) ? $data['systemCacheClear'] : null;
        $this->container['systemExit'] = isset($data['systemExit']) ? $data['systemExit'] : null;
        $this->container['systemAlert'] = isset($data['systemAlert']) ? $data['systemAlert'] : null;
        $this->container['systemAccountStateChanged'] = isset($data['systemAccountStateChanged']) ? $data['systemAccountStateChanged'] : null;
        $this->container['messageDeleted'] = isset($data['messageDeleted']) ? $data['messageDeleted'] : null;
        $this->container['messageIncoming'] = isset($data['messageIncoming']) ? $data['messageIncoming'] : null;
        $this->container['messageIncomingDeleted'] = isset($data['messageIncomingDeleted']) ? $data['messageIncomingDeleted'] : null;
        $this->container['messageStateChanged'] = isset($data['messageStateChanged']) ? $data['messageStateChanged'] : null;
        $this->container['messageBulkEnd'] = isset($data['messageBulkEnd']) ? $data['messageBulkEnd'] : null;
        $this->container['messageWipeEnd'] = isset($data['messageWipeEnd']) ? $data['messageWipeEnd'] : null;
        $this->container['messageSent'] = isset($data['messageSent']) ? $data['messageSent'] : null;
        $this->container['messageSessionDeleted'] = isset($data['messageSessionDeleted']) ? $data['messageSessionDeleted'] : null;
        $this->container['messageCacheClear'] = isset($data['messageCacheClear']) ? $data['messageCacheClear'] : null;
        $this->container['messageIncomingCacheClear'] = isset($data['messageIncomingCacheClear']) ? $data['messageIncomingCacheClear'] : null;
        $this->container['messageScheduleAdded'] = isset($data['messageScheduleAdded']) ? $data['messageScheduleAdded'] : null;
        $this->container['messageScheduleStateChanged'] = isset($data['messageScheduleStateChanged']) ? $data['messageScheduleStateChanged'] : null;
        $this->container['messageScheduleDeleted'] = isset($data['messageScheduleDeleted']) ? $data['messageScheduleDeleted'] : null;
        $this->container['messageScheduleCacheClear'] = isset($data['messageScheduleCacheClear']) ? $data['messageScheduleCacheClear'] : null;
        $this->container['messageTemplateCacheClear'] = isset($data['messageTemplateCacheClear']) ? $data['messageTemplateCacheClear'] : null;
        $this->container['callFinished'] = isset($data['callFinished']) ? $data['callFinished'] : null;
        $this->container['chatCreated'] = isset($data['chatCreated']) ? $data['chatCreated'] : null;
        $this->container['chatMarkedAsRead'] = isset($data['chatMarkedAsRead']) ? $data['chatMarkedAsRead'] : null;
        $this->container['chatMuted'] = isset($data['chatMuted']) ? $data['chatMuted'] : null;
        $this->container['chatUnmuted'] = isset($data['chatUnmuted']) ? $data['chatUnmuted'] : null;
        $this->container['chatDeleted'] = isset($data['chatDeleted']) ? $data['chatDeleted'] : null;
        $this->container['chatClosed'] = isset($data['chatClosed']) ? $data['chatClosed'] : null;
        $this->container['chatReopened'] = isset($data['chatReopened']) ? $data['chatReopened'] : null;
        $this->container['chatCacheClear'] = isset($data['chatCacheClear']) ? $data['chatCacheClear'] : null;
        $this->container['contactAdded'] = isset($data['contactAdded']) ? $data['contactAdded'] : null;
        $this->container['contactDeleted'] = isset($data['contactDeleted']) ? $data['contactDeleted'] : null;
        $this->container['contactStateChanged'] = isset($data['contactStateChanged']) ? $data['contactStateChanged'] : null;
        $this->container['listAdded'] = isset($data['listAdded']) ? $data['listAdded'] : null;
        $this->container['listDeleted'] = isset($data['listDeleted']) ? $data['listDeleted'] : null;
        $this->container['listStateChanged'] = isset($data['listStateChanged']) ? $data['listStateChanged'] : null;
        $this->container['contactWipeEnd'] = isset($data['contactWipeEnd']) ? $data['contactWipeEnd'] : null;
        $this->container['contactImportEnd'] = isset($data['contactImportEnd']) ? $data['contactImportEnd'] : null;
        $this->container['contactCacheClear'] = isset($data['contactCacheClear']) ? $data['contactCacheClear'] : null;
        $this->container['listCacheClear'] = isset($data['listCacheClear']) ? $data['listCacheClear'] : null;
        $this->container['customFieldsCacheClear'] = isset($data['customFieldsCacheClear']) ? $data['customFieldsCacheClear'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['systemCacheClear'] === null) {
            $invalidProperties[] = "'systemCacheClear' can't be null";
        }
        if ($this->container['systemExit'] === null) {
            $invalidProperties[] = "'systemExit' can't be null";
        }
        if ($this->container['systemAlert'] === null) {
            $invalidProperties[] = "'systemAlert' can't be null";
        }
        if ($this->container['systemAccountStateChanged'] === null) {
            $invalidProperties[] = "'systemAccountStateChanged' can't be null";
        }
        if ($this->container['messageDeleted'] === null) {
            $invalidProperties[] = "'messageDeleted' can't be null";
        }
        if ($this->container['messageIncoming'] === null) {
            $invalidProperties[] = "'messageIncoming' can't be null";
        }
        if ($this->container['messageIncomingDeleted'] === null) {
            $invalidProperties[] = "'messageIncomingDeleted' can't be null";
        }
        if ($this->container['messageStateChanged'] === null) {
            $invalidProperties[] = "'messageStateChanged' can't be null";
        }
        if ($this->container['messageBulkEnd'] === null) {
            $invalidProperties[] = "'messageBulkEnd' can't be null";
        }
        if ($this->container['messageWipeEnd'] === null) {
            $invalidProperties[] = "'messageWipeEnd' can't be null";
        }
        if ($this->container['messageSent'] === null) {
            $invalidProperties[] = "'messageSent' can't be null";
        }
        if ($this->container['messageSessionDeleted'] === null) {
            $invalidProperties[] = "'messageSessionDeleted' can't be null";
        }
        if ($this->container['messageCacheClear'] === null) {
            $invalidProperties[] = "'messageCacheClear' can't be null";
        }
        if ($this->container['messageIncomingCacheClear'] === null) {
            $invalidProperties[] = "'messageIncomingCacheClear' can't be null";
        }
        if ($this->container['messageScheduleAdded'] === null) {
            $invalidProperties[] = "'messageScheduleAdded' can't be null";
        }
        if ($this->container['messageScheduleStateChanged'] === null) {
            $invalidProperties[] = "'messageScheduleStateChanged' can't be null";
        }
        if ($this->container['messageScheduleDeleted'] === null) {
            $invalidProperties[] = "'messageScheduleDeleted' can't be null";
        }
        if ($this->container['messageScheduleCacheClear'] === null) {
            $invalidProperties[] = "'messageScheduleCacheClear' can't be null";
        }
        if ($this->container['messageTemplateCacheClear'] === null) {
            $invalidProperties[] = "'messageTemplateCacheClear' can't be null";
        }
        if ($this->container['callFinished'] === null) {
            $invalidProperties[] = "'callFinished' can't be null";
        }
        if ($this->container['chatCreated'] === null) {
            $invalidProperties[] = "'chatCreated' can't be null";
        }
        if ($this->container['chatMarkedAsRead'] === null) {
            $invalidProperties[] = "'chatMarkedAsRead' can't be null";
        }
        if ($this->container['chatMuted'] === null) {
            $invalidProperties[] = "'chatMuted' can't be null";
        }
        if ($this->container['chatUnmuted'] === null) {
            $invalidProperties[] = "'chatUnmuted' can't be null";
        }
        if ($this->container['chatDeleted'] === null) {
            $invalidProperties[] = "'chatDeleted' can't be null";
        }
        if ($this->container['chatClosed'] === null) {
            $invalidProperties[] = "'chatClosed' can't be null";
        }
        if ($this->container['chatReopened'] === null) {
            $invalidProperties[] = "'chatReopened' can't be null";
        }
        if ($this->container['chatCacheClear'] === null) {
            $invalidProperties[] = "'chatCacheClear' can't be null";
        }
        if ($this->container['contactAdded'] === null) {
            $invalidProperties[] = "'contactAdded' can't be null";
        }
        if ($this->container['contactDeleted'] === null) {
            $invalidProperties[] = "'contactDeleted' can't be null";
        }
        if ($this->container['contactStateChanged'] === null) {
            $invalidProperties[] = "'contactStateChanged' can't be null";
        }
        if ($this->container['listAdded'] === null) {
            $invalidProperties[] = "'listAdded' can't be null";
        }
        if ($this->container['listDeleted'] === null) {
            $invalidProperties[] = "'listDeleted' can't be null";
        }
        if ($this->container['listStateChanged'] === null) {
            $invalidProperties[] = "'listStateChanged' can't be null";
        }
        if ($this->container['contactWipeEnd'] === null) {
            $invalidProperties[] = "'contactWipeEnd' can't be null";
        }
        if ($this->container['contactImportEnd'] === null) {
            $invalidProperties[] = "'contactImportEnd' can't be null";
        }
        if ($this->container['contactCacheClear'] === null) {
            $invalidProperties[] = "'contactCacheClear' can't be null";
        }
        if ($this->container['listCacheClear'] === null) {
            $invalidProperties[] = "'listCacheClear' can't be null";
        }
        if ($this->container['customFieldsCacheClear'] === null) {
            $invalidProperties[] = "'customFieldsCacheClear' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets systemCacheClear
     *
     * @return int
     */
    public function getSystemCacheClear()
    {
        return $this->container['systemCacheClear'];
    }

    /**
     * Sets systemCacheClear
     *
     * @param int $systemCacheClear systemCacheClear
     *
     * @return $this
     */
    public function setSystemCacheClear($systemCacheClear)
    {
        $this->container['systemCacheClear'] = $systemCacheClear;

        return $this;
    }

    /**
     * Gets systemExit
     *
     * @return int
     */
    public function getSystemExit()
    {
        return $this->container['systemExit'];
    }

    /**
     * Sets systemExit
     *
     * @param int $systemExit systemExit
     *
     * @return $this
     */
    public function setSystemExit($systemExit)
    {
        $this->container['systemExit'] = $systemExit;

        return $this;
    }

    /**
     * Gets systemAlert
     *
     * @return int
     */
    public function getSystemAlert()
    {
        return $this->container['systemAlert'];
    }

    /**
     * Sets systemAlert
     *
     * @param int $systemAlert systemAlert
     *
     * @return $this
     */
    public function setSystemAlert($systemAlert)
    {
        $this->container['systemAlert'] = $systemAlert;

        return $this;
    }

    /**
     * Gets systemAccountStateChanged
     *
     * @return int
     */
    public function getSystemAccountStateChanged()
    {
        return $this->container['systemAccountStateChanged'];
    }

    /**
     * Sets systemAccountStateChanged
     *
     * @param int $systemAccountStateChanged systemAccountStateChanged
     *
     * @return $this
     */
    public function setSystemAccountStateChanged($systemAccountStateChanged)
    {
        $this->container['systemAccountStateChanged'] = $systemAccountStateChanged;

        return $this;
    }

    /**
     * Gets messageDeleted
     *
     * @return int
     */
    public function getMessageDeleted()
    {
        return $this->container['messageDeleted'];
    }

    /**
     * Sets messageDeleted
     *
     * @param int $messageDeleted messageDeleted
     *
     * @return $this
     */
    public function setMessageDeleted($messageDeleted)
    {
        $this->container['messageDeleted'] = $messageDeleted;

        return $this;
    }

    /**
     * Gets messageIncoming
     *
     * @return int
     */
    public function getMessageIncoming()
    {
        return $this->container['messageIncoming'];
    }

    /**
     * Sets messageIncoming
     *
     * @param int $messageIncoming messageIncoming
     *
     * @return $this
     */
    public function setMessageIncoming($messageIncoming)
    {
        $this->container['messageIncoming'] = $messageIncoming;

        return $this;
    }

    /**
     * Gets messageIncomingDeleted
     *
     * @return int
     */
    public function getMessageIncomingDeleted()
    {
        return $this->container['messageIncomingDeleted'];
    }

    /**
     * Sets messageIncomingDeleted
     *
     * @param int $messageIncomingDeleted messageIncomingDeleted
     *
     * @return $this
     */
    public function setMessageIncomingDeleted($messageIncomingDeleted)
    {
        $this->container['messageIncomingDeleted'] = $messageIncomingDeleted;

        return $this;
    }

    /**
     * Gets messageStateChanged
     *
     * @return int
     */
    public function getMessageStateChanged()
    {
        return $this->container['messageStateChanged'];
    }

    /**
     * Sets messageStateChanged
     *
     * @param int $messageStateChanged messageStateChanged
     *
     * @return $this
     */
    public function setMessageStateChanged($messageStateChanged)
    {
        $this->container['messageStateChanged'] = $messageStateChanged;

        return $this;
    }

    /**
     * Gets messageBulkEnd
     *
     * @return int
     */
    public function getMessageBulkEnd()
    {
        return $this->container['messageBulkEnd'];
    }

    /**
     * Sets messageBulkEnd
     *
     * @param int $messageBulkEnd messageBulkEnd
     *
     * @return $this
     */
    public function setMessageBulkEnd($messageBulkEnd)
    {
        $this->container['messageBulkEnd'] = $messageBulkEnd;

        return $this;
    }

    /**
     * Gets messageWipeEnd
     *
     * @return int
     */
    public function getMessageWipeEnd()
    {
        return $this->container['messageWipeEnd'];
    }

    /**
     * Sets messageWipeEnd
     *
     * @param int $messageWipeEnd messageWipeEnd
     *
     * @return $this
     */
    public function setMessageWipeEnd($messageWipeEnd)
    {
        $this->container['messageWipeEnd'] = $messageWipeEnd;

        return $this;
    }

    /**
     * Gets messageSent
     *
     * @return int
     */
    public function getMessageSent()
    {
        return $this->container['messageSent'];
    }

    /**
     * Sets messageSent
     *
     * @param int $messageSent messageSent
     *
     * @return $this
     */
    public function setMessageSent($messageSent)
    {
        $this->container['messageSent'] = $messageSent;

        return $this;
    }

    /**
     * Gets messageSessionDeleted
     *
     * @return int
     */
    public function getMessageSessionDeleted()
    {
        return $this->container['messageSessionDeleted'];
    }

    /**
     * Sets messageSessionDeleted
     *
     * @param int $messageSessionDeleted messageSessionDeleted
     *
     * @return $this
     */
    public function setMessageSessionDeleted($messageSessionDeleted)
    {
        $this->container['messageSessionDeleted'] = $messageSessionDeleted;

        return $this;
    }

    /**
     * Gets messageCacheClear
     *
     * @return int
     */
    public function getMessageCacheClear()
    {
        return $this->container['messageCacheClear'];
    }

    /**
     * Sets messageCacheClear
     *
     * @param int $messageCacheClear messageCacheClear
     *
     * @return $this
     */
    public function setMessageCacheClear($messageCacheClear)
    {
        $this->container['messageCacheClear'] = $messageCacheClear;

        return $this;
    }

    /**
     * Gets messageIncomingCacheClear
     *
     * @return int
     */
    public function getMessageIncomingCacheClear()
    {
        return $this->container['messageIncomingCacheClear'];
    }

    /**
     * Sets messageIncomingCacheClear
     *
     * @param int $messageIncomingCacheClear messageIncomingCacheClear
     *
     * @return $this
     */
    public function setMessageIncomingCacheClear($messageIncomingCacheClear)
    {
        $this->container['messageIncomingCacheClear'] = $messageIncomingCacheClear;

        return $this;
    }

    /**
     * Gets messageScheduleAdded
     *
     * @return int
     */
    public function getMessageScheduleAdded()
    {
        return $this->container['messageScheduleAdded'];
    }

    /**
     * Sets messageScheduleAdded
     *
     * @param int $messageScheduleAdded messageScheduleAdded
     *
     * @return $this
     */
    public function setMessageScheduleAdded($messageScheduleAdded)
    {
        $this->container['messageScheduleAdded'] = $messageScheduleAdded;

        return $this;
    }

    /**
     * Gets messageScheduleStateChanged
     *
     * @return int
     */
    public function getMessageScheduleStateChanged()
    {
        return $this->container['messageScheduleStateChanged'];
    }

    /**
     * Sets messageScheduleStateChanged
     *
     * @param int $messageScheduleStateChanged messageScheduleStateChanged
     *
     * @return $this
     */
    public function setMessageScheduleStateChanged($messageScheduleStateChanged)
    {
        $this->container['messageScheduleStateChanged'] = $messageScheduleStateChanged;

        return $this;
    }

    /**
     * Gets messageScheduleDeleted
     *
     * @return int
     */
    public function getMessageScheduleDeleted()
    {
        return $this->container['messageScheduleDeleted'];
    }

    /**
     * Sets messageScheduleDeleted
     *
     * @param int $messageScheduleDeleted messageScheduleDeleted
     *
     * @return $this
     */
    public function setMessageScheduleDeleted($messageScheduleDeleted)
    {
        $this->container['messageScheduleDeleted'] = $messageScheduleDeleted;

        return $this;
    }

    /**
     * Gets messageScheduleCacheClear
     *
     * @return int
     */
    public function getMessageScheduleCacheClear()
    {
        return $this->container['messageScheduleCacheClear'];
    }

    /**
     * Sets messageScheduleCacheClear
     *
     * @param int $messageScheduleCacheClear messageScheduleCacheClear
     *
     * @return $this
     */
    public function setMessageScheduleCacheClear($messageScheduleCacheClear)
    {
        $this->container['messageScheduleCacheClear'] = $messageScheduleCacheClear;

        return $this;
    }

    /**
     * Gets messageTemplateCacheClear
     *
     * @return int
     */
    public function getMessageTemplateCacheClear()
    {
        return $this->container['messageTemplateCacheClear'];
    }

    /**
     * Sets messageTemplateCacheClear
     *
     * @param int $messageTemplateCacheClear messageTemplateCacheClear
     *
     * @return $this
     */
    public function setMessageTemplateCacheClear($messageTemplateCacheClear)
    {
        $this->container['messageTemplateCacheClear'] = $messageTemplateCacheClear;

        return $this;
    }

    /**
     * Gets callFinished
     *
     * @return int
     */
    public function getCallFinished()
    {
        return $this->container['callFinished'];
    }

    /**
     * Sets callFinished
     *
     * @param int $callFinished callFinished
     *
     * @return $this
     */
    public function setCallFinished($callFinished)
    {
        $this->container['callFinished'] = $callFinished;

        return $this;
    }

    /**
     * Gets chatCreated
     *
     * @return int
     */
    public function getChatCreated()
    {
        return $this->container['chatCreated'];
    }

    /**
     * Sets chatCreated
     *
     * @param int $chatCreated chatCreated
     *
     * @return $this
     */
    public function setChatCreated($chatCreated)
    {
        $this->container['chatCreated'] = $chatCreated;

        return $this;
    }

    /**
     * Gets chatMarkedAsRead
     *
     * @return int
     */
    public function getChatMarkedAsRead()
    {
        return $this->container['chatMarkedAsRead'];
    }

    /**
     * Sets chatMarkedAsRead
     *
     * @param int $chatMarkedAsRead chatMarkedAsRead
     *
     * @return $this
     */
    public function setChatMarkedAsRead($chatMarkedAsRead)
    {
        $this->container['chatMarkedAsRead'] = $chatMarkedAsRead;

        return $this;
    }

    /**
     * Gets chatMuted
     *
     * @return int
     */
    public function getChatMuted()
    {
        return $this->container['chatMuted'];
    }

    /**
     * Sets chatMuted
     *
     * @param int $chatMuted chatMuted
     *
     * @return $this
     */
    public function setChatMuted($chatMuted)
    {
        $this->container['chatMuted'] = $chatMuted;

        return $this;
    }

    /**
     * Gets chatUnmuted
     *
     * @return int
     */
    public function getChatUnmuted()
    {
        return $this->container['chatUnmuted'];
    }

    /**
     * Sets chatUnmuted
     *
     * @param int $chatUnmuted chatUnmuted
     *
     * @return $this
     */
    public function setChatUnmuted($chatUnmuted)
    {
        $this->container['chatUnmuted'] = $chatUnmuted;

        return $this;
    }

    /**
     * Gets chatDeleted
     *
     * @return int
     */
    public function getChatDeleted()
    {
        return $this->container['chatDeleted'];
    }

    /**
     * Sets chatDeleted
     *
     * @param int $chatDeleted chatDeleted
     *
     * @return $this
     */
    public function setChatDeleted($chatDeleted)
    {
        $this->container['chatDeleted'] = $chatDeleted;

        return $this;
    }

    /**
     * Gets chatClosed
     *
     * @return int
     */
    public function getChatClosed()
    {
        return $this->container['chatClosed'];
    }

    /**
     * Sets chatClosed
     *
     * @param int $chatClosed chatClosed
     *
     * @return $this
     */
    public function setChatClosed($chatClosed)
    {
        $this->container['chatClosed'] = $chatClosed;

        return $this;
    }

    /**
     * Gets chatReopened
     *
     * @return int
     */
    public function getChatReopened()
    {
        return $this->container['chatReopened'];
    }

    /**
     * Sets chatReopened
     *
     * @param int $chatReopened chatReopened
     *
     * @return $this
     */
    public function setChatReopened($chatReopened)
    {
        $this->container['chatReopened'] = $chatReopened;

        return $this;
    }

    /**
     * Gets chatCacheClear
     *
     * @return int
     */
    public function getChatCacheClear()
    {
        return $this->container['chatCacheClear'];
    }

    /**
     * Sets chatCacheClear
     *
     * @param int $chatCacheClear chatCacheClear
     *
     * @return $this
     */
    public function setChatCacheClear($chatCacheClear)
    {
        $this->container['chatCacheClear'] = $chatCacheClear;

        return $this;
    }

    /**
     * Gets contactAdded
     *
     * @return int
     */
    public function getContactAdded()
    {
        return $this->container['contactAdded'];
    }

    /**
     * Sets contactAdded
     *
     * @param int $contactAdded contactAdded
     *
     * @return $this
     */
    public function setContactAdded($contactAdded)
    {
        $this->container['contactAdded'] = $contactAdded;

        return $this;
    }

    /**
     * Gets contactDeleted
     *
     * @return int
     */
    public function getContactDeleted()
    {
        return $this->container['contactDeleted'];
    }

    /**
     * Sets contactDeleted
     *
     * @param int $contactDeleted contactDeleted
     *
     * @return $this
     */
    public function setContactDeleted($contactDeleted)
    {
        $this->container['contactDeleted'] = $contactDeleted;

        return $this;
    }

    /**
     * Gets contactStateChanged
     *
     * @return int
     */
    public function getContactStateChanged()
    {
        return $this->container['contactStateChanged'];
    }

    /**
     * Sets contactStateChanged
     *
     * @param int $contactStateChanged contactStateChanged
     *
     * @return $this
     */
    public function setContactStateChanged($contactStateChanged)
    {
        $this->container['contactStateChanged'] = $contactStateChanged;

        return $this;
    }

    /**
     * Gets listAdded
     *
     * @return int
     */
    public function getListAdded()
    {
        return $this->container['listAdded'];
    }

    /**
     * Sets listAdded
     *
     * @param int $listAdded listAdded
     *
     * @return $this
     */
    public function setListAdded($listAdded)
    {
        $this->container['listAdded'] = $listAdded;

        return $this;
    }

    /**
     * Gets listDeleted
     *
     * @return int
     */
    public function getListDeleted()
    {
        return $this->container['listDeleted'];
    }

    /**
     * Sets listDeleted
     *
     * @param int $listDeleted listDeleted
     *
     * @return $this
     */
    public function setListDeleted($listDeleted)
    {
        $this->container['listDeleted'] = $listDeleted;

        return $this;
    }

    /**
     * Gets listStateChanged
     *
     * @return int
     */
    public function getListStateChanged()
    {
        return $this->container['listStateChanged'];
    }

    /**
     * Sets listStateChanged
     *
     * @param int $listStateChanged listStateChanged
     *
     * @return $this
     */
    public function setListStateChanged($listStateChanged)
    {
        $this->container['listStateChanged'] = $listStateChanged;

        return $this;
    }

    /**
     * Gets contactWipeEnd
     *
     * @return int
     */
    public function getContactWipeEnd()
    {
        return $this->container['contactWipeEnd'];
    }

    /**
     * Sets contactWipeEnd
     *
     * @param int $contactWipeEnd contactWipeEnd
     *
     * @return $this
     */
    public function setContactWipeEnd($contactWipeEnd)
    {
        $this->container['contactWipeEnd'] = $contactWipeEnd;

        return $this;
    }

    /**
     * Gets contactImportEnd
     *
     * @return int
     */
    public function getContactImportEnd()
    {
        return $this->container['contactImportEnd'];
    }

    /**
     * Sets contactImportEnd
     *
     * @param int $contactImportEnd contactImportEnd
     *
     * @return $this
     */
    public function setContactImportEnd($contactImportEnd)
    {
        $this->container['contactImportEnd'] = $contactImportEnd;

        return $this;
    }

    /**
     * Gets contactCacheClear
     *
     * @return int
     */
    public function getContactCacheClear()
    {
        return $this->container['contactCacheClear'];
    }

    /**
     * Sets contactCacheClear
     *
     * @param int $contactCacheClear contactCacheClear
     *
     * @return $this
     */
    public function setContactCacheClear($contactCacheClear)
    {
        $this->container['contactCacheClear'] = $contactCacheClear;

        return $this;
    }

    /**
     * Gets listCacheClear
     *
     * @return int
     */
    public function getListCacheClear()
    {
        return $this->container['listCacheClear'];
    }

    /**
     * Sets listCacheClear
     *
     * @param int $listCacheClear listCacheClear
     *
     * @return $this
     */
    public function setListCacheClear($listCacheClear)
    {
        $this->container['listCacheClear'] = $listCacheClear;

        return $this;
    }

    /**
     * Gets customFieldsCacheClear
     *
     * @return int
     */
    public function getCustomFieldsCacheClear()
    {
        return $this->container['customFieldsCacheClear'];
    }

    /**
     * Sets customFieldsCacheClear
     *
     * @param int $customFieldsCacheClear customFieldsCacheClear
     *
     * @return $this
     */
    public function setCustomFieldsCacheClear($customFieldsCacheClear)
    {
        $this->container['customFieldsCacheClear'] = $customFieldsCacheClear;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


