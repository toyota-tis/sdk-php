<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyContacts
 * @package Easir\SDK\Response
 */
class ListCompanyContacts extends Response
{
    protected $collections = ['data' => 'contact'];

    public $data, $pagination;
}