<?php

namespace Easir\SDK\Helper;

/**
 * Generic string helpers
 *
 * inspired by
 * @link https://github.com/rappasoft/laravel-helpers
 *
 * @package Easir\SDK\Helper
 */
class StringHelper
{
    public static function camel($value)
    {
        return  lcfirst(self::studly($value));
    }

    public static function studly($value)
    {
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        return str_replace(' ', '', $value);
    }
}