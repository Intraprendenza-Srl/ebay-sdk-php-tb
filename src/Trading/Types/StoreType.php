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
 * @property string $Name
 * @property string $URLPath
 * @property string $URL
 * @property \DTS\eBaySDK\Trading\Enums\StoreSubscriptionLevelCodeType $SubscriptionLevel
 * @property string $Description
 * @property \DTS\eBaySDK\Trading\Types\StoreLogoType $Logo
 * @property \DTS\eBaySDK\Trading\Types\StoreThemeType $Theme
 * @property \DTS\eBaySDK\Trading\Enums\StoreHeaderStyleCodeType $HeaderStyle
 * @property integer $HomePage
 * @property \DTS\eBaySDK\Trading\Enums\StoreItemListLayoutCodeType $ItemListLayout
 * @property \DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType $ItemListSortOrder
 * @property \DTS\eBaySDK\Trading\Enums\StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
 * @property string $CustomHeader
 * @property boolean $ExportListings
 * @property \DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType $CustomCategories
 * @property \DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType $CustomListingHeader
 * @property \DateTime $LastOpenedTime
 * @property boolean $TitleWithCompatibility
 */
class StoreType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'URLPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'URLPath'
        ],
        'URL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'URL'
        ],
        'SubscriptionLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SubscriptionLevel'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'Logo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreLogoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Logo'
        ],
        'Theme' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreThemeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Theme'
        ],
        'HeaderStyle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HeaderStyle'
        ],
        'HomePage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HomePage'
        ],
        'ItemListLayout' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemListLayout'
        ],
        'ItemListSortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemListSortOrder'
        ],
        'CustomHeaderLayout' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CustomHeaderLayout'
        ],
        'CustomHeader' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CustomHeader'
        ],
        'ExportListings' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExportListings'
        ],
        'CustomCategories' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CustomCategories'
        ],
        'CustomListingHeader' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CustomListingHeader'
        ],
        'LastOpenedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastOpenedTime'
        ],
        'TitleWithCompatibility' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TitleWithCompatibility'
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
