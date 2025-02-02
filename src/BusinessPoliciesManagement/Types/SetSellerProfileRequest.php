<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile $paymentProfile
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile $returnPolicyProfile
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile $shippingPolicyProfile
 */
class SetSellerProfileRequest extends \DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paymentProfile' => [
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentProfile'
        ],
        'returnPolicyProfile' => [
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyProfile'
        ],
        'shippingPolicyProfile' => [
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyProfile'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'setSellerProfileRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
