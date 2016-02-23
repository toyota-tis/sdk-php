<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Company;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCompany as CreateCompanyRequestModel;

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
    protected $modelClass = CreateCompanyRequestModel::class;
}