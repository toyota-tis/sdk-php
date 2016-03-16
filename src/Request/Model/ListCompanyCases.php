<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for ListCompanyCases
 *
 * @package Easir\SDK\Request\Model
 */
class ListCompanyCases extends Model
{
    public $id, $searchTerm = "", $page = 1, $perPage = 15, $team_type = "", $sort_by = "", $sort_direction = 'desc';
}