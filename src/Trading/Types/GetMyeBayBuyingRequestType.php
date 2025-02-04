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
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $WatchList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $BidList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $BestOfferList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $WonList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $LostList
 * @property \DTS\eBaySDK\Trading\Types\MyeBaySelectionType $FavoriteSearches
 * @property \DTS\eBaySDK\Trading\Types\MyeBaySelectionType $FavoriteSellers
 * @property \DTS\eBaySDK\Trading\Types\MyeBaySelectionType $SecondChanceOffer
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromWonList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromLostList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $BuyingSummary
 * @property \DTS\eBaySDK\Trading\Types\MyeBaySelectionType $UserDefinedLists
 * @property boolean $HideVariations
 */
class GetMyeBayBuyingRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'WatchList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ],
        'BidList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ],
        'BestOfferList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ],
        'WonList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WonList'
        ],
        'LostList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ],
        'FavoriteSearches' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ],
        'FavoriteSellers' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ],
        'SecondChanceOffer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ],
        'DeletedFromWonList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ],
        'DeletedFromLostList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ],
        'BuyingSummary' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ],
        'UserDefinedLists' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDefinedLists'
        ],
        'HideVariations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HideVariations'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBayBuyingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
