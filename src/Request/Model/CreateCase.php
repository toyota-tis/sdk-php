<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateCase
 *
 * @package Easir\SDK\Request\Model
 */
class CreateCase extends Model
{
    public $user_id, $contact_id, $relations_path_id, $notify_user;
}