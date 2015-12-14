<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for ListCompanyUsers
 *
 * @package Easir\SDK\Request\Model
 */
class ListCompanyUsers extends Model
{
    public $id, $searchTerm = "", $page = 1, $perPage = 15;
}