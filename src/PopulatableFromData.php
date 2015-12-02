<?php

namespace Easir\SDK;

trait PopulatableFromData
{
    /**
     * @author Pete Warnes <pete@warnes.dk>
     * @param \Traversable $data
     */
    public function populateFromData($data)
    {
        foreach ($data as $paramName => $paramValue) {
            if (property_exists($this, $paramName)) {
                if (is_object($paramValue)) {
                    $this->$paramName = Model::createIfExists($paramName, $paramValue);
                } else {
                    $this->$paramName = $paramValue;
                }
            }
        }
    }
}