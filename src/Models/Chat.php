<?php
/**
 * Chat
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
 * Chat Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Chat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'originalId' => 'int',
        'phone' => 'string',
        'contact' => '\TextMagic\Models\Contact',
        'unsubscribedContactId' => 'int',
        'unread' => 'int',
        'updatedAt' => '\DateTime',
        'status' => 'string',
        'mute' => 'int',
        'lastMessage' => 'string',
        'direction' => 'string',
        'from' => 'string',
        'mutedUntil' => 'string',
        'timeLeftMute' => 'int',
        'country' => '\TextMagic\Models\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'originalId' => null,
        'phone' => null,
        'contact' => null,
        'unsubscribedContactId' => null,
        'unread' => null,
        'updatedAt' => 'date-time',
        'status' => null,
        'mute' => null,
        'lastMessage' => null,
        'direction' => null,
        'from' => null,
        'mutedUntil' => null,
        'timeLeftMute' => null,
        'country' => null
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
        'id' => 'id',
        'originalId' => 'originalId',
        'phone' => 'phone',
        'contact' => 'contact',
        'unsubscribedContactId' => 'unsubscribedContactId',
        'unread' => 'unread',
        'updatedAt' => 'updatedAt',
        'status' => 'status',
        'mute' => 'mute',
        'lastMessage' => 'lastMessage',
        'direction' => 'direction',
        'from' => 'from',
        'mutedUntil' => 'mutedUntil',
        'timeLeftMute' => 'timeLeftMute',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'originalId' => 'setOriginalId',
        'phone' => 'setPhone',
        'contact' => 'setContact',
        'unsubscribedContactId' => 'setUnsubscribedContactId',
        'unread' => 'setUnread',
        'updatedAt' => 'setUpdatedAt',
        'status' => 'setStatus',
        'mute' => 'setMute',
        'lastMessage' => 'setLastMessage',
        'direction' => 'setDirection',
        'from' => 'setFrom',
        'mutedUntil' => 'setMutedUntil',
        'timeLeftMute' => 'setTimeLeftMute',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'originalId' => 'getOriginalId',
        'phone' => 'getPhone',
        'contact' => 'getContact',
        'unsubscribedContactId' => 'getUnsubscribedContactId',
        'unread' => 'getUnread',
        'updatedAt' => 'getUpdatedAt',
        'status' => 'getStatus',
        'mute' => 'getMute',
        'lastMessage' => 'getLastMessage',
        'direction' => 'getDirection',
        'from' => 'getFrom',
        'mutedUntil' => 'getMutedUntil',
        'timeLeftMute' => 'getTimeLeftMute',
        'country' => 'getCountry'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['originalId'] = isset($data['originalId']) ? $data['originalId'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['unsubscribedContactId'] = isset($data['unsubscribedContactId']) ? $data['unsubscribedContactId'] : null;
        $this->container['unread'] = isset($data['unread']) ? $data['unread'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mute'] = isset($data['mute']) ? $data['mute'] : null;
        $this->container['lastMessage'] = isset($data['lastMessage']) ? $data['lastMessage'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['mutedUntil'] = isset($data['mutedUntil']) ? $data['mutedUntil'] : null;
        $this->container['timeLeftMute'] = isset($data['timeLeftMute']) ? $data['timeLeftMute'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['originalId'] === null) {
            $invalidProperties[] = "'originalId' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['unsubscribedContactId'] === null) {
            $invalidProperties[] = "'unsubscribedContactId' can't be null";
        }
        if ($this->container['unread'] === null) {
            $invalidProperties[] = "'unread' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['mute'] === null) {
            $invalidProperties[] = "'mute' can't be null";
        }
        if ($this->container['lastMessage'] === null) {
            $invalidProperties[] = "'lastMessage' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['mutedUntil'] === null) {
            $invalidProperties[] = "'mutedUntil' can't be null";
        }
        if ($this->container['timeLeftMute'] === null) {
            $invalidProperties[] = "'timeLeftMute' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets originalId
     *
     * @return int
     */
    public function getOriginalId()
    {
        return $this->container['originalId'];
    }

    /**
     * Sets originalId
     *
     * @param int $originalId originalId
     *
     * @return $this
     */
    public function setOriginalId($originalId)
    {
        $this->container['originalId'] = $originalId;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \TextMagic\Models\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \TextMagic\Models\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets unsubscribedContactId
     *
     * @return int
     */
    public function getUnsubscribedContactId()
    {
        return $this->container['unsubscribedContactId'];
    }

    /**
     * Sets unsubscribedContactId
     *
     * @param int $unsubscribedContactId unsubscribedContactId
     *
     * @return $this
     */
    public function setUnsubscribedContactId($unsubscribedContactId)
    {
        $this->container['unsubscribedContactId'] = $unsubscribedContactId;

        return $this;
    }

    /**
     * Gets unread
     *
     * @return int
     */
    public function getUnread()
    {
        return $this->container['unread'];
    }

    /**
     * Sets unread
     *
     * @param int $unread unread
     *
     * @return $this
     */
    public function setUnread($unread)
    {
        $this->container['unread'] = $unread;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets mute
     *
     * @return int
     */
    public function getMute()
    {
        return $this->container['mute'];
    }

    /**
     * Sets mute
     *
     * @param int $mute mute
     *
     * @return $this
     */
    public function setMute($mute)
    {
        $this->container['mute'] = $mute;

        return $this;
    }

    /**
     * Gets lastMessage
     *
     * @return string
     */
    public function getLastMessage()
    {
        return $this->container['lastMessage'];
    }

    /**
     * Sets lastMessage
     *
     * @param string $lastMessage lastMessage
     *
     * @return $this
     */
    public function setLastMessage($lastMessage)
    {
        $this->container['lastMessage'] = $lastMessage;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets mutedUntil
     *
     * @return string
     */
    public function getMutedUntil()
    {
        return $this->container['mutedUntil'];
    }

    /**
     * Sets mutedUntil
     *
     * @param string $mutedUntil mutedUntil
     *
     * @return $this
     */
    public function setMutedUntil($mutedUntil)
    {
        $this->container['mutedUntil'] = $mutedUntil;

        return $this;
    }

    /**
     * Gets timeLeftMute
     *
     * @return int
     */
    public function getTimeLeftMute()
    {
        return $this->container['timeLeftMute'];
    }

    /**
     * Sets timeLeftMute
     *
     * @param int $timeLeftMute timeLeftMute
     *
     * @return $this
     */
    public function setTimeLeftMute($timeLeftMute)
    {
        $this->container['timeLeftMute'] = $timeLeftMute;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \TextMagic\Models\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \TextMagic\Models\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


