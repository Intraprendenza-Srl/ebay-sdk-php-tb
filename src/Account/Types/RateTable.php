<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property \DTS\eBaySDK\Account\Enums\CountryCodeEnum $countryCode
 * @property \DTS\eBaySDK\Account\Enums\ShippingOptionTypeEnum $locality
 * @property string $name
 * @property string $rateTableId
 */
class RateTable extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'countryCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'countryCode'
        ],
        'locality' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'locality'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'rateTableId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'rateTableId'
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
