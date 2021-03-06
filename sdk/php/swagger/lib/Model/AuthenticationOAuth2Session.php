<?php
/**
 * AuthenticationOAuth2Session
 *
 * PHP version 5
 *
 * @category Class
 * @package  keto\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Package main ORY Keto
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace keto\SDK\Model;

use \ArrayAccess;

/**
 * AuthenticationOAuth2Session Class Doc Comment
 *
 * @category    Class
 * @package     keto\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationOAuth2Session implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'authenticationOAuth2Session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed' => 'bool',
        'aud' => 'string[]',
        'client_id' => 'string',
        'exp' => '\DateTime',
        'iat' => '\DateTime',
        'iss' => 'string',
        'nbf' => '\DateTime',
        'scope' => 'string',
        'session' => 'map[string,object]',
        'sub' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed' => null,
        'aud' => null,
        'client_id' => null,
        'exp' => 'date-time',
        'iat' => 'date-time',
        'iss' => null,
        'nbf' => 'date-time',
        'scope' => null,
        'session' => null,
        'sub' => null,
        'username' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed' => 'allowed',
        'aud' => 'aud',
        'client_id' => 'client_id',
        'exp' => 'exp',
        'iat' => 'iat',
        'iss' => 'iss',
        'nbf' => 'nbf',
        'scope' => 'scope',
        'session' => 'session',
        'sub' => 'sub',
        'username' => 'username'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allowed' => 'setAllowed',
        'aud' => 'setAud',
        'client_id' => 'setClientId',
        'exp' => 'setExp',
        'iat' => 'setIat',
        'iss' => 'setIss',
        'nbf' => 'setNbf',
        'scope' => 'setScope',
        'session' => 'setSession',
        'sub' => 'setSub',
        'username' => 'setUsername'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allowed' => 'getAllowed',
        'aud' => 'getAud',
        'client_id' => 'getClientId',
        'exp' => 'getExp',
        'iat' => 'getIat',
        'iss' => 'getIss',
        'nbf' => 'getNbf',
        'scope' => 'getScope',
        'session' => 'getSession',
        'sub' => 'getSub',
        'username' => 'getUsername'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allowed'] = isset($data['allowed']) ? $data['allowed'] : null;
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['iat'] = isset($data['iat']) ? $data['iat'] : null;
        $this->container['iss'] = isset($data['iss']) ? $data['iss'] : null;
        $this->container['nbf'] = isset($data['nbf']) ? $data['nbf'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets allowed
     * @return bool
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     * @param bool $allowed Allowed is true if the request is allowed and false otherwise.
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets aud
     * @return string[]
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     * @param string[] $aud
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id ClientID is the id of the OAuth2 client that requested the token.
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets exp
     * @return \DateTime
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     * @param \DateTime $exp ExpiresAt is the expiry timestamp.
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets iat
     * @return \DateTime
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     * @param \DateTime $iat IssuedAt is the token creation time stamp.
     * @return $this
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets iss
     * @return string
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     * @param string $iss Issuer is the id of the issuer, typically an hydra instance.
     * @return $this
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets nbf
     * @return \DateTime
     */
    public function getNbf()
    {
        return $this->container['nbf'];
    }

    /**
     * Sets nbf
     * @param \DateTime $nbf
     * @return $this
     */
    public function setNbf($nbf)
    {
        $this->container['nbf'] = $nbf;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope GrantedScopes is a list of scopes that the subject authorized when asked for consent.
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets session
     * @return map[string,object]
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     * @param map[string,object] $session Session represents arbitrary session data.
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets sub
     * @return string
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     * @param string $sub Subject is the identity that authorized issuing the token, for example a user or an OAuth2 app. This is usually a uuid but you can choose a urn or some other id too.
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
            return json_encode(\keto\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\keto\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


