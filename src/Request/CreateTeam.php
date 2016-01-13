<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateTeam as TeamRequestModel;
use Easir\SDK\Model\Team;

/**
 * Request class for creating teams
 *
 * @package Easir\SDK\Request
 */
class CreateTeam extends Request
{
    protected $url = '/teams';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Team::class;
    protected $modelClass = TeamRequestModel::class;
}