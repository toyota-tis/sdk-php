<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateActivity
 *
 * @package Easir\SDK\Request\Model
 */
class CreateActivity extends Model
{
    public $case_id, $activity_types, $communication_channel, $note = null, $task = null;
}