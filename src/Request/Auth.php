<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\Auth as AuthRequestModel;
use Easir\SDK\Response\Auth as AuthResponse;

/**
 * Class AuthRequest
 * @package Easir\SDK\Request
 */
class Auth extends Request
{
    protected $url = '/token';
    public $method = 'POST';
    public $requiresAuth = false;
    public $responseClass = AuthResponse::class;
    protected $modelClass = AuthRequestModel::class;

    private $availableGrantTypes = ['client_credentials', 'password', 'refresh_token'];

    public function __construct(Model $model)
    {
        parent::__construct($model);

        // Default to first grant type
        $this->setGrantType($this->availableGrantTypes[0]);
    }

    public function setGrantType($grantType)
    {
        if (!in_array($grantType, $this->availableGrantTypes)) {
            throw new RequestException(sprintf("Unsupported grant type: %s", $grantType), RequestException::BAD_GRANT_TYPE);
        }

        $this->options['query'] = ['grant_type' => $grantType];
    }
}