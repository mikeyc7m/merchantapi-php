<?php
/**
 * CreateChargeRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  zipMoneyPHP
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant API
 *
 * ZipMoney Merchant API Initial build
 *
 * OpenAPI spec version: 2017-03-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace zipMoneyPHP\Model;

use \ArrayAccess;

/**
 * CreateChargeRequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     zipMoneyPHP
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateChargeRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateChargeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'reference' => 'string',
        'authority' => '\zipMoneyPHP\Model\Authority',
        'capture' => 'bool',
        'order' => '\zipMoneyPHP\Model\Order',
        'metadata' => 'object'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'reference' => 'reference',
        'authority' => 'authority',
        'capture' => 'capture',
        'order' => 'order',
        'metadata' => 'metadata'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'reference' => 'setReference',
        'authority' => 'setAuthority',
        'capture' => 'setCapture',
        'order' => 'setOrder',
        'metadata' => 'setMetadata'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'reference' => 'getReference',
        'authority' => 'getAuthority',
        'capture' => 'getCapture',
        'order' => 'getOrder',
        'metadata' => 'getMetadata'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['capture'] = isset($data['capture']) ? $data['capture'] : true;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['reference'] === null) {
            $invalid_properties[] = "'reference' can't be null";
        }
        if ($this->container['authority'] === null) {
            $invalid_properties[] = "'authority' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['reference'] === null) {
            return false;
        }
        if ($this->container['authority'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference The reference for this charge (unique payment reference in your store)
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets authority
     * @return \zipMoneyPHP\Model\Authority
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     * @param \zipMoneyPHP\Model\Authority $authority
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets capture
     * @return bool
     */
    public function getCapture()
    {
        return $this->container['capture'];
    }

    /**
     * Sets capture
     * @param bool $capture If true this will be a direct capture, pass false to perform an authorisation only
     * @return $this
     */
    public function setCapture($capture)
    {
        $this->container['capture'] = $capture;

        return $this;
    }

    /**
     * Gets order
     * @return \zipMoneyPHP\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param \zipMoneyPHP\Model\Order $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets metadata
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param object $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\zipMoneyPHP\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\zipMoneyPHP\ObjectSerializer::sanitizeForSerialization($this));
    }
}


