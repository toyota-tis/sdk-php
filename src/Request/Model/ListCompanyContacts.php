<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for ListCompanyContacts
 *
 * @package Easir\SDK\Request\Model
 */
class ListCompanyContacts extends Model
{
    public $id, $searchTerm = "", $page = 1, $perPage = 15;
}