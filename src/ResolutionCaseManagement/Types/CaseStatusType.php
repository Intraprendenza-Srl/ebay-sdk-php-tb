<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\INRCaseStatusType $INRStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\SNADCaseStatusType $SNADStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPINRCaseStatusType $EBPINRStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPSNADCaseStatusType $EBPSNADStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\UPICaseStatusType $UPIStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\CancelTransactionCaseStatusType $cancelTransactionStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\ReturnCaseStatusType $returnStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalINRCaseStatusType $PaypalINRStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType $PaypalSNADStatus
 */
class CaseStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'INRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'INRStatus'
        ],
        'SNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SNADStatus'
        ],
        'EBPINRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EBPINRStatus'
        ],
        'EBPSNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EBPSNADStatus'
        ],
        'UPIStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UPIStatus'
        ],
        'cancelTransactionStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelTransactionStatus'
        ],
        'returnStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnStatus'
        ],
        'PaypalINRStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaypalINRStatus'
        ],
        'PaypalSNADStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaypalSNADStatus'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
