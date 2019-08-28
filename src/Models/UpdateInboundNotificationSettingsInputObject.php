<?php
/**
 * UpdateInboundNotificationSettingsInputObject
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
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * UpdateInboundNotificationSettingsInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateInboundNotificationSettingsInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateInboundNotificationSettingsInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inboundMessageNotification' => 'bool',
        'includeSmsHistory' => 'bool',
        'sendInHtmlFormat' => 'bool',
        'alertEmail1' => 'string',
        'alertEmail2' => 'string',
        'alertEmail3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inboundMessageNotification' => null,
        'includeSmsHistory' => null,
        'sendInHtmlFormat' => null,
        'alertEmail1' => 'email',
        'alertEmail2' => 'email',
        'alertEmail3' => 'email'
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
        'inboundMessageNotification' => 'inboundMessageNotification',
        'includeSmsHistory' => 'includeSmsHistory',
        'sendInHtmlFormat' => 'sendInHtmlFormat',
        'alertEmail1' => 'alertEmail1',
        'alertEmail2' => 'alertEmail2',
        'alertEmail3' => 'alertEmail3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inboundMessageNotification' => 'setInboundMessageNotification',
        'includeSmsHistory' => 'setIncludeSmsHistory',
        'sendInHtmlFormat' => 'setSendInHtmlFormat',
        'alertEmail1' => 'setAlertEmail1',
        'alertEmail2' => 'setAlertEmail2',
        'alertEmail3' => 'setAlertEmail3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inboundMessageNotification' => 'getInboundMessageNotification',
        'includeSmsHistory' => 'getIncludeSmsHistory',
        'sendInHtmlFormat' => 'getSendInHtmlFormat',
        'alertEmail1' => 'getAlertEmail1',
        'alertEmail2' => 'getAlertEmail2',
        'alertEmail3' => 'getAlertEmail3'
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
        $this->container['inboundMessageNotification'] = isset($data['inboundMessageNotification']) ? $data['inboundMessageNotification'] : null;
        $this->container['includeSmsHistory'] = isset($data['includeSmsHistory']) ? $data['includeSmsHistory'] : null;
        $this->container['sendInHtmlFormat'] = isset($data['sendInHtmlFormat']) ? $data['sendInHtmlFormat'] : null;
        $this->container['alertEmail1'] = isset($data['alertEmail1']) ? $data['alertEmail1'] : null;
        $this->container['alertEmail2'] = isset($data['alertEmail2']) ? $data['alertEmail2'] : null;
        $this->container['alertEmail3'] = isset($data['alertEmail3']) ? $data['alertEmail3'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inboundMessageNotification'] === null) {
            $invalidProperties[] = "'inboundMessageNotification' can't be null";
        }
        if ($this->container['includeSmsHistory'] === null) {
            $invalidProperties[] = "'includeSmsHistory' can't be null";
        }
        if ($this->container['sendInHtmlFormat'] === null) {
            $invalidProperties[] = "'sendInHtmlFormat' can't be null";
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
     * Gets inboundMessageNotification
     *
     * @return bool
     */
    public function getInboundMessageNotification()
    {
        return $this->container['inboundMessageNotification'];
    }

    /**
     * Sets inboundMessageNotification
     *
     * @param bool $inboundMessageNotification Should user receive notification about new incoming messages
     *
     * @return $this
     */
    public function setInboundMessageNotification($inboundMessageNotification)
    {
        $this->container['inboundMessageNotification'] = $inboundMessageNotification;

        return $this;
    }

    /**
     * Gets includeSmsHistory
     *
     * @return bool
     */
    public function getIncludeSmsHistory()
    {
        return $this->container['includeSmsHistory'];
    }

    /**
     * Sets includeSmsHistory
     *
     * @param bool $includeSmsHistory Include SMS history into notification Email
     *
     * @return $this
     */
    public function setIncludeSmsHistory($includeSmsHistory)
    {
        $this->container['includeSmsHistory'] = $includeSmsHistory;

        return $this;
    }

    /**
     * Gets sendInHtmlFormat
     *
     * @return bool
     */
    public function getSendInHtmlFormat()
    {
        return $this->container['sendInHtmlFormat'];
    }

    /**
     * Sets sendInHtmlFormat
     *
     * @param bool $sendInHtmlFormat Send Email notification in HTML format
     *
     * @return $this
     */
    public function setSendInHtmlFormat($sendInHtmlFormat)
    {
        $this->container['sendInHtmlFormat'] = $sendInHtmlFormat;

        return $this;
    }

    /**
     * Gets alertEmail1
     *
     * @return string
     */
    public function getAlertEmail1()
    {
        return $this->container['alertEmail1'];
    }

    /**
     * Sets alertEmail1
     *
     * @param string $alertEmail1 New message notification email 2
     *
     * @return $this
     */
    public function setAlertEmail1($alertEmail1)
    {
        $this->container['alertEmail1'] = $alertEmail1;

        return $this;
    }

    /**
     * Gets alertEmail2
     *
     * @return string
     */
    public function getAlertEmail2()
    {
        return $this->container['alertEmail2'];
    }

    /**
     * Sets alertEmail2
     *
     * @param string $alertEmail2 New message notification email 2
     *
     * @return $this
     */
    public function setAlertEmail2($alertEmail2)
    {
        $this->container['alertEmail2'] = $alertEmail2;

        return $this;
    }

    /**
     * Gets alertEmail3
     *
     * @return string
     */
    public function getAlertEmail3()
    {
        return $this->container['alertEmail3'];
    }

    /**
     * Sets alertEmail3
     *
     * @param string $alertEmail3 New message notification email 3
     *
     * @return $this
     */
    public function setAlertEmail3($alertEmail3)
    {
        $this->container['alertEmail3'] = $alertEmail3;

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


