<?php
/**
 * MainCampaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vouchery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Vouchery API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0
 * Contact: hello@vouchery.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Vouchery\Model;

use \ArrayAccess;
use \Vouchery\ObjectSerializer;

/**
 * MainCampaign Class Doc Comment
 *
 * @category Class
 * @package  Vouchery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MainCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MainCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'status' => 'string',
        'name' => 'string',
        'template' => 'string',
        'description' => 'string',
        'max_total_budget' => 'float',
        'max_redemptions' => 'float',
        'team' => 'string',
        'budget_code' => 'string',
        'children' => '\Vouchery\Model\SubCampaign[]',
        'created_at' => '\DateTime',
        'created_by' => '\Vouchery\Model\CampaignCreatedBy',
        'updated_at' => '\DateTime',
        'updated_by' => '\Vouchery\Model\CampaignCreatedBy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'status' => null,
        'name' => null,
        'template' => null,
        'description' => null,
        'max_total_budget' => null,
        'max_redemptions' => null,
        'team' => null,
        'budget_code' => null,
        'children' => null,
        'created_at' => 'date-time',
        'created_by' => null,
        'updated_at' => 'date-time',
        'updated_by' => null
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
        'type' => 'type',
        'id' => 'id',
        'status' => 'status',
        'name' => 'name',
        'template' => 'template',
        'description' => 'description',
        'max_total_budget' => 'max_total_budget',
        'max_redemptions' => 'max_redemptions',
        'team' => 'team',
        'budget_code' => 'budget_code',
        'children' => 'children',
        'created_at' => 'created_at',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'updated_by' => 'updated_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'status' => 'setStatus',
        'name' => 'setName',
        'template' => 'setTemplate',
        'description' => 'setDescription',
        'max_total_budget' => 'setMaxTotalBudget',
        'max_redemptions' => 'setMaxRedemptions',
        'team' => 'setTeam',
        'budget_code' => 'setBudgetCode',
        'children' => 'setChildren',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'status' => 'getStatus',
        'name' => 'getName',
        'template' => 'getTemplate',
        'description' => 'getDescription',
        'max_total_budget' => 'getMaxTotalBudget',
        'max_redemptions' => 'getMaxRedemptions',
        'team' => 'getTeam',
        'budget_code' => 'getBudgetCode',
        'children' => 'getChildren',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy'
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

    const TYPE_MAIN_CAMPAIGN = 'MainCampaign';
    const STATUS_DRAFT = 'draft';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ARCHIVED = 'archived';
    const TEMPLATE_DISCOUNT = 'discount';
    const TEMPLATE_LOYALTY = 'loyalty';
    const TEMPLATE_GIFT_CARD = 'gift_card';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MAIN_CAMPAIGN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_ARCHIVED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateAllowableValues()
    {
        return [
            self::TEMPLATE_DISCOUNT,
            self::TEMPLATE_LOYALTY,
            self::TEMPLATE_GIFT_CARD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['max_total_budget'] = isset($data['max_total_budget']) ? $data['max_total_budget'] : null;
        $this->container['max_redemptions'] = isset($data['max_redemptions']) ? $data['max_redemptions'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['budget_code'] = isset($data['budget_code']) ? $data['budget_code'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getTemplateAllowableValues();
        if (!is_null($this->container['template']) && !in_array($this->container['template'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'template', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type This field is required only when you create a campaign. Main Campaign is a wrapper for multipe Sub Campaings, grouped together. Main Campaign can have own budget and redemptions limit.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string $name The name of the campaign must be unique.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string|null $template Valid template values for MainCampaign are: discount, loyalty, gift_card.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $allowedValues = $this->getTemplateAllowableValues();
        if (!is_null($template) && !in_array($template, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'template', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets max_total_budget
     *
     * @return float|null
     */
    public function getMaxTotalBudget()
    {
        return $this->container['max_total_budget'];
    }

    /**
     * Sets max_total_budget
     *
     * @param float|null $max_total_budget The budget available for all discount campaigns grouped by this campaign.
     *
     * @return $this
     */
    public function setMaxTotalBudget($max_total_budget)
    {
        $this->container['max_total_budget'] = $max_total_budget;

        return $this;
    }

    /**
     * Gets max_redemptions
     *
     * @return float|null
     */
    public function getMaxRedemptions()
    {
        return $this->container['max_redemptions'];
    }

    /**
     * Sets max_redemptions
     *
     * @param float|null $max_redemptions The maximum number of redemptions available across all discount campaigns grouped by this campaign.
     *
     * @return $this
     */
    public function setMaxRedemptions($max_redemptions)
    {
        $this->container['max_redemptions'] = $max_redemptions;

        return $this;
    }

    /**
     * Gets team
     *
     * @return string|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param string|null $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets budget_code
     *
     * @return string|null
     */
    public function getBudgetCode()
    {
        return $this->container['budget_code'];
    }

    /**
     * Sets budget_code
     *
     * @param string|null $budget_code budget_code
     *
     * @return $this
     */
    public function setBudgetCode($budget_code)
    {
        $this->container['budget_code'] = $budget_code;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Vouchery\Model\SubCampaign[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Vouchery\Model\SubCampaign[]|null $children List of child campaigns
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \Vouchery\Model\CampaignCreatedBy|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \Vouchery\Model\CampaignCreatedBy|null $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \Vouchery\Model\CampaignCreatedBy|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \Vouchery\Model\CampaignCreatedBy|null $updated_by updated_by
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


