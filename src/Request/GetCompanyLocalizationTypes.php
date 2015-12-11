<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;

/**
 * Request class for getting the localisation types
 *
 * @package Easir\SDK\Request
 */
class GetCompanyLocalizationTypes extends GetLocalizationTypes
{
    protected $urlSuffix = '/companies';
}