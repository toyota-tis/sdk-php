<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class LocalizationTypes extends Response
{
    /**
     * List of possible collection names and their types
     *
     * @var array
     */
    protected $collections = [
            'locales' => 'locale',
            'timezones' => 'timezone',
            'currencies' => 'currency',
            'languages' => 'language',
            'countries' => 'country',
    ];

    public $locales, $timezones, $currencies, $languages, $countries;
}