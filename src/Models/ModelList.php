<?php
/**
 * ModelList
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
 * ModelList Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'List';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'favorited' => 'bool',
        'membersCount' => 'int',
        'user' => '\TextMagic\Models\User',
        'service' => 'bool',
        'shared' => 'bool',
        'avatar' => '\TextMagic\Models\ListImage',
        'isDefault' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'favorited' => null,
        'membersCount' => null,
        'user' => null,
        'service' => null,
        'shared' => null,
        'avatar' => null,
        'isDefault' => null
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
        'name' => 'name',
        'description' => 'description',
        'favorited' => 'favorited',
        'membersCount' => 'membersCount',
        'user' => 'user',
        'service' => 'service',
        'shared' => 'shared',
        'avatar' => 'avatar',
        'isDefault' => 'isDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'favorited' => 'setFavorited',
        'membersCount' => 'setMembersCount',
        'user' => 'setUser',
        'service' => 'setService',
        'shared' => 'setShared',
        'avatar' => 'setAvatar',
        'isDefault' => 'setIsDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'favorited' => 'getFavorited',
        'membersCount' => 'getMembersCount',
        'user' => 'getUser',
        'service' => 'getService',
        'shared' => 'getShared',
        'avatar' => 'getAvatar',
        'isDefault' => 'getIsDefault'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['favorited'] = isset($data['favorited']) ? $data['favorited'] : null;
        $this->container['membersCount'] = isset($data['membersCount']) ? $data['membersCount'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['favorited'] === null) {
            $invalidProperties[] = "'favorited' can't be null";
        }
        if ($this->container['membersCount'] === null) {
            $invalidProperties[] = "'membersCount' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalidProperties[] = "'shared' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['isDefault'] === null) {
            $invalidProperties[] = "'isDefault' can't be null";
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
     * @param int $id List ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name List name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description List description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param bool $favorited favorited
     *
     * @return $this
     */
    public function setFavorited($favorited)
    {
        $this->container['favorited'] = $favorited;

        return $this;
    }

    /**
     * Gets membersCount
     *
     * @return int
     */
    public function getMembersCount()
    {
        return $this->container['membersCount'];
    }

    /**
     * Sets membersCount
     *
     * @param int $membersCount List members count.
     *
     * @return $this
     */
    public function setMembersCount($membersCount)
    {
        $this->container['membersCount'] = $membersCount;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \TextMagic\Models\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \TextMagic\Models\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets service
     *
     * @return bool
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param bool $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return bool
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param bool $shared Is the list **shared** among all sub-accounts?
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return \TextMagic\Models\ListImage
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param \TextMagic\Models\ListImage $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool $isDefault isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

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


