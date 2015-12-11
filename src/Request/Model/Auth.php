<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for Auth
 *
 * @package Easir\SDK\Request\Model
 */
class Auth extends Model
{
    public $client_id, $client_secret;

    // Only used for grantType=refresh_token
    public $refresh_token;

    // Only used for grantType=password
    public $username, $password;
}