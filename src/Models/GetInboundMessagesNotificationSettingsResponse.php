<?php
/**
 * GetInboundMessagesNotificationSettingsResponse
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
 * GetInboundMessagesNotificationSettingsResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInboundMessagesNotificationSettingsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetInboundMessagesNotificationSettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inboundMessageNotification' => 'bool',
        'forwardedCallNotification' => 'bool',
        'includeSmsHistory' => 'bool',
        'sendInHtmlFormat' => 'bool',
        'alertEmail1' => 'string',
        'alertEmail2' => 'string',
        'alertEmail3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inboundMessageNotification' => null,
        'forwardedCallNotification' => null,
        'includeSmsHistory' => null,
        'sendInHtmlFormat' => null,
        'alertEmail1' => null,
        'alertEmail2' => null,
        'alertEmail3' => null
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
        'inboundMessageNotification' => 'inboundMessageNotification',
        'forwardedCallNotification' => 'forwardedCallNotification',
        'includeSmsHistory' => 'includeSmsHistory',
        'sendInHtmlFormat' => 'sendInHtmlFormat',
        'alertEmail1' => 'alertEmail1',
        'alertEmail2' => 'alertEmail2',
        'alertEmail3' => 'alertEmail3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inboundMessageNotification' => 'setInboundMessageNotification',
        'forwardedCallNotification' => 'setForwardedCallNotification',
        'includeSmsHistory' => 'setIncludeSmsHistory',
        'sendInHtmlFormat' => 'setSendInHtmlFormat',
        'alertEmail1' => 'setAlertEmail1',
        'alertEmail2' => 'setAlertEmail2',
        'alertEmail3' => 'setAlertEmail3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inboundMessageNotification' => 'getInboundMessageNotification',
        'forwardedCallNotification' => 'getForwardedCallNotification',
        'includeSmsHistory' => 'getIncludeSmsHistory',
        'sendInHtmlFormat' => 'getSendInHtmlFormat',
        'alertEmail1' => 'getAlertEmail1',
        'alertEmail2' => 'getAlertEmail2',
        'alertEmail3' => 'getAlertEmail3'
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
        $this->container['inboundMessageNotification'] = isset($data['inboundMessageNotification']) ? $data['inboundMessageNotification'] : null;
        $this->container['forwardedCallNotification'] = isset($data['forwardedCallNotification']) ? $data['forwardedCallNotification'] : null;
        $this->container['includeSmsHistory'] = isset($data['includeSmsHistory']) ? $data['includeSmsHistory'] : null;
        $this->container['sendInHtmlFormat'] = isset($data['sendInHtmlFormat']) ? $data['sendInHtmlFormat'] : null;
        $this->container['alertEmail1'] = isset($data['alertEmail1']) ? $data['alertEmail1'] : null;
        $this->container['alertEmail2'] = isset($data['alertEmail2']) ? $data['alertEmail2'] : null;
        $this->container['alertEmail3'] = isset($data['alertEmail3']) ? $data['alertEmail3'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inboundMessageNotification'] === null) {
            $invalidProperties[] = "'inboundMessageNotification' can't be null";
        }
        if ($this->container['forwardedCallNotification'] === null) {
            $invalidProperties[] = "'forwardedCallNotification' can't be null";
        }
        if ($this->container['includeSmsHistory'] === null) {
            $invalidProperties[] = "'includeSmsHistory' can't be null";
        }
        if ($this->container['sendInHtmlFormat'] === null) {
            $invalidProperties[] = "'sendInHtmlFormat' can't be null";
        }
        if ($this->container['alertEmail1'] === null) {
            $invalidProperties[] = "'alertEmail1' can't be null";
        }
        if ($this->container['alertEmail2'] === null) {
            $invalidProperties[] = "'alertEmail2' can't be null";
        }
        if ($this->container['alertEmail3'] === null) {
            $invalidProperties[] = "'alertEmail3' can't be null";
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
     * Gets inboundMessageNotification
     *
     * @return bool
     */
    public function getInboundMessageNotification()
    {
        return $this->container['inboundMessageNotification'];
    }

    /**
     * Sets inboundMessageNotification
     *
     * @param bool $inboundMessageNotification Should user receive notification about new incoming messages
     *
     * @return $this
     */
    public function setInboundMessageNotification($inboundMessageNotification)
    {
        $this->container['inboundMessageNotification'] = $inboundMessageNotification;

        return $this;
    }

    /**
     * Gets forwardedCallNotification
     *
     * @return bool
     */
    public function getForwardedCallNotification()
    {
        return $this->container['forwardedCallNotification'];
    }

    /**
     * Sets forwardedCallNotification
     *
     * @param bool $forwardedCallNotification Should user receive notification about new forwarded calls
     *
     * @return $this
     */
    public function setForwardedCallNotification($forwardedCallNotification)
    {
        $this->container['forwardedCallNotification'] = $forwardedCallNotification;

        return $this;
    }

    /**
     * Gets includeSmsHistory
     *
     * @return bool
     */
    public function getIncludeSmsHistory()
    {
        return $this->container['includeSmsHistory'];
    }

    /**
     * Sets includeSmsHistory
     *
     * @param bool $includeSmsHistory Include SMS history into notification Email
     *
     * @return $this
     */
    public function setIncludeSmsHistory($includeSmsHistory)
    {
        $this->container['includeSmsHistory'] = $includeSmsHistory;

        return $this;
    }

    /**
     * Gets sendInHtmlFormat
     *
     * @return bool
     */
    public function getSendInHtmlFormat()
    {
        return $this->container['sendInHtmlFormat'];
    }

    /**
     * Sets sendInHtmlFormat
     *
     * @param bool $sendInHtmlFormat Send Email notification in HTML format
     *
     * @return $this
     */
    public function setSendInHtmlFormat($sendInHtmlFormat)
    {
        $this->container['sendInHtmlFormat'] = $sendInHtmlFormat;

        return $this;
    }

    /**
     * Gets alertEmail1
     *
     * @return string
     */
    public function getAlertEmail1()
    {
        return $this->container['alertEmail1'];
    }

    /**
     * Sets alertEmail1
     *
     * @param string $alertEmail1 New message notification email 2
     *
     * @return $this
     */
    public function setAlertEmail1($alertEmail1)
    {
        $this->container['alertEmail1'] = $alertEmail1;

        return $this;
    }

    /**
     * Gets alertEmail2
     *
     * @return string
     */
    public function getAlertEmail2()
    {
        return $this->container['alertEmail2'];
    }

    /**
     * Sets alertEmail2
     *
     * @param string $alertEmail2 New message notification email 2
     *
     * @return $this
     */
    public function setAlertEmail2($alertEmail2)
    {
        $this->container['alertEmail2'] = $alertEmail2;

        return $this;
    }

    /**
     * Gets alertEmail3
     *
     * @return string
     */
    public function getAlertEmail3()
    {
        return $this->container['alertEmail3'];
    }

    /**
     * Sets alertEmail3
     *
     * @param string $alertEmail3 New message notification email 3
     *
     * @return $this
     */
    public function setAlertEmail3($alertEmail3)
    {
        $this->container['alertEmail3'] = $alertEmail3;

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


