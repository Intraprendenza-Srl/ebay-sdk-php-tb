<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \DTS\eBaySDK\Fulfillment\Types\Buyer $buyer
 * @property string $buyerCheckoutNotes
 * @property \DTS\eBaySDK\Fulfillment\Types\CancelStatus $cancelStatus
 * @property string $creationDate
 * @property string[] $fulfillmentHrefs
 * @property \DTS\eBaySDK\Fulfillment\Types\FulfillmentStartInstruction[] $fulfillmentStartInstructions
 * @property string $lastModifiedDate
 * @property \DTS\eBaySDK\Fulfillment\Types\LineItem[] $lineItems
 * @property \DTS\eBaySDK\Fulfillment\Enums\OrderFulfillmentStatus $orderFulfillmentStatus
 * @property string $orderId
 * @property \DTS\eBaySDK\Fulfillment\Enums\OrderPaymentStatusEnum $orderPaymentStatus
 * @property \DTS\eBaySDK\Fulfillment\Types\PaymentSummary $paymentSummary
 * @property \DTS\eBaySDK\Fulfillment\Types\PricingSummary $pricingSummary
 * @property string $sellerId
 */
class Order extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyer' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Buyer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyer'
        ],
        'buyerCheckoutNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerCheckoutNotes'
        ],
        'cancelStatus' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\CancelStatus',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStatus'
        ],
        'creationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'fulfillmentHrefs' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'fulfillmentHrefs'
        ],
        'fulfillmentStartInstructions' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\FulfillmentStartInstruction',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'fulfillmentStartInstructions'
        ],
        'lastModifiedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'lineItems' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\LineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'orderFulfillmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderFulfillmentStatus'
        ],
        'orderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ],
        'orderPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderPaymentStatus'
        ],
        'paymentSummary' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\PaymentSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentSummary'
        ],
        'pricingSummary' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'sellerId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerId'
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
