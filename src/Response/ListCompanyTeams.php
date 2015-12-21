<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyTeams
 * @package Easir\SDK\Response
 */
class ListCompanyTeams extends Response
{
    protected $collections = ['data' => 'team'];

    public $data, $pagination;
}