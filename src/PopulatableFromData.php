<?php

namespace Easir\SDK;

trait PopulatableFromData
{
    /**
     * List of possible collection names and their types
     *
     * @var array
     */
    private $collections = [
            'companies' => 'company',
            'locales' => 'locale',
            'timezones' => 'timezone',
            'currencies' => 'currency',
            'languages' => 'language',
            'countries' => 'country',
    ];

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
            }
        }
    }
}