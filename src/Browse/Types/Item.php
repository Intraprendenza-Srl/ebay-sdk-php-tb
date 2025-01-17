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
 * @property \DTS\eBaySDK\Browse\Types\Image[] $additionalImages
 * @property string $ageGroup
 * @property integer $bidCount
 * @property string $brand
 * @property string[] $buyingOptions
 * @property string $categoryId
 * @property string $categoryPath
 * @property string $color
 * @property string $condition
 * @property string $conditionId
 * @property \DTS\eBaySDK\Browse\Types\ConvertedAmount $currentBidPrice
 * @property string $description
 * @property string $energyEfficiencyClass
 * @property string $epid
 * @property \DTS\eBaySDK\Browse\Types\EstimatedAvailability[] $estimatedAvailabilities
 * @property string $gender
 * @property string $gtin
 * @property \DTS\eBaySDK\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemEndDate
 * @property string $itemId
 * @property string $legacyItemId
 * @property \DTS\eBaySDK\Browse\Types\Address $itemLocation
 * @property string $itemWebUrl
 * @property \DTS\eBaySDK\Browse\Types\TypedNameValue[] $localizedAspects
 * @property \DTS\eBaySDK\Browse\Types\MarketingPrice $marketingPrice
 * @property string $material
 * @property string $mpn
 * @property string $pattern
 * @property \DTS\eBaySDK\Browse\Types\ConvertedAmount $price
 * @property \DTS\eBaySDK\Browse\Enums\PriceDisplayConditionEnum $priceDisplayCondition
 * @property \DTS\eBaySDK\Browse\Types\ItemGroupSummary $primaryItemGroup
 * @property \DTS\eBaySDK\Browse\Types\ReviewRating $primaryProductReviewRating
 * @property string $productFicheWebUrl
 * @property integer $quantityLimitPerBuyer
 * @property \DTS\eBaySDK\Browse\Types\ItemReturnTerms $returnTerms
 * @property \DTS\eBaySDK\Browse\Types\Seller $seller
 * @property \DTS\eBaySDK\Browse\Types\ShippingOption[] $shippingOptions
 * @property \DTS\eBaySDK\Browse\Types\ShipToLocations $shipToLocations
 * @property string $shortDescription
 * @property string $size
 * @property string $sizeSystem
 * @property string $sizeType
 * @property string $subtitle
 * @property \DTS\eBaySDK\Browse\Types\Taxes[] $taxes
 * @property string $title
 * @property boolean $topRatedBuyingExperience
 * @property integer $uniqueBidderCount
 * @property \DTS\eBaySDK\Browse\Types\ErrorDetailV3[] $warnings
 */
class Item extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImages'
        ],
        'ageGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ageGroup'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'buyingOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptions'
        ],
	    'categoryId' => [
		    'type' => 'string',
		    'repeatable' => false,
		    'attribute' => false,
		    'elementName' => 'categoryId'
	    ],
        'categoryPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryPath'
        ],
        'color' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'color'
        ],
        'condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ],
        'conditionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'conditionId'
        ],
        'currentBidPrice' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'energyEfficiencyClass' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'energyEfficiencyClass'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'estimatedAvailabilities' => [
            'type' => 'DTS\eBaySDK\Browse\Types\EstimatedAvailability',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'estimatedAvailabilities'
        ],
        'gender' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gender'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'image' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemAffiliateWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemAffiliateWebUrl'
        ],
        'itemEndDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemEndDate'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
	    'legacyItemId' => [
		    'type' => 'string',
		    'repeatable' => false,
		    'attribute' => false,
		    'elementName' => 'legacyItemId'
	    ],
        'itemLocation' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ],
        'itemWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemWebUrl'
        ],
        'localizedAspects' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TypedNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'localizedAspects'
        ],
        'marketingPrice' => [
            'type' => 'DTS\eBaySDK\Browse\Types\MarketingPrice',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'material' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'material'
        ],
        'mpn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
        ],
        'pattern' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pattern'
        ],
        'price' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'priceDisplayCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDisplayCondition'
        ],
        'primaryItemGroup' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ItemGroupSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryItemGroup'
        ],
        'primaryProductReviewRating' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ReviewRating',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryProductReviewRating'
        ],
        'productFicheWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productFicheWebUrl'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'returnTerms' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ItemReturnTerms',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnTerms'
        ],
        'seller' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
	    'sellerItemRevision' => [
		    'type' => 'string',
		    'repeatable' => false,
		    'attribute' => false,
		    'elementName' => 'sellerItemRevision'
	    ],
        'shippingOptions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ShippingOption',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'shipToLocations' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ShipToLocations',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipToLocations'
        ],
        'shortDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shortDescription'
        ],
        'size' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'size'
        ],
        'sizeSystem' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeSystem'
        ],
        'sizeType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeType'
        ],
        'subtitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'subtitle'
        ],
        'taxes' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Taxes',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'taxes'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'topRatedBuyingExperience' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'topRatedBuyingExperience'
        ],
        'uniqueBidderCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uniqueBidderCount'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
