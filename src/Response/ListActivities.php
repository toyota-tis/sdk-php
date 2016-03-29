<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompanyActivities
 * @package Easir\SDK\Response
 */
class ListCompanyActivities extends Response
{
    protected $collections = ['data' => 'activity'];

    public $data, $pagination;
}