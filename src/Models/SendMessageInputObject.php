<?php
/**
 * SendMessageInputObject
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
 * SendMessageInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendMessageInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SendMessageInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'templateId' => 'int',
        'sendingTime' => 'int',
        'sendingDateTime' => 'string',
        'sendingTimezone' => 'string',
        'contacts' => 'string',
        'lists' => 'string',
        'phones' => 'string',
        'cutExtra' => 'bool',
        'partsCount' => 'int',
        'referenceId' => 'int',
        'from' => 'string',
        'rule' => 'string',
        'createChat' => 'bool',
        'tts' => 'bool',
        'local' => 'bool',
        'localCountry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'templateId' => null,
        'sendingTime' => null,
        'sendingDateTime' => null,
        'sendingTimezone' => null,
        'contacts' => null,
        'lists' => null,
        'phones' => null,
        'cutExtra' => null,
        'partsCount' => null,
        'referenceId' => null,
        'from' => null,
        'rule' => null,
        'createChat' => null,
        'tts' => null,
        'local' => null,
        'localCountry' => null
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
        'text' => 'text',
        'templateId' => 'templateId',
        'sendingTime' => 'sendingTime',
        'sendingDateTime' => 'sendingDateTime',
        'sendingTimezone' => 'sendingTimezone',
        'contacts' => 'contacts',
        'lists' => 'lists',
        'phones' => 'phones',
        'cutExtra' => 'cutExtra',
        'partsCount' => 'partsCount',
        'referenceId' => 'referenceId',
        'from' => 'from',
        'rule' => 'rule',
        'createChat' => 'createChat',
        'tts' => 'tts',
        'local' => 'local',
        'localCountry' => 'localCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'templateId' => 'setTemplateId',
        'sendingTime' => 'setSendingTime',
        'sendingDateTime' => 'setSendingDateTime',
        'sendingTimezone' => 'setSendingTimezone',
        'contacts' => 'setContacts',
        'lists' => 'setLists',
        'phones' => 'setPhones',
        'cutExtra' => 'setCutExtra',
        'partsCount' => 'setPartsCount',
        'referenceId' => 'setReferenceId',
        'from' => 'setFrom',
        'rule' => 'setRule',
        'createChat' => 'setCreateChat',
        'tts' => 'setTts',
        'local' => 'setLocal',
        'localCountry' => 'setLocalCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'templateId' => 'getTemplateId',
        'sendingTime' => 'getSendingTime',
        'sendingDateTime' => 'getSendingDateTime',
        'sendingTimezone' => 'getSendingTimezone',
        'contacts' => 'getContacts',
        'lists' => 'getLists',
        'phones' => 'getPhones',
        'cutExtra' => 'getCutExtra',
        'partsCount' => 'getPartsCount',
        'referenceId' => 'getReferenceId',
        'from' => 'getFrom',
        'rule' => 'getRule',
        'createChat' => 'getCreateChat',
        'tts' => 'getTts',
        'local' => 'getLocal',
        'localCountry' => 'getLocalCountry'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['sendingTime'] = isset($data['sendingTime']) ? $data['sendingTime'] : null;
        $this->container['sendingDateTime'] = isset($data['sendingDateTime']) ? $data['sendingDateTime'] : null;
        $this->container['sendingTimezone'] = isset($data['sendingTimezone']) ? $data['sendingTimezone'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['lists'] = isset($data['lists']) ? $data['lists'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['cutExtra'] = isset($data['cutExtra']) ? $data['cutExtra'] : null;
        $this->container['partsCount'] = isset($data['partsCount']) ? $data['partsCount'] : null;
        $this->container['referenceId'] = isset($data['referenceId']) ? $data['referenceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['createChat'] = isset($data['createChat']) ? $data['createChat'] : null;
        $this->container['tts'] = isset($data['tts']) ? $data['tts'] : null;
        $this->container['local'] = isset($data['local']) ? $data['local'] : null;
        $this->container['localCountry'] = isset($data['localCountry']) ? $data['localCountry'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Message text. Required if template_id is not set
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int $templateId Template used instead of message text. Required if text is not set
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets sendingTime
     *
     * @return int
     */
    public function getSendingTime()
    {
        return $this->container['sendingTime'];
    }

    /**
     * Sets sendingTime
     *
     * @param int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now
     *
     * @return $this
     */
    public function setSendingTime($sendingTime)
    {
        $this->container['sendingTime'] = $sendingTime;

        return $this;
    }

    /**
     * Gets sendingDateTime
     *
     * @return string
     */
    public function getSendingDateTime()
    {
        return $this->container['sendingDateTime'];
    }

    /**
     * Sets sendingDateTime
     *
     * @param string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to sendingTimezone
     *
     * @return $this
     */
    public function setSendingDateTime($sendingDateTime)
    {
        $this->container['sendingDateTime'] = $sendingDateTime;

        return $this;
    }

    /**
     * Gets sendingTimezone
     *
     * @return string
     */
    public function getSendingTimezone()
    {
        return $this->container['sendingTimezone'];
    }

    /**
     * Sets sendingTimezone
     *
     * @param string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone
     *
     * @return $this
     */
    public function setSendingTimezone($sendingTimezone)
    {
        $this->container['sendingTimezone'] = $sendingTimezone;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param string $contacts Comma separated array of contact resources id message will be sent to
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets lists
     *
     * @return string
     */
    public function getLists()
    {
        return $this->container['lists'];
    }

    /**
     * Sets lists
     *
     * @param string $lists Comma separated array of list resources id message will be sent to
     *
     * @return $this
     */
    public function setLists($lists)
    {
        $this->container['lists'] = $lists;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string $phones Comma separated array of E.164 phone numbers message will be sent to
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets cutExtra
     *
     * @return bool
     */
    public function getCutExtra()
    {
        return $this->container['cutExtra'];
    }

    /**
     * Sets cutExtra
     *
     * @param bool $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. Default is false
     *
     * @return $this
     */
    public function setCutExtra($cutExtra)
    {
        $this->container['cutExtra'] = $cutExtra;

        return $this;
    }

    /**
     * Gets partsCount
     *
     * @return int
     */
    public function getPartsCount()
    {
        return $this->container['partsCount'];
    }

    /**
     * Sets partsCount
     *
     * @param int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts). Default is 6
     *
     * @return $this
     */
    public function setPartsCount($partsCount)
    {
        $this->container['partsCount'] = $partsCount;

        return $this;
    }

    /**
     * Gets referenceId
     *
     * @return int
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param int $referenceId Custom message reference id which can be used in your application infrastructure
     *
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->container['referenceId'] = $referenceId;

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
     * @param string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param string $rule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details
     *
     * @return $this
     */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;

        return $this;
    }

    /**
     * Gets createChat
     *
     * @return bool
     */
    public function getCreateChat()
    {
        return $this->container['createChat'];
    }

    /**
     * Sets createChat
     *
     * @param bool $createChat Should sending method try to create new Chat(if not exist) with specified recipients. Default is false
     *
     * @return $this
     */
    public function setCreateChat($createChat)
    {
        $this->container['createChat'] = $createChat;

        return $this;
    }

    /**
     * Gets tts
     *
     * @return bool
     */
    public function getTts()
    {
        return $this->container['tts'];
    }

    /**
     * Sets tts
     *
     * @param bool $tts Send Text to Speech message. Default is false
     *
     * @return $this
     */
    public function setTts($tts)
    {
        $this->container['tts'] = $tts;

        return $this;
    }

    /**
     * Gets local
     *
     * @return bool
     */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
     * Sets local
     *
     * @param bool $local Treat phone numbers passed in \\'phones\\' field as local. Default is false
     *
     * @return $this
     */
    public function setLocal($local)
    {
        $this->container['local'] = $local;

        return $this;
    }

    /**
     * Gets localCountry
     *
     * @return string
     */
    public function getLocalCountry()
    {
        return $this->container['localCountry'];
    }

    /**
     * Sets localCountry
     *
     * @param string $localCountry 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is account country
     *
     * @return $this
     */
    public function setLocalCountry($localCountry)
    {
        $this->container['localCountry'] = $localCountry;

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


