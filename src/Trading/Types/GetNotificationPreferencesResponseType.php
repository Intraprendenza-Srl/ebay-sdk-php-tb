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
 * @property \DTS\eBaySDK\Trading\Types\ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
 * @property string $DeliveryURLName
 * @property \DTS\eBaySDK\Trading\Types\NotificationEnableArrayType $UserDeliveryPreferenceArray
 * @property \DTS\eBaySDK\Trading\Types\NotificationUserDataType $UserData
 * @property \DTS\eBaySDK\Trading\Types\NotificationEventPropertyType[] $EventProperty
 */
class GetNotificationPreferencesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationDeliveryPreferences' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ApplicationDeliveryPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationDeliveryPreferences'
        ],
        'DeliveryURLName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryURLName'
        ],
        'UserDeliveryPreferenceArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationEnableArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserDeliveryPreferenceArray'
        ],
        'UserData' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationUserDataType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserData'
        ],
        'EventProperty' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NotificationEventPropertyType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EventProperty'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
