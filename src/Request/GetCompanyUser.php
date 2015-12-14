<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\User;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetCompanyUser as GetCompanyUserModel;

/**
 * Request class for getting a specific company user
 *
 * @package Easir\SDK\Request
 */
class GetCompanyUser extends Request
{
    protected $url = '/companies/%d/users/%d';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = User::class;
    protected $modelClass = GetCompanyUserModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->companyId, (int)$this->model->id);
        }
    }
}