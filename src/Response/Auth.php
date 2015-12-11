<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class AuthResponse
 * @package Easir\SDK\Response
 */
class Auth extends Response
{
    public $access_token, $token_type, $expires_in, $refresh_token;
}