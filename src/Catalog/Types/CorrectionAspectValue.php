<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Catalog\Types;

/**
 *
 * @property string $newValue
 * @property string $value
 */
class CorrectionAspectValue extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'newValue' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'newValue'
        ],
        'value' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
