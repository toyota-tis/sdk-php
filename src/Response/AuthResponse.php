<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class AuthResponse
 * @package Easir\SDK\Response
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class AuthResponse extends Response
{
    public $access_token, $token_type, $expires_in, $refresh_token;
}