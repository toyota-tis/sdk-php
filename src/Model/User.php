<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class User extends Model
{
    public $id, $first_name, $last_name, $phone_number, $job_title, $email, $email_notifications, $profile_picture, $user_type, $created_at, $updated_at;
}