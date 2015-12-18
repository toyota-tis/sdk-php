<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for ListCompanies
 *
 * @package Easir\SDK\Request\Model
 */
class ListCompanies extends Model
{
    public $searchTerm = "", $page = 1, $perPage = 15, $userCounts = 0;
}