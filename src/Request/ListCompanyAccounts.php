<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyAccounts as ListCompanyAccountsModel;
use Easir\SDK\Response\ListCompanyAccounts as ListCompanyAccountsResponse;

/**
 * Request class for listing company accounts
 *
 * @package Easir\SDK\Request
 */
class ListCompanyAccounts extends Request
{
    protected $url = '/accounts?q=%s';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListCompanyAccountsResponse::class;
    protected $modelClass = ListCompanyAccountsModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(),
                urlencode((string)$this->model->searchTerm)
            );
        }
    }
}