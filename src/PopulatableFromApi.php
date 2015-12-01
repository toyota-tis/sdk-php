<?php

namespace Easir\SDK;

trait PopulatableFromApi
{
    /**
     * @author Pete Warnes <pete@warnes.dk>
     * @param \Traversable $data
     */
    public function populateFromApiData($data)
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