<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateContact as ContactRequestModel;
use Easir\SDK\Model\Contact;

/**
 * Request class for creating contacts
 *
 * @package Easir\SDK\Request
 */
class CreateContact extends Request
{
    protected $url = '/accounts/%s/contacts';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Contact::class;
    protected $modelClass = ContactRequestModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), $this->model->account_id);
        }
    }
}