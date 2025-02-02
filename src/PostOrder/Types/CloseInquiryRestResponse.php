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

use DTS\eBaySDK\StatusCodeTrait;
use DTS\eBaySDK\HttpHeadersTrait;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\Error[] $error
 * @property \DTS\eBaySDK\PostOrder\Types\ErrorDetailV3[] $errors
 * @property \DTS\eBaySDK\PostOrder\Types\ErrorDetailV3[] $warnings
 */
class CloseInquiryRestResponse extends \DTS\eBaySDK\Types\BaseType
{
    use StatusCodeTrait;
    use HttpHeadersTrait;

    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'error' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Error',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'error'
        ],
        'errors' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
