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
 * TextMagic API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
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
        'sender' => 'string',
        'receiver' => 'string',
        'text' => 'string',
        'status' => 'string',
        'contactId' => 'int',
        'sessionId' => 'int',
        'messageTime' => '\DateTime',
        'avatar' => 'string',
        'deleted' => 'bool',
        'charset' => 'string',
        'charsetLabel' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'country' => 'string',
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
        'sender' => null,
        'receiver' => null,
        'text' => null,
        'status' => null,
        'contactId' => null,
        'sessionId' => null,
        'messageTime' => 'date-time',
        'avatar' => null,
        'deleted' => null,
        'charset' => null,
        'charsetLabel' => null,
        'firstName' => null,
        'lastName' => null,
        'country' => null,
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
        'sender' => 'sender',
        'receiver' => 'receiver',
        'text' => 'text',
        'status' => 'status',
        'contactId' => 'contactId',
        'sessionId' => 'sessionId',
        'messageTime' => 'messageTime',
        'avatar' => 'avatar',
        'deleted' => 'deleted',
        'charset' => 'charset',
        'charsetLabel' => 'charsetLabel',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'country' => 'country',
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
        'sender' => 'setSender',
        'receiver' => 'setReceiver',
        'text' => 'setText',
        'status' => 'setStatus',
        'contactId' => 'setContactId',
        'sessionId' => 'setSessionId',
        'messageTime' => 'setMessageTime',
        'avatar' => 'setAvatar',
        'deleted' => 'setDeleted',
        'charset' => 'setCharset',
        'charsetLabel' => 'setCharsetLabel',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'country' => 'setCountry',
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
        'sender' => 'getSender',
        'receiver' => 'getReceiver',
        'text' => 'getText',
        'status' => 'getStatus',
        'contactId' => 'getContactId',
        'sessionId' => 'getSessionId',
        'messageTime' => 'getMessageTime',
        'avatar' => 'getAvatar',
        'deleted' => 'getDeleted',
        'charset' => 'getCharset',
        'charsetLabel' => 'getCharsetLabel',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'country' => 'getCountry',
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
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['messageTime'] = isset($data['messageTime']) ? $data['messageTime'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['charsetLabel'] = isset($data['charsetLabel']) ? $data['charsetLabel'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
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
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
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

        if ($this->container['contactId'] === null) {
            $invalidProperties[] = "'contactId' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['messageTime'] === null) {
            $invalidProperties[] = "'messageTime' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
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
     * @param int $id Message ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $sender Message sender (phone number or alphanumeric Sender ID).
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

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
     * @param string $receiver Recipient phone number.
     *
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

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
     * @param string $status Delivery status of the message. TODO: Please see the table below to see different delivery statuses.
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
     * @param \DateTime $messageTime Sending time.
     *
     * @return $this
     */
    public function setMessageTime($messageTime)
    {
        $this->container['messageTime'] = $messageTime;

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
     * @param string $charset Message charset. Could be: *   **ISO-8859-1** for plaintext SMS *   **UTF-16BE** for Unicode SMS
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
     * @param string $firstName Contact first name. Could be substituted from your [Contacts](http://docs.textmagictesting.com/#tag/Contacts) (even if you submitted phone number instead of contact ID).
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
     * @param string $lastName Contact last name.
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
     * @param string $country Two-letter ISO country code of the recipient phone number.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * @param int $partsCount Message parts (multiples of 160 characters) count.
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


