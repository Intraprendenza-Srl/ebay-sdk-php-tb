<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType $ActiveInventoryReport
 * @property \DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType[] $AddFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\AddItemResponseType[] $AddItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType[] $EndFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\EndItemResponseType[] $EndItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType $FeeSettlementReport
 * @property \DTS\eBaySDK\MerchantData\Types\OrderAckResponseType[] $OrderAckResponse
 * @property \DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType[] $RelistFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\RelistItemResponseType[] $RelistItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType[] $ReviseFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType[] $ReviseInventoryStatusResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType[] $ReviseItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType[] $SetShipmentTrackingInfoResponse
 * @property \DTS\eBaySDK\MerchantData\Types\SoldReportResponseType $SoldReport
 * @property \DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType[] $UploadSiteHostedPicturesResponse
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType[] $VerifyAddFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType[] $VerifyAddItemResponse
 */
class BulkDataExchangeResponsesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActiveInventoryReport' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveInventoryReport'
        ],
        'AddFixedPriceItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemResponse'
        ],
        'AddItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddItemResponse'
        ],
        'EndFixedPriceItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemResponse'
        ],
        'EndItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndItemResponse'
        ],
        'FeeSettlementReport' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeSettlementReport'
        ],
        'OrderAckResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderAckResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderAckResponse'
        ],
        'RelistFixedPriceItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemResponse'
        ],
        'RelistItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistItemResponse'
        ],
        'ReviseFixedPriceItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemResponse'
        ],
        'ReviseInventoryStatusResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusResponse'
        ],
        'ReviseItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemResponse'
        ],
        'SetShipmentTrackingInfoResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoResponse'
        ],
        'SoldReport' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SoldReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldReport'
        ],
        'UploadSiteHostedPicturesResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesResponse'
        ],
        'VerifyAddFixedPriceItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemResponse'
        ],
        'VerifyAddItemResponse' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemResponse'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeResponses';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
