<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * Auth request model
 *
 * @package Easir\SDK\Request\Model
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class Auth extends Model
{
    public $client_id, $client_secret;

    // Only used for grantType=refresh_token
    public $refresh_token;

    // Only used for grantType=password
    public $username, $password;
}