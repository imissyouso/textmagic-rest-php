<?php
/**
 * UpdateChatDesktopNotificationSettingsInputObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
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

namespace TextMagic\Models;

use \ArrayAccess;
use \TextMagic\ObjectSerializer;

/**
 * UpdateChatDesktopNotificationSettingsInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateChatDesktopNotificationSettingsInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateChatDesktopNotificationSettingsInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'playSound' => 'bool',
        'showNotifications' => 'bool',
        'showText' => 'bool',
        'soundId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'playSound' => null,
        'showNotifications' => null,
        'showText' => null,
        'soundId' => null
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
        'playSound' => 'playSound',
        'showNotifications' => 'showNotifications',
        'showText' => 'showText',
        'soundId' => 'soundId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'playSound' => 'setPlaySound',
        'showNotifications' => 'setShowNotifications',
        'showText' => 'setShowText',
        'soundId' => 'setSoundId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'playSound' => 'getPlaySound',
        'showNotifications' => 'getShowNotifications',
        'showText' => 'getShowText',
        'soundId' => 'getSoundId'
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
        $this->container['playSound'] = isset($data['playSound']) ? $data['playSound'] : null;
        $this->container['showNotifications'] = isset($data['showNotifications']) ? $data['showNotifications'] : null;
        $this->container['showText'] = isset($data['showText']) ? $data['showText'] : null;
        $this->container['soundId'] = isset($data['soundId']) ? $data['soundId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['playSound'] === null) {
            $invalidProperties[] = "'playSound' can't be null";
        }
        if ($this->container['showNotifications'] === null) {
            $invalidProperties[] = "'showNotifications' can't be null";
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
     * Gets playSound
     *
     * @return bool
     */
    public function getPlaySound()
    {
        return $this->container['playSound'];
    }

    /**
     * Sets playSound
     *
     * @param bool $playSound Notification sound is enable/disabled
     *
     * @return $this
     */
    public function setPlaySound($playSound)
    {
        $this->container['playSound'] = $playSound;

        return $this;
    }

    /**
     * Gets showNotifications
     *
     * @return bool
     */
    public function getShowNotifications()
    {
        return $this->container['showNotifications'];
    }

    /**
     * Sets showNotifications
     *
     * @param bool $showNotifications Show desktop notifications about new messages
     *
     * @return $this
     */
    public function setShowNotifications($showNotifications)
    {
        $this->container['showNotifications'] = $showNotifications;

        return $this;
    }

    /**
     * Gets showText
     *
     * @return bool
     */
    public function getShowText()
    {
        return $this->container['showText'];
    }

    /**
     * Sets showText
     *
     * @param bool $showText Incoming message text will be displayed in desktop notifications.
     *
     * @return $this
     */
    public function setShowText($showText)
    {
        $this->container['showText'] = $showText;

        return $this;
    }

    /**
     * Gets soundId
     *
     * @return int
     */
    public function getSoundId()
    {
        return $this->container['soundId'];
    }

    /**
     * Sets soundId
     *
     * @param int $soundId Sound Id of a notification
     *
     * @return $this
     */
    public function setSoundId($soundId)
    {
        $this->container['soundId'] = $soundId;

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


