<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetTeam as GetTeamModel;
use Easir\SDK\Model\Team;

/**
 * Request class for getting a specific team
 *
 * @package Easir\SDK\Request
 */
class GetTeam extends Request
{
    protected $url = '/teams/%d';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = Team::class;
    protected $modelClass = GetTeamModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id);
        }
    }
}