<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property boolean $extendedHolidayReturnsOffered
 * @property \DTS\eBaySDK\Browse\Enums\RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property \DTS\eBaySDK\Browse\Enums\ReturnMethodEnum $returnMethod
 * @property \DTS\eBaySDK\Browse\Types\TimeDuration $returnPeriod
 * @property boolean $returnsAccepted
 * @property \DTS\eBaySDK\Browse\Enums\ReturnShippingCostPayerEnum $returnShippingCostPayer
 */
class ItemReturnTerms extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'extendedHolidayReturnsOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extendedHolidayReturnsOffered'
        ],
        'refundMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundMethod'
        ],
        'restockingFeePercentage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'restockingFeePercentage'
        ],
        'returnInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnInstructions'
        ],
        'returnMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMethod'
        ],
        'returnPeriod' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPeriod'
        ],
        'returnsAccepted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnsAccepted'
        ],
        'returnShippingCostPayer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShippingCostPayer'
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
