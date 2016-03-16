<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyCases
 * @package Easir\SDK\Response
 */
class ListCompanyCases extends Response
{
    protected $collections = ['data' => 'cases'];

    public $data, $pagination;
}