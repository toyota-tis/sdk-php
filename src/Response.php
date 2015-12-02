<?php

namespace Easir\SDK;

use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Easir\SDK\Model;

/**
 * Response base class
 *
 * @package Easir\SDK
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
abstract class Response
{
    use PopulatableFromData;

    public $errors, $statusCode;

    /**
     * Create an instance from the Guzzle client response object
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @static
     * @param \Easir\SDK\Response $clientResponse
     * @return static
     */
    public static function createFromClientResponse(GuzzleResponse $clientResponse)
    {
        $response = new static;

        $response->statusCode = $clientResponse->getStatusCode();

        $responseData = json_decode($clientResponse->getBody()->getContents());

        $response->populateFromData($responseData);

        return $response;
    }

    /**
     * Format response as a JSON string
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @return string
     */
    public function asJson()
    {
        return json_encode($this);
    }

    /**
     * Return true if the response has errors
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @return bool
     */
    public function hasErrors()
    {
        return (count($this->errors) > 0);
    }

    /**
     * Return true if the response contains the given error code
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @param string $code
     * @return bool
     */
    public function hasError($code)
    {
        $foundCode = false;
        if (is_array($this->errors)) {
            foreach ($this->errors as $error) {
                if (isset($error->code) && $error->code == $code) {
                    $foundCode = true;
                    break;
                }
            }
        }

        return $foundCode;
    }

    /**
     * Get the error messages associated with the response
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @return array
     */
    public function getErrorMessages()
    {
        $errorMessages = array();
        if (is_array($this->errors)) {
            foreach ($this->errors as $error) {
                if (isset($error->message)) {
                    array_push($errorMessages, $error->message);
                }
            }
        }

        return $errorMessages;
    }

}