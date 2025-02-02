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
 * @property string $SearchKeywords
 * @property integer $StoreCategoryID
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property \DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType $SearchSortOrder
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MinPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MaxPrice
 * @property string[] $FavoriteItemID
 */
class SellerFavoriteItemPreferencesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchKeywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchKeywords'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'SearchSortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchSortOrder'
        ],
        'MinPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinPrice'
        ],
        'MaxPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxPrice'
        ],
        'FavoriteItemID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'FavoriteItemID'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
