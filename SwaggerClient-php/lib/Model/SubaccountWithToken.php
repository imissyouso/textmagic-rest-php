<?php
/**
 * SubaccountWithToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TextMagic
 *
 * TextMagic REST API
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SubaccountWithToken Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubaccountWithToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubaccountWithToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'status' => 'string',
        'balance' => 'double',
        'phone' => 'string',
        'company' => 'string',
        'currency' => '\Swagger\Client\Model\Currency',
        'country' => '\Swagger\Client\Model\Country',
        'timezone' => '\Swagger\Client\Model\Timezone',
        'subaccount_type' => 'string',
        'email_accepted' => 'bool',
        'phone_accepted' => 'bool',
        'avatar' => '\Swagger\Client\Model\UserImage',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'username' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'status' => null,
        'balance' => 'double',
        'phone' => null,
        'company' => null,
        'currency' => null,
        'country' => null,
        'timezone' => null,
        'subaccount_type' => null,
        'email_accepted' => null,
        'phone_accepted' => null,
        'avatar' => null,
        'token' => null
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
        'username' => 'username',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'status' => 'status',
        'balance' => 'balance',
        'phone' => 'phone',
        'company' => 'company',
        'currency' => 'currency',
        'country' => 'country',
        'timezone' => 'timezone',
        'subaccount_type' => 'subaccountType',
        'email_accepted' => 'emailAccepted',
        'phone_accepted' => 'phoneAccepted',
        'avatar' => 'avatar',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'status' => 'setStatus',
        'balance' => 'setBalance',
        'phone' => 'setPhone',
        'company' => 'setCompany',
        'currency' => 'setCurrency',
        'country' => 'setCountry',
        'timezone' => 'setTimezone',
        'subaccount_type' => 'setSubaccountType',
        'email_accepted' => 'setEmailAccepted',
        'phone_accepted' => 'setPhoneAccepted',
        'avatar' => 'setAvatar',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'status' => 'getStatus',
        'balance' => 'getBalance',
        'phone' => 'getPhone',
        'company' => 'getCompany',
        'currency' => 'getCurrency',
        'country' => 'getCountry',
        'timezone' => 'getTimezone',
        'subaccount_type' => 'getSubaccountType',
        'email_accepted' => 'getEmailAccepted',
        'phone_accepted' => 'getPhoneAccepted',
        'avatar' => 'getAvatar',
        'token' => 'getToken'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['subaccount_type'] = isset($data['subaccount_type']) ? $data['subaccount_type'] : null;
        $this->container['email_accepted'] = isset($data['email_accepted']) ? $data['email_accepted'] : null;
        $this->container['phone_accepted'] = isset($data['phone_accepted']) ? $data['phone_accepted'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['subaccount_type'] === null) {
            $invalidProperties[] = "'subaccount_type' can't be null";
        }
        if ($this->container['email_accepted'] === null) {
            $invalidProperties[] = "'email_accepted' can't be null";
        }
        if ($this->container['phone_accepted'] === null) {
            $invalidProperties[] = "'phone_accepted' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Swagger\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Swagger\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \Swagger\Client\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \Swagger\Client\Model\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets subaccount_type
     *
     * @return string
     */
    public function getSubaccountType()
    {
        return $this->container['subaccount_type'];
    }

    /**
     * Sets subaccount_type
     *
     * @param string $subaccount_type subaccount_type
     *
     * @return $this
     */
    public function setSubaccountType($subaccount_type)
    {
        $this->container['subaccount_type'] = $subaccount_type;

        return $this;
    }

    /**
     * Gets email_accepted
     *
     * @return bool
     */
    public function getEmailAccepted()
    {
        return $this->container['email_accepted'];
    }

    /**
     * Sets email_accepted
     *
     * @param bool $email_accepted email_accepted
     *
     * @return $this
     */
    public function setEmailAccepted($email_accepted)
    {
        $this->container['email_accepted'] = $email_accepted;

        return $this;
    }

    /**
     * Gets phone_accepted
     *
     * @return bool
     */
    public function getPhoneAccepted()
    {
        return $this->container['phone_accepted'];
    }

    /**
     * Sets phone_accepted
     *
     * @param bool $phone_accepted phone_accepted
     *
     * @return $this
     */
    public function setPhoneAccepted($phone_accepted)
    {
        $this->container['phone_accepted'] = $phone_accepted;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return \Swagger\Client\Model\UserImage
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param \Swagger\Client\Model\UserImage $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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


