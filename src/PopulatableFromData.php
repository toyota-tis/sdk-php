<?php

namespace Easir\SDK;

trait PopulatableFromData
{
    protected $collections = array();

    /**
     * Model constructor.
     *  Optionally takes a traversable object to initialise the model from.
     *
     * @param \Traversable $data
     */
    public function __construct($data = array())
    {
        $this->populateFromData($data);
    }


    /**
     * @param \Traversable $data
     */
    public function populateFromData($data)
    {
        foreach ($data as $paramName => $paramValue) {
            if (property_exists($this, $paramName)) {
                if (is_object($paramValue)) {
                    $this->$paramName = Model::createIfExists($paramName, $paramValue);
                } elseif (in_array($paramName, array_keys($this->collections)) && is_array($paramValue)) {
                    // Could this be a collection?
                    $this->$paramName = array();
                    foreach ($paramValue as $collectionItem) {
                        if (is_object($collectionItem)) {
                            array_push($this->$paramName, Model::createIfExists($this->collections[$paramName], $collectionItem));
                        }
                    }
                } else {
                    $this->$paramName = $paramValue;
                }
            } else {
                // Look for response specific mapping?
            }
        }
    }
}