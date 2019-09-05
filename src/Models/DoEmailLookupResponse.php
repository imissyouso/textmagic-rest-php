<?php
/**
 * DoEmailLookupResponse
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
 * DoEmailLookupResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DoEmailLookupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DoEmailLookupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
        'addressType' => 'string',
        'emailRole' => 'string',
        'reason' => 'string',
        'status' => 'string',
        'deliverability' => 'string',
        'isDisposableAddress' => 'bool',
        'localPart' => 'string',
        'domainPart' => 'string',
        'exchange' => 'string',
        'isInWhiteList' => 'bool',
        'isInBlackList' => 'bool',
        'hasMx' => 'bool',
        'hasAa' => 'bool',
        'hasAaaa' => 'bool',
        'risk' => 'string',
        'preference' => 'int',
        'suggestion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => 'email',
        'addressType' => null,
        'emailRole' => null,
        'reason' => null,
        'status' => null,
        'deliverability' => null,
        'isDisposableAddress' => null,
        'localPart' => null,
        'domainPart' => null,
        'exchange' => null,
        'isInWhiteList' => null,
        'isInBlackList' => null,
        'hasMx' => null,
        'hasAa' => null,
        'hasAaaa' => null,
        'risk' => null,
        'preference' => null,
        'suggestion' => null
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
        'address' => 'address',
        'addressType' => 'addressType',
        'emailRole' => 'emailRole',
        'reason' => 'reason',
        'status' => 'status',
        'deliverability' => 'deliverability',
        'isDisposableAddress' => 'isDisposableAddress',
        'localPart' => 'localPart',
        'domainPart' => 'domainPart',
        'exchange' => 'exchange',
        'isInWhiteList' => 'isInWhiteList',
        'isInBlackList' => 'isInBlackList',
        'hasMx' => 'hasMx',
        'hasAa' => 'hasAa',
        'hasAaaa' => 'hasAaaa',
        'risk' => 'risk',
        'preference' => 'preference',
        'suggestion' => 'suggestion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'addressType' => 'setAddressType',
        'emailRole' => 'setEmailRole',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'deliverability' => 'setDeliverability',
        'isDisposableAddress' => 'setIsDisposableAddress',
        'localPart' => 'setLocalPart',
        'domainPart' => 'setDomainPart',
        'exchange' => 'setExchange',
        'isInWhiteList' => 'setIsInWhiteList',
        'isInBlackList' => 'setIsInBlackList',
        'hasMx' => 'setHasMx',
        'hasAa' => 'setHasAa',
        'hasAaaa' => 'setHasAaaa',
        'risk' => 'setRisk',
        'preference' => 'setPreference',
        'suggestion' => 'setSuggestion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'addressType' => 'getAddressType',
        'emailRole' => 'getEmailRole',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'deliverability' => 'getDeliverability',
        'isDisposableAddress' => 'getIsDisposableAddress',
        'localPart' => 'getLocalPart',
        'domainPart' => 'getDomainPart',
        'exchange' => 'getExchange',
        'isInWhiteList' => 'getIsInWhiteList',
        'isInBlackList' => 'getIsInBlackList',
        'hasMx' => 'getHasMx',
        'hasAa' => 'getHasAa',
        'hasAaaa' => 'getHasAaaa',
        'risk' => 'getRisk',
        'preference' => 'getPreference',
        'suggestion' => 'getSuggestion'
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

    const STATUS_VALID = 'valid';
    const STATUS_INVALID = 'invalid';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALID,
            self::STATUS_INVALID,
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['emailRole'] = isset($data['emailRole']) ? $data['emailRole'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deliverability'] = isset($data['deliverability']) ? $data['deliverability'] : null;
        $this->container['isDisposableAddress'] = isset($data['isDisposableAddress']) ? $data['isDisposableAddress'] : null;
        $this->container['localPart'] = isset($data['localPart']) ? $data['localPart'] : null;
        $this->container['domainPart'] = isset($data['domainPart']) ? $data['domainPart'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['isInWhiteList'] = isset($data['isInWhiteList']) ? $data['isInWhiteList'] : null;
        $this->container['isInBlackList'] = isset($data['isInBlackList']) ? $data['isInBlackList'] : null;
        $this->container['hasMx'] = isset($data['hasMx']) ? $data['hasMx'] : null;
        $this->container['hasAa'] = isset($data['hasAa']) ? $data['hasAa'] : null;
        $this->container['hasAaaa'] = isset($data['hasAaaa']) ? $data['hasAaaa'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['preference'] = isset($data['preference']) ? $data['preference'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['addressType'] === null) {
            $invalidProperties[] = "'addressType' can't be null";
        }
        if ($this->container['emailRole'] === null) {
            $invalidProperties[] = "'emailRole' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['deliverability'] === null) {
            $invalidProperties[] = "'deliverability' can't be null";
        }
        if ($this->container['isDisposableAddress'] === null) {
            $invalidProperties[] = "'isDisposableAddress' can't be null";
        }
        if ($this->container['localPart'] === null) {
            $invalidProperties[] = "'localPart' can't be null";
        }
        if ($this->container['domainPart'] === null) {
            $invalidProperties[] = "'domainPart' can't be null";
        }
        if ($this->container['exchange'] === null) {
            $invalidProperties[] = "'exchange' can't be null";
        }
        if ($this->container['isInWhiteList'] === null) {
            $invalidProperties[] = "'isInWhiteList' can't be null";
        }
        if ($this->container['isInBlackList'] === null) {
            $invalidProperties[] = "'isInBlackList' can't be null";
        }
        if ($this->container['hasMx'] === null) {
            $invalidProperties[] = "'hasMx' can't be null";
        }
        if ($this->container['hasAa'] === null) {
            $invalidProperties[] = "'hasAa' can't be null";
        }
        if ($this->container['hasAaaa'] === null) {
            $invalidProperties[] = "'hasAaaa' can't be null";
        }
        if ($this->container['risk'] === null) {
            $invalidProperties[] = "'risk' can't be null";
        }
        if ($this->container['preference'] === null) {
            $invalidProperties[] = "'preference' can't be null";
        }
        if ($this->container['suggestion'] === null) {
            $invalidProperties[] = "'suggestion' can't be null";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param string $addressType addressType
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;

        return $this;
    }

    /**
     * Gets emailRole
     *
     * @return string
     */
    public function getEmailRole()
    {
        return $this->container['emailRole'];
    }

    /**
     * Sets emailRole
     *
     * @param string $emailRole emailRole
     *
     * @return $this
     */
    public function setEmailRole($emailRole)
    {
        $this->container['emailRole'] = $emailRole;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets deliverability
     *
     * @return string
     */
    public function getDeliverability()
    {
        return $this->container['deliverability'];
    }

    /**
     * Sets deliverability
     *
     * @param string $deliverability deliverability
     *
     * @return $this
     */
    public function setDeliverability($deliverability)
    {
        $this->container['deliverability'] = $deliverability;

        return $this;
    }

    /**
     * Gets isDisposableAddress
     *
     * @return bool
     */
    public function getIsDisposableAddress()
    {
        return $this->container['isDisposableAddress'];
    }

    /**
     * Sets isDisposableAddress
     *
     * @param bool $isDisposableAddress isDisposableAddress
     *
     * @return $this
     */
    public function setIsDisposableAddress($isDisposableAddress)
    {
        $this->container['isDisposableAddress'] = $isDisposableAddress;

        return $this;
    }

    /**
     * Gets localPart
     *
     * @return string
     */
    public function getLocalPart()
    {
        return $this->container['localPart'];
    }

    /**
     * Sets localPart
     *
     * @param string $localPart localPart
     *
     * @return $this
     */
    public function setLocalPart($localPart)
    {
        $this->container['localPart'] = $localPart;

        return $this;
    }

    /**
     * Gets domainPart
     *
     * @return string
     */
    public function getDomainPart()
    {
        return $this->container['domainPart'];
    }

    /**
     * Sets domainPart
     *
     * @param string $domainPart domainPart
     *
     * @return $this
     */
    public function setDomainPart($domainPart)
    {
        $this->container['domainPart'] = $domainPart;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange exchange
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets isInWhiteList
     *
     * @return bool
     */
    public function getIsInWhiteList()
    {
        return $this->container['isInWhiteList'];
    }

    /**
     * Sets isInWhiteList
     *
     * @param bool $isInWhiteList isInWhiteList
     *
     * @return $this
     */
    public function setIsInWhiteList($isInWhiteList)
    {
        $this->container['isInWhiteList'] = $isInWhiteList;

        return $this;
    }

    /**
     * Gets isInBlackList
     *
     * @return bool
     */
    public function getIsInBlackList()
    {
        return $this->container['isInBlackList'];
    }

    /**
     * Sets isInBlackList
     *
     * @param bool $isInBlackList isInBlackList
     *
     * @return $this
     */
    public function setIsInBlackList($isInBlackList)
    {
        $this->container['isInBlackList'] = $isInBlackList;

        return $this;
    }

    /**
     * Gets hasMx
     *
     * @return bool
     */
    public function getHasMx()
    {
        return $this->container['hasMx'];
    }

    /**
     * Sets hasMx
     *
     * @param bool $hasMx hasMx
     *
     * @return $this
     */
    public function setHasMx($hasMx)
    {
        $this->container['hasMx'] = $hasMx;

        return $this;
    }

    /**
     * Gets hasAa
     *
     * @return bool
     */
    public function getHasAa()
    {
        return $this->container['hasAa'];
    }

    /**
     * Sets hasAa
     *
     * @param bool $hasAa hasAa
     *
     * @return $this
     */
    public function setHasAa($hasAa)
    {
        $this->container['hasAa'] = $hasAa;

        return $this;
    }

    /**
     * Gets hasAaaa
     *
     * @return bool
     */
    public function getHasAaaa()
    {
        return $this->container['hasAaaa'];
    }

    /**
     * Sets hasAaaa
     *
     * @param bool $hasAaaa hasAaaa
     *
     * @return $this
     */
    public function setHasAaaa($hasAaaa)
    {
        $this->container['hasAaaa'] = $hasAaaa;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return string
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param string $risk risk
     *
     * @return $this
     */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets preference
     *
     * @return int
     */
    public function getPreference()
    {
        return $this->container['preference'];
    }

    /**
     * Sets preference
     *
     * @param int $preference preference
     *
     * @return $this
     */
    public function setPreference($preference)
    {
        $this->container['preference'] = $preference;

        return $this;
    }

    /**
     * Gets suggestion
     *
     * @return string
     */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
     * Sets suggestion
     *
     * @param string $suggestion suggestion
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;

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


