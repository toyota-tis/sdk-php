<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyUsers
 * @package Easir\SDK\Response
 */
class ListCompanyUsers extends Response
{
    protected $collections = ['data' => 'user'];

    public $data, $pagination;
}