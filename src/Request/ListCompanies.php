<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanies as ListCompaniesModel;
use Easir\SDK\Response\ListCompanies as ListCompaniesResponse;

/**
 * Request class for listing companies
 *
 * @package Easir\SDK\Request
 */
class ListCompanies extends Request
{
    protected $url = '/companies';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListCompaniesResponse::class;
    protected $modelClass = ListCompaniesModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            return parent::getUrl();
        } else {
            return parent::getUrl() . sprintf("?page=%d&per_page=%d&q=%s", (int)$this->model->page, (int)$this->model->perPage, urlencode((string)$this->model->searchTerm));
        }
    }
}