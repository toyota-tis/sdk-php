<?php

namespace Easir\SDK;

use Easir\SDK\Helper\StringHelper;

/**
 * Class Model
 * @package Easir\SDK
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
abstract class Model
{
    use PopulatableFromData;

    /**
     * Model constructor.
     *
     * @param array|stdClass|null $data Initialise the instance with the $data array
     */
    public function __construct($data = null)
    {
        $this->populateFromData($data);
    }

    /**
     * Factory method to create an instance of a given type if it exists
     * @author Pete Warnes <pete@warnes.dk>
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