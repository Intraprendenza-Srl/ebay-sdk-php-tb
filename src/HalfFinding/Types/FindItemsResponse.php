<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\HalfFinding\Types;

/**
 *
 * @property \DTS\eBaySDK\HalfFinding\Types\PaginationOutputType $paginationOutput
 * @property \DTS\eBaySDK\HalfFinding\Types\HalfCatalogProductType $product
 */
class FindItemsResponse extends \DTS\eBaySDK\HalfFinding\Types\BaseResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paginationOutput' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\PaginationOutputType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationOutput'
        ],
        'product' => [
            'type' => 'DTS\eBaySDK\HalfFinding\Types\HalfCatalogProductType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'product'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
