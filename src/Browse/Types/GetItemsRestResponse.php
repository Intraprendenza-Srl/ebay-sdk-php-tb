<?php

namespace DTS\eBaySDK\Browse\Types;

use DTS\eBaySDK\HttpHeadersTrait;
use DTS\eBaySDK\StatusCodeTrait;

class GetItemsRestResponse extends Items
{
	use StatusCodeTrait;
	use HttpHeadersTrait;

	/**
	 * @var array Properties belonging to objects of this class.
	 */
	private static $propertyTypes = [
		'errors' => [
			'type' => 'DTS\eBaySDK\Browse\Types\ErrorDetailV3',
			'repeatable' => true,
			'attribute' => false,
			'elementName' => 'errors'
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
	 * @param int $statusCode Status code
	 * @param array $headers HTTP Response headers.
	 */
	public function __construct(array $values = [], $statusCode = 200, array $headers = [])
	{
		[$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);
		parent::__construct($parentValues);
		if (!array_key_exists(__CLASS__, self::$properties)) {
			self::$properties[__CLASS__] = array_merge(self::$properties[parent::class], self::$propertyTypes);
		}
		$this->setValues(__CLASS__, $childValues);
		$this->statusCode = (int)$statusCode;
		$this->setHeaders($headers);
	}
}