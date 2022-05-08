<?php
/**
 * DeliveryProfileCreatePayload
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Cloudinary
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Media Delivery
 *
 * Media Delivery API
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\Model;

use \ArrayAccess;
use \Cloudinary\ObjectSerializer;

/**
 * DeliveryProfileCreatePayload Class Doc Comment
 *
 * @category Class
 * @package  Cloudinary
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryProfileCreatePayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryProfileCreatePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_name' => 'string',
        'domain_id' => 'string',
        'mapping_function_id' => 'string',
        'media_source_ids' => 'string[]',
        'path_prefix' => 'string',
        'default_transformation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_name' => null,
        'domain_id' => null,
        'mapping_function_id' => null,
        'media_source_ids' => null,
        'path_prefix' => null,
        'default_transformation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'display_name' => 'display_name',
        'domain_id' => 'domain_id',
        'mapping_function_id' => 'mapping_function_id',
        'media_source_ids' => 'media_source_ids',
        'path_prefix' => 'path_prefix',
        'default_transformation' => 'default_transformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'domain_id' => 'setDomainId',
        'mapping_function_id' => 'setMappingFunctionId',
        'media_source_ids' => 'setMediaSourceIds',
        'path_prefix' => 'setPathPrefix',
        'default_transformation' => 'setDefaultTransformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'domain_id' => 'getDomainId',
        'mapping_function_id' => 'getMappingFunctionId',
        'media_source_ids' => 'getMediaSourceIds',
        'path_prefix' => 'getPathPrefix',
        'default_transformation' => 'getDefaultTransformation'
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
        return self::$openAPIModelName;
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['domain_id'] = $data['domain_id'] ?? null;
        $this->container['mapping_function_id'] = $data['mapping_function_id'] ?? null;
        $this->container['media_source_ids'] = $data['media_source_ids'] ?? null;
        $this->container['path_prefix'] = $data['path_prefix'] ?? null;
        $this->container['default_transformation'] = $data['default_transformation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ($this->container['mapping_function_id'] === null) {
            $invalidProperties[] = "'mapping_function_id' can't be null";
        }
        if ($this->container['media_source_ids'] === null) {
            $invalidProperties[] = "'media_source_ids' can't be null";
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The display name of the delivery profile.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id The ID of the domain name.
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets mapping_function_id
     *
     * @return string
     */
    public function getMappingFunctionId()
    {
        return $this->container['mapping_function_id'];
    }

    /**
     * Sets mapping_function_id
     *
     * @param string $mapping_function_id The ID of the mapping function.
     *
     * @return self
     */
    public function setMappingFunctionId($mapping_function_id)
    {
        $this->container['mapping_function_id'] = $mapping_function_id;

        return $this;
    }

    /**
     * Gets media_source_ids
     *
     * @return string[]
     */
    public function getMediaSourceIds()
    {
        return $this->container['media_source_ids'];
    }

    /**
     * Sets media_source_ids
     *
     * @param string[] $media_source_ids An array of media source IDs.
     *
     * @return self
     */
    public function setMediaSourceIds($media_source_ids)
    {
        $this->container['media_source_ids'] = $media_source_ids;

        return $this;
    }

    /**
     * Gets path_prefix
     *
     * @return string|null
     */
    public function getPathPrefix()
    {
        return $this->container['path_prefix'];
    }

    /**
     * Sets path_prefix
     *
     * @param string|null $path_prefix Part of the base URL that identifies media belonging to the delivery profile.
     *
     * @return self
     */
    public function setPathPrefix($path_prefix)
    {
        $this->container['path_prefix'] = $path_prefix;

        return $this;
    }

    /**
     * Gets default_transformation
     *
     * @return string|null
     */
    public function getDefaultTransformation()
    {
        return $this->container['default_transformation'];
    }

    /**
     * Sets default_transformation
     *
     * @param string|null $default_transformation The name of the transformation to apply to all media in the profile.
     *
     * @return self
     */
    public function setDefaultTransformation($default_transformation)
    {
        $this->container['default_transformation'] = $default_transformation;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


