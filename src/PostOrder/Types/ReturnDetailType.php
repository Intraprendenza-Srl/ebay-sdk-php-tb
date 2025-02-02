<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnCloseInfoType $closeInfo
 * @property \DTS\eBaySDK\PostOrder\Types\DispositionRuleDetailType[] $dispositionRuleDetail
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnFileType[] $files
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnHoldInfoType $holdInfo
 * @property \DTS\eBaySDK\PostOrder\Types\ItemDetailType $itemDetail
 * @property \DTS\eBaySDK\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property \DTS\eBaySDK\PostOrder\Types\MoneyMovementDetailType[] $moneyMovementInfo
 * @property \DTS\eBaySDK\PostOrder\Types\RefundInfoType $refundInfo
 * @property \DTS\eBaySDK\PostOrder\Types\ShipmentType $replacementShipmentInfo
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnResponseHistoryType[] $responseHistory
 * @property \DTS\eBaySDK\PostOrder\Types\ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAddress' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnCloseInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DispositionRuleDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnFileType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'files'
        ],
        'holdInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnHoldInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ItemDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\MoneyMovementDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
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
