<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Contact extends Response
{
    public $id, $team_id, $fixed_fields, $custom_fields, $created_at, $updated_at;
}