<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\Company as CompanyRequestModel;
use Easir\SDK\Model\Company;

/**
 * Request class for creating companies
 *
 * @package Easir\SDK\Request
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class CreateCompanyRequest extends Request
{
    public $url = '/companies';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Company::class;
    protected $modelClass = CompanyRequestModel::class;
}