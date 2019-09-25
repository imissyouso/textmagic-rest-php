<?php
/**
 * DoAuthInputObject
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
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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
 * DoAuthInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DoAuthInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DoAuthInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
        'password' => 'string',
        'appName' => 'string',
        'appVersion' => 'string',
        'deviceId' => 'string',
        'pushServiceType' => 'string',
        'tfaCode' => 'string',
        'tfaId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
        'password' => null,
        'appName' => null,
        'appVersion' => null,
        'deviceId' => null,
        'pushServiceType' => null,
        'tfaCode' => null,
        'tfaId' => null
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
        'username' => 'username',
        'password' => 'password',
        'appName' => 'appName',
        'appVersion' => 'appVersion',
        'deviceId' => 'deviceId',
        'pushServiceType' => 'pushServiceType',
        'tfaCode' => 'tfaCode',
        'tfaId' => 'tfaId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'password' => 'setPassword',
        'appName' => 'setAppName',
        'appVersion' => 'setAppVersion',
        'deviceId' => 'setDeviceId',
        'pushServiceType' => 'setPushServiceType',
        'tfaCode' => 'setTfaCode',
        'tfaId' => 'setTfaId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'password' => 'getPassword',
        'appName' => 'getAppName',
        'appVersion' => 'getAppVersion',
        'deviceId' => 'getDeviceId',
        'pushServiceType' => 'getPushServiceType',
        'tfaCode' => 'getTfaCode',
        'tfaId' => 'getTfaId'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['pushServiceType'] = isset($data['pushServiceType']) ? $data['pushServiceType'] : null;
        $this->container['tfaCode'] = isset($data['tfaCode']) ? $data['tfaCode'] : null;
        $this->container['tfaId'] = isset($data['tfaId']) ? $data['tfaId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
     * @param string $username Account username or email
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Account password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string $appName Application name
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string $appVersion Application version
     *
     * @return $this
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
     * Sets deviceId
     *
     * @param string $deviceId Device ID for push notification service
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;

        return $this;
    }

    /**
     * Gets pushServiceType
     *
     * @return string
     */
    public function getPushServiceType()
    {
        return $this->container['pushServiceType'];
    }

    /**
     * Sets pushServiceType
     *
     * @param string $pushServiceType required when deviceId provided. Push notification service type: a for Apple Push Notifications, g for Google Cloud Messaging
     *
     * @return $this
     */
    public function setPushServiceType($pushServiceType)
    {
        $this->container['pushServiceType'] = $pushServiceType;

        return $this;
    }

    /**
     * Gets tfaCode
     *
     * @return string
     */
    public function getTfaCode()
    {
        return $this->container['tfaCode'];
    }

    /**
     * Sets tfaCode
     *
     * @param string $tfaCode required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer)
     *
     * @return $this
     */
    public function setTfaCode($tfaCode)
    {
        $this->container['tfaCode'] = $tfaCode;

        return $this;
    }

    /**
     * Gets tfaId
     *
     * @return string
     */
    public function getTfaId()
    {
        return $this->container['tfaId'];
    }

    /**
     * Sets tfaId
     *
     * @param string $tfaId required when 2FA enabled on account. 2FA challenge response (SMS code or security question answer)
     *
     * @return $this
     */
    public function setTfaId($tfaId)
    {
        $this->container['tfaId'] = $tfaId;

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


