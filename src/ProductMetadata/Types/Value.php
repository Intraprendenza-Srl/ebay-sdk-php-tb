<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ProductMetadata\Types;

/**
 *
 * @property \DTS\eBaySDK\ProductMetadata\Types\StringValue $text
 * @property \DTS\eBaySDK\ProductMetadata\Types\NumericValue $number
 * @property \DTS\eBaySDK\ProductMetadata\Types\URIValue $URL
 */
class Value extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'text' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\StringValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'text'
        ],
        'number' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\NumericValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'number'
        ],
        'URL' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\URIValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'URL'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
