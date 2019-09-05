<?php
/**
 * MessageOut
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
 * MessageOut Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'contactId' => 'int',
        'sessionId' => 'int',
        'receiver' => 'string',
        'messageTime' => '\DateTime',
        'status' => 'string',
        'avatar' => 'string',
        'text' => 'string',
        'deleted' => 'bool',
        'charset' => 'string',
        'charsetLabel' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'country' => 'string',
        'sender' => 'string',
        'phone' => 'string',
        'price' => 'float',
        'partsCount' => 'int',
        'fromEmail' => 'string',
        'fromNumber' => 'string',
        'smscId' => 'string',
        'contact' => 'string',
        'source' => 'string',
        'deliveredCount' => 'int',
        'numbersCount' => 'int',
        'userId' => 'int',
        'creditsPrice' => 'string',
        'chars' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'contactId' => null,
        'sessionId' => null,
        'receiver' => null,
        'messageTime' => 'date-time',
        'status' => null,
        'avatar' => null,
        'text' => null,
        'deleted' => null,
        'charset' => null,
        'charsetLabel' => null,
        'firstName' => null,
        'lastName' => null,
        'country' => null,
        'sender' => null,
        'phone' => null,
        'price' => 'float',
        'partsCount' => null,
        'fromEmail' => null,
        'fromNumber' => null,
        'smscId' => null,
        'contact' => null,
        'source' => null,
        'deliveredCount' => null,
        'numbersCount' => null,
        'userId' => null,
        'creditsPrice' => null,
        'chars' => null
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
        'contactId' => 'contactId',
        'sessionId' => 'sessionId',
        'receiver' => 'receiver',
        'messageTime' => 'messageTime',
        'status' => 'status',
        'avatar' => 'avatar',
        'text' => 'text',
        'deleted' => 'deleted',
        'charset' => 'charset',
        'charsetLabel' => 'charsetLabel',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'country' => 'country',
        'sender' => 'sender',
        'phone' => 'phone',
        'price' => 'price',
        'partsCount' => 'partsCount',
        'fromEmail' => 'fromEmail',
        'fromNumber' => 'fromNumber',
        'smscId' => 'smscId',
        'contact' => 'contact',
        'source' => 'source',
        'deliveredCount' => 'deliveredCount',
        'numbersCount' => 'numbersCount',
        'userId' => 'userId',
        'creditsPrice' => 'creditsPrice',
        'chars' => 'chars'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'contactId' => 'setContactId',
        'sessionId' => 'setSessionId',
        'receiver' => 'setReceiver',
        'messageTime' => 'setMessageTime',
        'status' => 'setStatus',
        'avatar' => 'setAvatar',
        'text' => 'setText',
        'deleted' => 'setDeleted',
        'charset' => 'setCharset',
        'charsetLabel' => 'setCharsetLabel',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'country' => 'setCountry',
        'sender' => 'setSender',
        'phone' => 'setPhone',
        'price' => 'setPrice',
        'partsCount' => 'setPartsCount',
        'fromEmail' => 'setFromEmail',
        'fromNumber' => 'setFromNumber',
        'smscId' => 'setSmscId',
        'contact' => 'setContact',
        'source' => 'setSource',
        'deliveredCount' => 'setDeliveredCount',
        'numbersCount' => 'setNumbersCount',
        'userId' => 'setUserId',
        'creditsPrice' => 'setCreditsPrice',
        'chars' => 'setChars'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'contactId' => 'getContactId',
        'sessionId' => 'getSessionId',
        'receiver' => 'getReceiver',
        'messageTime' => 'getMessageTime',
        'status' => 'getStatus',
        'avatar' => 'getAvatar',
        'text' => 'getText',
        'deleted' => 'getDeleted',
        'charset' => 'getCharset',
        'charsetLabel' => 'getCharsetLabel',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'country' => 'getCountry',
        'sender' => 'getSender',
        'phone' => 'getPhone',
        'price' => 'getPrice',
        'partsCount' => 'getPartsCount',
        'fromEmail' => 'getFromEmail',
        'fromNumber' => 'getFromNumber',
        'smscId' => 'getSmscId',
        'contact' => 'getContact',
        'source' => 'getSource',
        'deliveredCount' => 'getDeliveredCount',
        'numbersCount' => 'getNumbersCount',
        'userId' => 'getUserId',
        'creditsPrice' => 'getCreditsPrice',
        'chars' => 'getChars'
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

    const STATUS_Q = 'q';
    const STATUS_S = 's';
    const STATUS_E = 'e';
    const STATUS_R = 'r';
    const STATUS_A = 'a';
    const STATUS_D = 'd';
    const STATUS_B = 'b';
    const STATUS_F = 'f';
    const STATUS_U = 'u';
    const STATUS_J = 'j';
    const STATUS_I = 'i';
    const STATUS_P = 'p';
    const STATUS_H = 'h';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_Q,
            self::STATUS_S,
            self::STATUS_E,
            self::STATUS_R,
            self::STATUS_A,
            self::STATUS_D,
            self::STATUS_B,
            self::STATUS_F,
            self::STATUS_U,
            self::STATUS_J,
            self::STATUS_I,
            self::STATUS_P,
            self::STATUS_H,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['messageTime'] = isset($data['messageTime']) ? $data['messageTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['charsetLabel'] = isset($data['charsetLabel']) ? $data['charsetLabel'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['partsCount'] = isset($data['partsCount']) ? $data['partsCount'] : null;
        $this->container['fromEmail'] = isset($data['fromEmail']) ? $data['fromEmail'] : null;
        $this->container['fromNumber'] = isset($data['fromNumber']) ? $data['fromNumber'] : null;
        $this->container['smscId'] = isset($data['smscId']) ? $data['smscId'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['deliveredCount'] = isset($data['deliveredCount']) ? $data['deliveredCount'] : null;
        $this->container['numbersCount'] = isset($data['numbersCount']) ? $data['numbersCount'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['creditsPrice'] = isset($data['creditsPrice']) ? $data['creditsPrice'] : null;
        $this->container['chars'] = isset($data['chars']) ? $data['chars'] : null;
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
        if ($this->container['contactId'] === null) {
            $invalidProperties[] = "'contactId' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['messageTime'] === null) {
            $invalidProperties[] = "'messageTime' can't be null";
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

        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['charset'] === null) {
            $invalidProperties[] = "'charset' can't be null";
        }
        if ($this->container['charsetLabel'] === null) {
            $invalidProperties[] = "'charsetLabel' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['partsCount'] === null) {
            $invalidProperties[] = "'partsCount' can't be null";
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
     * Gets contactId
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     *
     * @param int $contactId contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->container['contactId'] = $contactId;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return int
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param int $sessionId sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param string $receiver receiver
     *
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets messageTime
     *
     * @return \DateTime
     */
    public function getMessageTime()
    {
        return $this->container['messageTime'];
    }

    /**
     * Sets messageTime
     *
     * @param \DateTime $messageTime messageTime
     *
     * @return $this
     */
    public function setMessageTime($messageTime)
    {
        $this->container['messageTime'] = $messageTime;

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
     * @param string $status q - queued s - scheduled queue e - sending error r - enroute a - acked d - delivered b - buffered f - failed u - unknown j - rejected i - bulk insert p - scheduled suspend h - queue suspend
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
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string $charset charset
     *
     * @return $this
     */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets charsetLabel
     *
     * @return string
     */
    public function getCharsetLabel()
    {
        return $this->container['charsetLabel'];
    }

    /**
     * Sets charsetLabel
     *
     * @param string $charsetLabel charsetLabel
     *
     * @return $this
     */
    public function setCharsetLabel($charsetLabel)
    {
        $this->container['charsetLabel'] = $charsetLabel;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

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
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param int $partsCount partsCount
     *
     * @return $this
     */
    public function setPartsCount($partsCount)
    {
        $this->container['partsCount'] = $partsCount;

        return $this;
    }

    /**
     * Gets fromEmail
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['fromEmail'];
    }

    /**
     * Sets fromEmail
     *
     * @param string $fromEmail fromEmail
     *
     * @return $this
     */
    public function setFromEmail($fromEmail)
    {
        $this->container['fromEmail'] = $fromEmail;

        return $this;
    }

    /**
     * Gets fromNumber
     *
     * @return string
     */
    public function getFromNumber()
    {
        return $this->container['fromNumber'];
    }

    /**
     * Sets fromNumber
     *
     * @param string $fromNumber fromNumber
     *
     * @return $this
     */
    public function setFromNumber($fromNumber)
    {
        $this->container['fromNumber'] = $fromNumber;

        return $this;
    }

    /**
     * Gets smscId
     *
     * @return string
     */
    public function getSmscId()
    {
        return $this->container['smscId'];
    }

    /**
     * Sets smscId
     *
     * @param string $smscId smscId
     *
     * @return $this
     */
    public function setSmscId($smscId)
    {
        $this->container['smscId'] = $smscId;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets deliveredCount
     *
     * @return int
     */
    public function getDeliveredCount()
    {
        return $this->container['deliveredCount'];
    }

    /**
     * Sets deliveredCount
     *
     * @param int $deliveredCount deliveredCount
     *
     * @return $this
     */
    public function setDeliveredCount($deliveredCount)
    {
        $this->container['deliveredCount'] = $deliveredCount;

        return $this;
    }

    /**
     * Gets numbersCount
     *
     * @return int
     */
    public function getNumbersCount()
    {
        return $this->container['numbersCount'];
    }

    /**
     * Sets numbersCount
     *
     * @param int $numbersCount numbersCount
     *
     * @return $this
     */
    public function setNumbersCount($numbersCount)
    {
        $this->container['numbersCount'] = $numbersCount;

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
     * @param int $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets creditsPrice
     *
     * @return string
     */
    public function getCreditsPrice()
    {
        return $this->container['creditsPrice'];
    }

    /**
     * Sets creditsPrice
     *
     * @param string $creditsPrice creditsPrice
     *
     * @return $this
     */
    public function setCreditsPrice($creditsPrice)
    {
        $this->container['creditsPrice'] = $creditsPrice;

        return $this;
    }

    /**
     * Gets chars
     *
     * @return int
     */
    public function getChars()
    {
        return $this->container['chars'];
    }

    /**
     * Sets chars
     *
     * @param int $chars chars
     *
     * @return $this
     */
    public function setChars($chars)
    {
        $this->container['chars'] = $chars;

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


