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
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property \DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \DTS\eBaySDK\Trading\Types\SalesTaxType $SalesTax
 * @property \DTS\eBaySDK\Trading\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InsuranceFee
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property string $CheckoutInstructions
 * @property boolean $EmailCopyToSeller
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CODCost
 * @property string $SKU
 * @property string $OrderLineItemID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 */
class SendInvoiceRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'InternationalShippingServiceOptions' => [
            'type' => 'DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOptions'
        ],
        'ShippingServiceOptions' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ],
        'SalesTax' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'InsuranceFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'CheckoutInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutInstructions'
        ],
        'EmailCopyToSeller' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailCopyToSeller'
        ],
        'CODCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'AdjustmentAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SendInvoiceRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
