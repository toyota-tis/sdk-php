<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for ListCompanyTeams
 *
 * @package Easir\SDK\Request\Model
 */
class ListCompanyTeams extends Model
{
    public $id, $searchTerm = "", $page = 1, $perPage = 15, $team_type = "", $sort_by = "", $sort_direction = 'desc';
}