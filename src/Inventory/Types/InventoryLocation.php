<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property string $locationAdditionalInformation
 * @property string $locationInstructions
 * @property string $locationWebUrl
 * @property string $name
 * @property \DTS\eBaySDK\Inventory\Types\OperatingHours[] $operatingHours
 * @property string $phone
 * @property \DTS\eBaySDK\Inventory\Types\SpecialHours[] $specialHours
 */
class InventoryLocation extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'locationAdditionalInformation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationAdditionalInformation'
        ],
        'locationInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationInstructions'
        ],
        'locationWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locationWebUrl'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'operatingHours' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\OperatingHours',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'operatingHours'
        ],
        'phone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'phone'
        ],
        'specialHours' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\SpecialHours',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'specialHours'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class($this)], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
