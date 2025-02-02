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
 * @property \DTS\eBaySDK\Catalog\Types\CorrectionAspectValues $aspectValues
 * @property string $correctionCode
 * @property \DTS\eBaySDK\Catalog\Types\CorrectionProductAttribute $productAttribute
 * @property string $reason
 */
class Correction extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectValues' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\CorrectionAspectValues',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspectValues'
        ],
        'correctionCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'correctionCode'
        ],
        'productAttribute' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\CorrectionProductAttribute',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productAttribute'
        ],
        'reason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reason'
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
