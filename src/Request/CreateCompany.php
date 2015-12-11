<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCompany as CompanyRequestModel;
use Easir\SDK\Model\Company;

/**
 * Request class for creating companies
 *
 * @package Easir\SDK\Request
 */
class CreateCompany extends Request
{
    protected $url = '/companies';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Company::class;
    protected $modelClass = CompanyRequestModel::class;
}