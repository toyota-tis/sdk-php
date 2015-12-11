<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Model\LocalizationTypes;

/**
 * Base request class for getting the localisation types
 *
 * @package Easir\SDK\Request
 */
abstract class GetLocalizationTypes extends Request
{
    protected $url = '/localization-types';
    protected $urlSuffix = "";
    public $method = 'GET';
    public $requiresAuth = false;
    public $responseClass = LocalizationTypes::class;

    public function getUrl()
    {
        return $this->url . $this->urlSuffix;
    }
}