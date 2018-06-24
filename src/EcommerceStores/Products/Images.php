<?php

namespace MailchimpAPI\EcommerceStores\Products;

use MailchimpAPI\EcommerceStores\Products;

/**
 * Class Images
 * @package MailchimpAPI\EcommerceStores\Products
 */
class Images extends Products
{
    /**
     * @var string
     */
    public $class_input;

    /**
     * @var array
     */
    public $req_post_params = [
        'id',
        'url'
    ];

    /**
     * Images constructor.
     * @param $apikey
     * @param $parent_resource
     * @param $grandparent_resource
     * @param $class_input
     * @throws \MailchimpAPI\MailchimpException
     */
    public function __construct(
        $apikey,
        $parent_resource,
        $grandparent_resource,
        $class_input
    ) {

        parent::__construct($apikey, $parent_resource, $grandparent_resource);

        if ($class_input) {
            $this->request->appendToEndpoint('/images/' . $class_input);
        } else {
            $this->request->appendToEndpoint('/images/');
        }

        $this->class_input = $class_input;
    }
}