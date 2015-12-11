<?php

namespace Easir\SDK\Request;

/**
 * Request base model
 *
 * @package Easir\SDK\Request
 */
class Model
{
    /**
     * Model constructor.
     *  Optionally takes a traversable object to initialise the model from.
     * 
     * @param \Traversable $data
     */
    public function __construct($data = array())
    {
        foreach ($data as $paramName => $paramValue) {
            if (property_exists($this, $paramName)) {
                $this->$paramName = $paramValue;
            }
        }
    }
}