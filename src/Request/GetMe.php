<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\User;
use Easir\SDK\Request;

/**
 * Request class for getting an access token for a given user
 *
 * @package Easir\SDK\Request
 */
class GetMe extends Request
{
    protected $url = '/me';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = User::class;
}