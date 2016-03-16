<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Cases extends Response
{
    public $id, $user_id, $contact_id, $relations_path_id, $notify_user, $created_at, $updated_at;
}