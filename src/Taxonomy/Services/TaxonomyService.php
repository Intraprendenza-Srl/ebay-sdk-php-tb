<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Taxonomy\Services;

class TaxonomyService extends \DTS\eBaySDK\Taxonomy\Services\TaxonomyBaseService
{
	const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetADefaultCategoryTreeId' => [
            'method' => 'GET',
            'resource' => 'get_default_category_tree_id',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategoryTree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategorySubtree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_subtree',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetSuggestedCategories' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_suggestions',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'q' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemAspectsForCategory' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_item_aspects_for_category',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request
     * @return \DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse
     */
    public function getADefaultCategoryTreeId(\DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->getADefaultCategoryTreeIdAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getADefaultCategoryTreeIdAsync(\DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->callOperationAsync('GetADefaultCategoryTreeId', $request);
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestRequest $request
     * @return \DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse
     */
    public function getACategoryTree(\DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestRequest $request)
    {
        return $this->getACategoryTreeAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getACategoryTreeAsync(\DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategoryTree', $request);
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestRequest $request
     * @return \DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse
     */
    public function getACategorySubtree(\DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestRequest $request)
    {
        return $this->getACategorySubtreeAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getACategorySubtreeAsync(\DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategorySubtree', $request);
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request
     * @return \DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse
     */
    public function getSuggestedCategories(\DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request)
    {
        return $this->getSuggestedCategoriesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSuggestedCategoriesAsync(\DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetSuggestedCategories', $request);
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request
     * @return \DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse
     */
    public function getItemAspectsForCategory(\DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->getItemAspectsForCategoryAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAspectsForCategoryAsync(\DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->callOperationAsync('GetItemAspectsForCategory', $request);
    }
}
