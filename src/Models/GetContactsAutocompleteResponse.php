<?php
/**
 * GetContactsAutocompleteResponse
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
 * GetContactsAutocompleteResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetContactsAutocompleteResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetContactsAutocompleteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entityId' => 'int',
        'entityType' => 'string',
        'value' => 'string',
        'label' => 'string',
        'sharedBy' => 'string',
        'avatar' => 'string',
        'favorited' => 'bool',
        'userId' => 'int',
        'countryName' => 'string',
        'qposition' => 'int',
        'rposition' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entityId' => null,
        'entityType' => null,
        'value' => null,
        'label' => null,
        'sharedBy' => null,
        'avatar' => null,
        'favorited' => null,
        'userId' => null,
        'countryName' => null,
        'qposition' => null,
        'rposition' => null
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
        'entityId' => 'entityId',
        'entityType' => 'entityType',
        'value' => 'value',
        'label' => 'label',
        'sharedBy' => 'sharedBy',
        'avatar' => 'avatar',
        'favorited' => 'favorited',
        'userId' => 'userId',
        'countryName' => 'countryName',
        'qposition' => 'qposition',
        'rposition' => 'rposition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entityId' => 'setEntityId',
        'entityType' => 'setEntityType',
        'value' => 'setValue',
        'label' => 'setLabel',
        'sharedBy' => 'setSharedBy',
        'avatar' => 'setAvatar',
        'favorited' => 'setFavorited',
        'userId' => 'setUserId',
        'countryName' => 'setCountryName',
        'qposition' => 'setQposition',
        'rposition' => 'setRposition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entityId' => 'getEntityId',
        'entityType' => 'getEntityType',
        'value' => 'getValue',
        'label' => 'getLabel',
        'sharedBy' => 'getSharedBy',
        'avatar' => 'getAvatar',
        'favorited' => 'getFavorited',
        'userId' => 'getUserId',
        'countryName' => 'getCountryName',
        'qposition' => 'getQposition',
        'rposition' => 'getRposition'
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

    const ENTITY_TYPE__LIST = 'list';
    const ENTITY_TYPE_CONTACT = 'contact';
    const ENTITY_TYPE_REPLY = 'reply';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityTypeAllowableValues()
    {
        return [
            self::ENTITY_TYPE__LIST,
            self::ENTITY_TYPE_CONTACT,
            self::ENTITY_TYPE_REPLY,
        ];
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
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['sharedBy'] = isset($data['sharedBy']) ? $data['sharedBy'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['favorited'] = isset($data['favorited']) ? $data['favorited'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['countryName'] = isset($data['countryName']) ? $data['countryName'] : null;
        $this->container['qposition'] = isset($data['qposition']) ? $data['qposition'] : null;
        $this->container['rposition'] = isset($data['rposition']) ? $data['rposition'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!is_null($this->container['entityType']) && !in_array($this->container['entityType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entityType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['sharedBy'] === null) {
            $invalidProperties[] = "'sharedBy' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['favorited'] === null) {
            $invalidProperties[] = "'favorited' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['countryName'] === null) {
            $invalidProperties[] = "'countryName' can't be null";
        }
        if ($this->container['qposition'] === null) {
            $invalidProperties[] = "'qposition' can't be null";
        }
        if ($this->container['rposition'] === null) {
            $invalidProperties[] = "'rposition' can't be null";
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
     * Gets entityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param int $entityId Id of entity. 0 if object is a Reply
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string $entityType 
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!in_array($entityType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entityType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Id of contact/list if entityType is contact/list OR phone number if entityType is reply
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Name of the contact/list if entityType is contact/list OR phone number if entityType is reply
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets sharedBy
     *
     * @return string
     */
    public function getSharedBy()
    {
        return $this->container['sharedBy'];
    }

    /**
     * Sets sharedBy
     *
     * @param string $sharedBy If contact or list was shared by another user then name if this user will be shown
     *
     * @return $this
     */
    public function setSharedBy($sharedBy)
    {
        $this->container['sharedBy'] = $sharedBy;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets favorited
     *
     * @return bool
     */
    public function getFavorited()
    {
        return $this->container['favorited'];
    }

    /**
     * Sets favorited
     *
     * @param bool $favorited If contact was marked as favourited
     *
     * @return $this
     */
    public function setFavorited($favorited)
    {
        $this->container['favorited'] = $favorited;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId Owner id of the contact/list (if it was shared)
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['countryName'];
    }

    /**
     * Sets countryName
     *
     * @param string $countryName countryName
     *
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->container['countryName'] = $countryName;

        return $this;
    }

    /**
     * Gets qposition
     *
     * @return int
     */
    public function getQposition()
    {
        return $this->container['qposition'];
    }

    /**
     * Sets qposition
     *
     * @param int $qposition qposition
     *
     * @return $this
     */
    public function setQposition($qposition)
    {
        $this->container['qposition'] = $qposition;

        return $this;
    }

    /**
     * Gets rposition
     *
     * @return int
     */
    public function getRposition()
    {
        return $this->container['rposition'];
    }

    /**
     * Sets rposition
     *
     * @param int $rposition rposition
     *
     * @return $this
     */
    public function setRposition($rposition)
    {
        $this->container['rposition'] = $rposition;

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


