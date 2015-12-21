<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyTeams as ListCompanyTeamsModel;
use Easir\SDK\Response\ListCompanyTeams as ListCompanyTeamsResponse;

/**
 * Request class for listing company teams
 *
 * @package Easir\SDK\Request
 */
class ListCompanyTeams extends Request
{
    protected $url = '/companies/%d/teams?page=%d&per_page=%d&q=%s&team_type=%s&sort_by=%s&sort_direction=%s';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListCompanyTeamsResponse::class;
    protected $modelClass = ListCompanyTeamsModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(),
                    (int)$this->model->id,
                    (int)$this->model->page,
                    (int)$this->model->perPage,
                    urlencode((string)$this->model->searchTerm),
                    urlencode((string)$this->model->team_type),
                    urlencode((string)$this->model->sort_by),
                    urlencode((string)$this->model->sort_direction)
            );
        }
    }
}