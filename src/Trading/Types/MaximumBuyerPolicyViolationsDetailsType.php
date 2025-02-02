<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations
 * @property \DTS\eBaySDK\Trading\Types\PolicyViolationDurationDetailsType[] $PolicyViolationDuration
 */
class MaximumBuyerPolicyViolationsDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'NumberOfPolicyViolations' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NumberOfPolicyViolationsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NumberOfPolicyViolations'
        ],
        'PolicyViolationDuration' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PolicyViolationDurationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PolicyViolationDuration'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
