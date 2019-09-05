<?php
/**
 * MessagingStatItem
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
 * MessagingStatItem Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagingStatItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessagingStatItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'replyRate' => 'float',
        'date' => '\DateTime',
        'deliveryRate' => 'float',
        'costs' => 'float',
        'messagesReceived' => 'int',
        'messagesSentDelivered' => 'int',
        'messagesSentAccepted' => 'int',
        'messagesSentBuffered' => 'int',
        'messagesSentFailed' => 'int',
        'messagesSentRejected' => 'int',
        'messagesSentParts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'replyRate' => 'float',
        'date' => 'date-time',
        'deliveryRate' => 'float',
        'costs' => 'float',
        'messagesReceived' => null,
        'messagesSentDelivered' => null,
        'messagesSentAccepted' => null,
        'messagesSentBuffered' => null,
        'messagesSentFailed' => null,
        'messagesSentRejected' => null,
        'messagesSentParts' => null
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
        'replyRate' => 'replyRate',
        'date' => 'date',
        'deliveryRate' => 'deliveryRate',
        'costs' => 'costs',
        'messagesReceived' => 'messagesReceived',
        'messagesSentDelivered' => 'messagesSentDelivered',
        'messagesSentAccepted' => 'messagesSentAccepted',
        'messagesSentBuffered' => 'messagesSentBuffered',
        'messagesSentFailed' => 'messagesSentFailed',
        'messagesSentRejected' => 'messagesSentRejected',
        'messagesSentParts' => 'messagesSentParts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'replyRate' => 'setReplyRate',
        'date' => 'setDate',
        'deliveryRate' => 'setDeliveryRate',
        'costs' => 'setCosts',
        'messagesReceived' => 'setMessagesReceived',
        'messagesSentDelivered' => 'setMessagesSentDelivered',
        'messagesSentAccepted' => 'setMessagesSentAccepted',
        'messagesSentBuffered' => 'setMessagesSentBuffered',
        'messagesSentFailed' => 'setMessagesSentFailed',
        'messagesSentRejected' => 'setMessagesSentRejected',
        'messagesSentParts' => 'setMessagesSentParts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'replyRate' => 'getReplyRate',
        'date' => 'getDate',
        'deliveryRate' => 'getDeliveryRate',
        'costs' => 'getCosts',
        'messagesReceived' => 'getMessagesReceived',
        'messagesSentDelivered' => 'getMessagesSentDelivered',
        'messagesSentAccepted' => 'getMessagesSentAccepted',
        'messagesSentBuffered' => 'getMessagesSentBuffered',
        'messagesSentFailed' => 'getMessagesSentFailed',
        'messagesSentRejected' => 'getMessagesSentRejected',
        'messagesSentParts' => 'getMessagesSentParts'
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
        $this->container['replyRate'] = isset($data['replyRate']) ? $data['replyRate'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['deliveryRate'] = isset($data['deliveryRate']) ? $data['deliveryRate'] : null;
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['messagesReceived'] = isset($data['messagesReceived']) ? $data['messagesReceived'] : null;
        $this->container['messagesSentDelivered'] = isset($data['messagesSentDelivered']) ? $data['messagesSentDelivered'] : null;
        $this->container['messagesSentAccepted'] = isset($data['messagesSentAccepted']) ? $data['messagesSentAccepted'] : null;
        $this->container['messagesSentBuffered'] = isset($data['messagesSentBuffered']) ? $data['messagesSentBuffered'] : null;
        $this->container['messagesSentFailed'] = isset($data['messagesSentFailed']) ? $data['messagesSentFailed'] : null;
        $this->container['messagesSentRejected'] = isset($data['messagesSentRejected']) ? $data['messagesSentRejected'] : null;
        $this->container['messagesSentParts'] = isset($data['messagesSentParts']) ? $data['messagesSentParts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['replyRate'] === null) {
            $invalidProperties[] = "'replyRate' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['deliveryRate'] === null) {
            $invalidProperties[] = "'deliveryRate' can't be null";
        }
        if ($this->container['costs'] === null) {
            $invalidProperties[] = "'costs' can't be null";
        }
        if ($this->container['messagesReceived'] === null) {
            $invalidProperties[] = "'messagesReceived' can't be null";
        }
        if ($this->container['messagesSentDelivered'] === null) {
            $invalidProperties[] = "'messagesSentDelivered' can't be null";
        }
        if ($this->container['messagesSentAccepted'] === null) {
            $invalidProperties[] = "'messagesSentAccepted' can't be null";
        }
        if ($this->container['messagesSentBuffered'] === null) {
            $invalidProperties[] = "'messagesSentBuffered' can't be null";
        }
        if ($this->container['messagesSentFailed'] === null) {
            $invalidProperties[] = "'messagesSentFailed' can't be null";
        }
        if ($this->container['messagesSentRejected'] === null) {
            $invalidProperties[] = "'messagesSentRejected' can't be null";
        }
        if ($this->container['messagesSentParts'] === null) {
            $invalidProperties[] = "'messagesSentParts' can't be null";
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
     * Gets replyRate
     *
     * @return float
     */
    public function getReplyRate()
    {
        return $this->container['replyRate'];
    }

    /**
     * Sets replyRate
     *
     * @param float $replyRate replyRate
     *
     * @return $this
     */
    public function setReplyRate($replyRate)
    {
        $this->container['replyRate'] = $replyRate;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets deliveryRate
     *
     * @return float
     */
    public function getDeliveryRate()
    {
        return $this->container['deliveryRate'];
    }

    /**
     * Sets deliveryRate
     *
     * @param float $deliveryRate deliveryRate
     *
     * @return $this
     */
    public function setDeliveryRate($deliveryRate)
    {
        $this->container['deliveryRate'] = $deliveryRate;

        return $this;
    }

    /**
     * Gets costs
     *
     * @return float
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     *
     * @param float $costs costs
     *
     * @return $this
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets messagesReceived
     *
     * @return int
     */
    public function getMessagesReceived()
    {
        return $this->container['messagesReceived'];
    }

    /**
     * Sets messagesReceived
     *
     * @param int $messagesReceived messagesReceived
     *
     * @return $this
     */
    public function setMessagesReceived($messagesReceived)
    {
        $this->container['messagesReceived'] = $messagesReceived;

        return $this;
    }

    /**
     * Gets messagesSentDelivered
     *
     * @return int
     */
    public function getMessagesSentDelivered()
    {
        return $this->container['messagesSentDelivered'];
    }

    /**
     * Sets messagesSentDelivered
     *
     * @param int $messagesSentDelivered messagesSentDelivered
     *
     * @return $this
     */
    public function setMessagesSentDelivered($messagesSentDelivered)
    {
        $this->container['messagesSentDelivered'] = $messagesSentDelivered;

        return $this;
    }

    /**
     * Gets messagesSentAccepted
     *
     * @return int
     */
    public function getMessagesSentAccepted()
    {
        return $this->container['messagesSentAccepted'];
    }

    /**
     * Sets messagesSentAccepted
     *
     * @param int $messagesSentAccepted messagesSentAccepted
     *
     * @return $this
     */
    public function setMessagesSentAccepted($messagesSentAccepted)
    {
        $this->container['messagesSentAccepted'] = $messagesSentAccepted;

        return $this;
    }

    /**
     * Gets messagesSentBuffered
     *
     * @return int
     */
    public function getMessagesSentBuffered()
    {
        return $this->container['messagesSentBuffered'];
    }

    /**
     * Sets messagesSentBuffered
     *
     * @param int $messagesSentBuffered messagesSentBuffered
     *
     * @return $this
     */
    public function setMessagesSentBuffered($messagesSentBuffered)
    {
        $this->container['messagesSentBuffered'] = $messagesSentBuffered;

        return $this;
    }

    /**
     * Gets messagesSentFailed
     *
     * @return int
     */
    public function getMessagesSentFailed()
    {
        return $this->container['messagesSentFailed'];
    }

    /**
     * Sets messagesSentFailed
     *
     * @param int $messagesSentFailed messagesSentFailed
     *
     * @return $this
     */
    public function setMessagesSentFailed($messagesSentFailed)
    {
        $this->container['messagesSentFailed'] = $messagesSentFailed;

        return $this;
    }

    /**
     * Gets messagesSentRejected
     *
     * @return int
     */
    public function getMessagesSentRejected()
    {
        return $this->container['messagesSentRejected'];
    }

    /**
     * Sets messagesSentRejected
     *
     * @param int $messagesSentRejected messagesSentRejected
     *
     * @return $this
     */
    public function setMessagesSentRejected($messagesSentRejected)
    {
        $this->container['messagesSentRejected'] = $messagesSentRejected;

        return $this;
    }

    /**
     * Gets messagesSentParts
     *
     * @return int
     */
    public function getMessagesSentParts()
    {
        return $this->container['messagesSentParts'];
    }

    /**
     * Sets messagesSentParts
     *
     * @param int $messagesSentParts messagesSentParts
     *
     * @return $this
     */
    public function setMessagesSentParts($messagesSentParts)
    {
        $this->container['messagesSentParts'] = $messagesSentParts;

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


