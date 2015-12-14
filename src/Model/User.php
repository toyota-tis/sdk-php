<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

/**
 * This is both a model and a Response
 *
 * @package Easir\SDK\Model
 */
class User extends Response
{
    public $id, $first_name, $last_name, $phone_number, $job_title, $email, $email_notifications, $profile_picture, $user_type, $timezone, $signature, $created_at, $updated_at;
}