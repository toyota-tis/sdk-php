<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateUser as UserRequestModel;
use Easir\SDK\Model\User;
use Easir\SDK\Exception\RequestException;

/**
 * Request class for creating teams
 *
 * @package Easir\SDK\Request
 */
class CreateUser extends Request
{
    protected $url = '/companies/%d/users';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = User::class;
    protected $modelClass = UserRequestModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id);
        }
    }
}