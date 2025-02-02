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
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $buyerResponseDueDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $cancelCloseDate
 * @property string $cancelCloseReason
 * @property string $cancelId
 * @property string $cancelReason
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $cancelRequestDate
 * @property string $legacyOrderId
 * @property \DTS\eBaySDK\PostOrder\Types\OrderCancelLineItem[] $lineItems
 * @property \DTS\eBaySDK\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $paymentStatus
 * @property string $requestorType
 * @property \DTS\eBaySDK\PostOrder\Types\Amount $requestRefundAmount
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $sellerResponseDueDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $shipmentDate
 * @property string $cancelState
 * @property string $cancelStatus
 */
class CancelSummary extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerResponseDueDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponseDueDate'
        ],
        'cancelCloseDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelCloseDate'
        ],
        'cancelCloseReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelCloseReason'
        ],
        'cancelId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelId'
        ],
        'cancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelReason'
        ],
        'cancelRequestDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelRequestDate'
        ],
        'legacyOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyOrderId'
        ],
        'lineItems' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\OrderCancelLineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'paymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentStatus'
        ],
        'requestorType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestorType'
        ],
        'requestRefundAmount' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestRefundAmount'
        ],
        'sellerResponseDueDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerResponseDueDate'
        ],
        'shipmentDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipmentDate'
        ],
        'cancelState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelState'
        ],
        'cancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStatus'
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
