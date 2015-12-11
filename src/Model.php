<?php

namespace Easir\SDK;

use Easir\SDK\Helper\StringHelper;

/**
 * Class Model
 * @package Easir\SDK
 */
abstract class Model
{
    use PopulatableFromData;

    /**
     * Factory method to create an instance of a given type if it exists
     *
     * @static
     * @param string $type
     * @param array $data
     * @return null|Model
     */
    public static function createIfExists($type, $data)
    {
        $type = "\\Easir\\SDK\\Model\\" . StringHelper::studly($type);

        if (class_exists($type)) {
            return new $type($data);
        } else {
            return null;
        }
    }
}