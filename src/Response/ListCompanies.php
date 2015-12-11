<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompaniesResponse
 * @package Easir\SDK\Response
 */
class ListCompanies extends Response
{
    protected $collections = ['data' => 'company'];

    public $data, $pagination;
}