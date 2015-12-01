<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Unit extends \Codeception\Module
{
    /**
     * Will assert that two objects (not necessarily of the same type) have the same contents
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @param object $expected
     * @param object $actual
     * @param string $message
     */
    public function assertSameContents($expected, $actual, $message = "") {
        foreach ($actual as $paramName => $paramValue) {
            if (isset($expected->$paramName)) {
                if (!is_object($paramValue)) {
                    $this->assertEquals($expected->$paramName, $paramValue, $message);
                } else {
                    $this->assertSameContents($expected->$paramName, $paramValue, $message);
                }
            }
        }
    }
}
