<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetAccessToken as GetAccessTokenModel;
use Easir\SDK\Response\AccessToken;

/**
 * Request class for getting an access token for a given user
 *
 * @package Easir\SDK\Request
 */
class GetAccessToken extends Request
{
    protected $url = '/token/%d';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = AccessToken::class;
    protected $modelClass = GetAccessTokenModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->userId);
        }
    }
}