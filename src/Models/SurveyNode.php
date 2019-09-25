<?php
/**
 * SurveyNode
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
 * SurveyNode Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SurveyNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SurveyNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'label' => 'string',
        'body' => 'string',
        'nodeType' => 'string',
        'isEndNode' => 'bool',
        'sendDelay' => 'int',
        'startNodes' => 'string[]',
        'endNodes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'label' => null,
        'body' => null,
        'nodeType' => null,
        'isEndNode' => null,
        'sendDelay' => null,
        'startNodes' => null,
        'endNodes' => null
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
        'label' => 'label',
        'body' => 'body',
        'nodeType' => 'nodeType',
        'isEndNode' => 'isEndNode',
        'sendDelay' => 'sendDelay',
        'startNodes' => 'startNodes',
        'endNodes' => 'endNodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'body' => 'setBody',
        'nodeType' => 'setNodeType',
        'isEndNode' => 'setIsEndNode',
        'sendDelay' => 'setSendDelay',
        'startNodes' => 'setStartNodes',
        'endNodes' => 'setEndNodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'body' => 'getBody',
        'nodeType' => 'getNodeType',
        'isEndNode' => 'getIsEndNode',
        'sendDelay' => 'getSendDelay',
        'startNodes' => 'getStartNodes',
        'endNodes' => 'getEndNodes'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['isEndNode'] = isset($data['isEndNode']) ? $data['isEndNode'] : null;
        $this->container['sendDelay'] = isset($data['sendDelay']) ? $data['sendDelay'] : null;
        $this->container['startNodes'] = isset($data['startNodes']) ? $data['startNodes'] : null;
        $this->container['endNodes'] = isset($data['endNodes']) ? $data['endNodes'] : null;
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
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
        if ($this->container['isEndNode'] === null) {
            $invalidProperties[] = "'isEndNode' can't be null";
        }
        if ($this->container['sendDelay'] === null) {
            $invalidProperties[] = "'sendDelay' can't be null";
        }
        if ($this->container['startNodes'] === null) {
            $invalidProperties[] = "'startNodes' can't be null";
        }
        if ($this->container['endNodes'] === null) {
            $invalidProperties[] = "'endNodes' can't be null";
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
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets nodeType
     *
     * @return string
     */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
     * Sets nodeType
     *
     * @param string $nodeType nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;

        return $this;
    }

    /**
     * Gets isEndNode
     *
     * @return bool
     */
    public function getIsEndNode()
    {
        return $this->container['isEndNode'];
    }

    /**
     * Sets isEndNode
     *
     * @param bool $isEndNode isEndNode
     *
     * @return $this
     */
    public function setIsEndNode($isEndNode)
    {
        $this->container['isEndNode'] = $isEndNode;

        return $this;
    }

    /**
     * Gets sendDelay
     *
     * @return int
     */
    public function getSendDelay()
    {
        return $this->container['sendDelay'];
    }

    /**
     * Sets sendDelay
     *
     * @param int $sendDelay sendDelay
     *
     * @return $this
     */
    public function setSendDelay($sendDelay)
    {
        $this->container['sendDelay'] = $sendDelay;

        return $this;
    }

    /**
     * Gets startNodes
     *
     * @return string[]
     */
    public function getStartNodes()
    {
        return $this->container['startNodes'];
    }

    /**
     * Sets startNodes
     *
     * @param string[] $startNodes startNodes
     *
     * @return $this
     */
    public function setStartNodes($startNodes)
    {
        $this->container['startNodes'] = $startNodes;

        return $this;
    }

    /**
     * Gets endNodes
     *
     * @return string[]
     */
    public function getEndNodes()
    {
        return $this->container['endNodes'];
    }

    /**
     * Sets endNodes
     *
     * @param string[] $endNodes endNodes
     *
     * @return $this
     */
    public function setEndNodes($endNodes)
    {
        $this->container['endNodes'] = $endNodes;

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


