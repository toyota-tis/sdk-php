<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyUsers as ListCompanyUsersModel;
use Easir\SDK\Response\ListCompanyUsers as ListCompanyUsersResponse;

/**
 * Request class for listing company users
 *
 * @package Easir\SDK\Request
 */
class ListCompanyUsers extends Request
{
    protected $url = '/companies/%d/users?page=%d&per_page=%d&q=%s';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListCompanyUsersResponse::class;
    protected $modelClass = ListCompanyUsersModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id, (int)$this->model->page, (int)$this->model->perPage, urlencode((string)$this->model->searchTerm));
        }
    }
}