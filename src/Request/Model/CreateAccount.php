<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateAccount
 *
 * @package Easir\SDK\Request\Model
 */
class CreateAccount extends Model
{
    public $id, $user_id, $team_id, $fixed_fields, $custom_fields;
}