<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\Company;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetCompany as GetCompanyModel;

/**
 * Request class for getting a specific company
 *
 * @package Easir\SDK\Request
 */
class GetCompany extends Request
{
    protected $url = '/companies/%d';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = Company::class;
    protected $modelClass = GetCompanyModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id);
        }
    }
}