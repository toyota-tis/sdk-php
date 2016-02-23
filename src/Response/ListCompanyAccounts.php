<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyAccounts
 * @package Easir\SDK\Response
 */
class ListCompanyAccounts extends Response
{
    protected $collections = ['data' => 'account'];

    public $data, $pagination;
}