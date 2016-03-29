<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateActivity as CreateActivityRequestModel;
use Easir\SDK\Model\Activity;

/**
 * Request class for creating activities
 *
 * @package Easir\SDK\Request
 */
class CreateActivity extends Request
{
    protected $url = '/cases/%s/activities';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Activity::class;
    protected $modelClass = CreateActivityRequestModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), $this->model->case_id);
        }
    }
}