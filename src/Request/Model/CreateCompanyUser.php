<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * User model for the Company request model
 *
 * @package Easir\SDK\Request\Model
 */
class CreateCompanyUser extends Model
{
    public $first_name, $last_name, $email, $password;
}