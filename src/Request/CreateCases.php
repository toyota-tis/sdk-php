<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCase as CreateCasesRequestModel;
use Easir\SDK\Model\Cases;

/**
 * Request class for creating cases
 *
 * @package Easir\SDK\Request
 */
class CreateCases extends Request
{
    protected $url = '/cases';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Cases::class;
    protected $modelClass = CreateCasesRequestModel::class;
}