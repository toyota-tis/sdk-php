<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateContact
 *
 * @package Easir\SDK\Request\Model
 */
class CreateContact extends Model
{
    public $team_id, $account_id, $fixed_fields, $custom_fields;
}