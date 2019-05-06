<?php
/**
 * RegistrationCheckResultViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Capayable API V2
 *
 * API for Pay after delivery and Pay in 3 installments
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
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
 * RegistrationCheckResultViewModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistrationCheckResultViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegistrationCheckResultViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_accepted' => 'bool',
        'last_name' => 'string',
        'initials' => 'string',
        'gender' => 'int',
        'street_name' => 'string',
        'house_number' => 'int',
        'house_number_suffix' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'phone_number' => 'string',
        'fax_number' => 'string',
        'email_address' => 'string',
        'is_corporation' => 'bool',
        'is_sole_proprietor' => 'bool',
        'corporation_name' => 'string',
        'co_c_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_accepted' => null,
        'last_name' => null,
        'initials' => null,
        'gender' => 'int32',
        'street_name' => null,
        'house_number' => 'int32',
        'house_number_suffix' => null,
        'zip_code' => null,
        'city' => null,
        'country_code' => null,
        'phone_number' => null,
        'fax_number' => null,
        'email_address' => null,
        'is_corporation' => null,
        'is_sole_proprietor' => null,
        'corporation_name' => null,
        'co_c_number' => null
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
        'is_accepted' => 'IsAccepted',
        'last_name' => 'LastName',
        'initials' => 'Initials',
        'gender' => 'Gender',
        'street_name' => 'StreetName',
        'house_number' => 'HouseNumber',
        'house_number_suffix' => 'HouseNumberSuffix',
        'zip_code' => 'ZipCode',
        'city' => 'City',
        'country_code' => 'CountryCode',
        'phone_number' => 'PhoneNumber',
        'fax_number' => 'FaxNumber',
        'email_address' => 'EmailAddress',
        'is_corporation' => 'IsCorporation',
        'is_sole_proprietor' => 'IsSoleProprietor',
        'corporation_name' => 'CorporationName',
        'co_c_number' => 'CoCNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_accepted' => 'setIsAccepted',
        'last_name' => 'setLastName',
        'initials' => 'setInitials',
        'gender' => 'setGender',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'house_number_suffix' => 'setHouseNumberSuffix',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'phone_number' => 'setPhoneNumber',
        'fax_number' => 'setFaxNumber',
        'email_address' => 'setEmailAddress',
        'is_corporation' => 'setIsCorporation',
        'is_sole_proprietor' => 'setIsSoleProprietor',
        'corporation_name' => 'setCorporationName',
        'co_c_number' => 'setCoCNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_accepted' => 'getIsAccepted',
        'last_name' => 'getLastName',
        'initials' => 'getInitials',
        'gender' => 'getGender',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'house_number_suffix' => 'getHouseNumberSuffix',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'phone_number' => 'getPhoneNumber',
        'fax_number' => 'getFaxNumber',
        'email_address' => 'getEmailAddress',
        'is_corporation' => 'getIsCorporation',
        'is_sole_proprietor' => 'getIsSoleProprietor',
        'corporation_name' => 'getCorporationName',
        'co_c_number' => 'getCoCNumber'
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

    const GENDER_0 = 0;
    const GENDER_1 = 1;
    const GENDER_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_0,
            self::GENDER_1,
            self::GENDER_2,
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
        $this->container['is_accepted'] = isset($data['is_accepted']) ? $data['is_accepted'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['house_number_suffix'] = isset($data['house_number_suffix']) ? $data['house_number_suffix'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['is_corporation'] = isset($data['is_corporation']) ? $data['is_corporation'] : null;
        $this->container['is_sole_proprietor'] = isset($data['is_sole_proprietor']) ? $data['is_sole_proprietor'] : null;
        $this->container['corporation_name'] = isset($data['corporation_name']) ? $data['corporation_name'] : null;
        $this->container['co_c_number'] = isset($data['co_c_number']) ? $data['co_c_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['last_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['initials'] === null) {
            $invalidProperties[] = "'initials' can't be null";
        }
        if ((mb_strlen($this->container['initials']) > 10)) {
            $invalidProperties[] = "invalid value for 'initials', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['initials']) < 0)) {
            $invalidProperties[] = "invalid value for 'initials', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['street_name'] === null) {
            $invalidProperties[] = "'street_name' can't be null";
        }
        if ($this->container['house_number'] === null) {
            $invalidProperties[] = "'house_number' can't be null";
        }
        if (!is_null($this->container['house_number_suffix']) && (mb_strlen($this->container['house_number_suffix']) > 10)) {
            $invalidProperties[] = "invalid value for 'house_number_suffix', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['house_number_suffix']) && (mb_strlen($this->container['house_number_suffix']) < 0)) {
            $invalidProperties[] = "invalid value for 'house_number_suffix', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
        }
        if ((mb_strlen($this->container['zip_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['zip_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 150)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ((mb_strlen($this->container['phone_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['phone_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fax_number']) && (mb_strlen($this->container['fax_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'fax_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['fax_number']) && (mb_strlen($this->container['fax_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'fax_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if ((mb_strlen($this->container['email_address']) > 150)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['email_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['is_corporation'] === null) {
            $invalidProperties[] = "'is_corporation' can't be null";
        }
        if (!is_null($this->container['corporation_name']) && (mb_strlen($this->container['corporation_name']) > 150)) {
            $invalidProperties[] = "invalid value for 'corporation_name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['corporation_name']) && (mb_strlen($this->container['corporation_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'corporation_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['co_c_number']) && (mb_strlen($this->container['co_c_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'co_c_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['co_c_number']) && (mb_strlen($this->container['co_c_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'co_c_number', the character length must be bigger than or equal to 0.";
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
     * Gets is_accepted
     *
     * @return bool
     */
    public function getIsAccepted()
    {
        return $this->container['is_accepted'];
    }

    /**
     * Sets is_accepted
     *
     * @param bool $is_accepted is_accepted
     *
     * @return $this
     */
    public function setIsAccepted($is_accepted)
    {
        $this->container['is_accepted'] = $is_accepted;

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
        if ((mb_strlen($last_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling RegistrationCheckResultViewModel., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($last_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        if ((mb_strlen($initials) > 10)) {
            throw new \InvalidArgumentException('invalid length for $initials when calling RegistrationCheckResultViewModel., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($initials) < 0)) {
            throw new \InvalidArgumentException('invalid length for $initials when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param int $gender 0 = Male, 1 = Female, 2 = Unknown
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name street_name
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int $house_number house_number
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_suffix
     *
     * @return string
     */
    public function getHouseNumberSuffix()
    {
        return $this->container['house_number_suffix'];
    }

    /**
     * Sets house_number_suffix
     *
     * @param string $house_number_suffix house_number_suffix
     *
     * @return $this
     */
    public function setHouseNumberSuffix($house_number_suffix)
    {
        if (!is_null($house_number_suffix) && (mb_strlen($house_number_suffix) > 10)) {
            throw new \InvalidArgumentException('invalid length for $house_number_suffix when calling RegistrationCheckResultViewModel., must be smaller than or equal to 10.');
        }
        if (!is_null($house_number_suffix) && (mb_strlen($house_number_suffix) < 0)) {
            throw new \InvalidArgumentException('invalid length for $house_number_suffix when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['house_number_suffix'] = $house_number_suffix;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        if ((mb_strlen($zip_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling RegistrationCheckResultViewModel., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($zip_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 150)) {
            throw new \InvalidArgumentException('invalid length for $city when calling RegistrationCheckResultViewModel., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling RegistrationCheckResultViewModel., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if ((mb_strlen($phone_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling RegistrationCheckResultViewModel., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($phone_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number fax_number
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        if (!is_null($fax_number) && (mb_strlen($fax_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $fax_number when calling RegistrationCheckResultViewModel., must be smaller than or equal to 20.');
        }
        if (!is_null($fax_number) && (mb_strlen($fax_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fax_number when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address email_address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if ((mb_strlen($email_address) > 150)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling RegistrationCheckResultViewModel., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($email_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets is_corporation
     *
     * @return bool
     */
    public function getIsCorporation()
    {
        return $this->container['is_corporation'];
    }

    /**
     * Sets is_corporation
     *
     * @param bool $is_corporation is_corporation
     *
     * @return $this
     */
    public function setIsCorporation($is_corporation)
    {
        $this->container['is_corporation'] = $is_corporation;

        return $this;
    }

    /**
     * Gets is_sole_proprietor
     *
     * @return bool
     */
    public function getIsSoleProprietor()
    {
        return $this->container['is_sole_proprietor'];
    }

    /**
     * Sets is_sole_proprietor
     *
     * @param bool $is_sole_proprietor is_sole_proprietor
     *
     * @return $this
     */
    public function setIsSoleProprietor($is_sole_proprietor)
    {
        $this->container['is_sole_proprietor'] = $is_sole_proprietor;

        return $this;
    }

    /**
     * Gets corporation_name
     *
     * @return string
     */
    public function getCorporationName()
    {
        return $this->container['corporation_name'];
    }

    /**
     * Sets corporation_name
     *
     * @param string $corporation_name corporation_name
     *
     * @return $this
     */
    public function setCorporationName($corporation_name)
    {
        if (!is_null($corporation_name) && (mb_strlen($corporation_name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $corporation_name when calling RegistrationCheckResultViewModel., must be smaller than or equal to 150.');
        }
        if (!is_null($corporation_name) && (mb_strlen($corporation_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $corporation_name when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['corporation_name'] = $corporation_name;

        return $this;
    }

    /**
     * Gets co_c_number
     *
     * @return string
     */
    public function getCoCNumber()
    {
        return $this->container['co_c_number'];
    }

    /**
     * Sets co_c_number
     *
     * @param string $co_c_number co_c_number
     *
     * @return $this
     */
    public function setCoCNumber($co_c_number)
    {
        if (!is_null($co_c_number) && (mb_strlen($co_c_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $co_c_number when calling RegistrationCheckResultViewModel., must be smaller than or equal to 20.');
        }
        if (!is_null($co_c_number) && (mb_strlen($co_c_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $co_c_number when calling RegistrationCheckResultViewModel., must be bigger than or equal to 0.');
        }

        $this->container['co_c_number'] = $co_c_number;

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

