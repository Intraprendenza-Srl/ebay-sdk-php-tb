<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Taxonomy\Types;

/**
 *
 * @property string $localizedValue
 * @property \DTS\eBaySDK\Taxonomy\Types\ValueConstraint[] $valueConstraints
 */
class AspectValue extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'localizedValue' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'localizedValue'
        ],
        'valueConstraints' => [
            'type' => 'DTS\eBaySDK\Taxonomy\Types\ValueConstraint',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'valueConstraints'
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
