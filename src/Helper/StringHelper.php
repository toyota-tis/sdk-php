<?php

namespace Easir\SDK\Helper;

/**
 * Generic string helpers
 *
 * borrowed from
 * @link https://github.com/rappasoft/laravel-helpers
 *
 * @package Easir\SDK\Helper
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class StringHelper
{
    public static function camel($value)
    {
        $camelCache = [];
        if (isset($camelCache[$value]))
        {
            return $camelCache[$value];
        }
        return $camelCache[$value] = lcfirst(self::studly($value));
    }

    public static function studly($value)
    {
        $studlyCache = [];
        $key = $value;
        if (isset($studlyCache[$key]))
        {
            return $studlyCache[$key];
        }
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        return $studlyCache[$key] = str_replace(' ', '', $value);
    }
}