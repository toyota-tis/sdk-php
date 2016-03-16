<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetCase as GetCaseModel;
use Easir\SDK\Model\Cases;

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
    public $responseClass = Cases::class;
    protected $modelClass = GetCaseModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id);
        }
    }
}