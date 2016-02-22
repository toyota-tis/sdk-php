<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateAccount as AccountRequestModel;
use Easir\SDK\Model\Account;

/**
 * Request class for creating accounts
 *
 * @package Easir\SDK\Request
 */
class CreateAccount extends Request
{
    protected $url = '/accounts';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Account::class;
    protected $modelClass = AccountRequestModel::class;
}