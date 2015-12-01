<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * User model for the Company request model
 *
 * @package Easir\SDK\Request\Model
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class CompanyUser extends Model
{
    public $first_name, $last_name, $email, $password;
}