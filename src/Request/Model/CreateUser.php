<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateUser
 *
 * @package Easir\SDK\Request\Model
 */
class CreateUser extends Model
{
    public $first_name, $last_name, $email, $job_title, $timezone = "Europe/Copenhagen", $phone_number,
        $password, $team_id, $locale = 'da-DK';
}