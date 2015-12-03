<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;

/**
 * Request class for getting the localisation types
 *
 * @package Easir\SDK\Request
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class GetCompanyLocalizationTypesRequest extends GetLocalizationTypesRequest
{
    protected $urlSuffix = '/companies';
}