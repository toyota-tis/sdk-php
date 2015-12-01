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
    use PopulatableFromApi;

    public $errors, $status;

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

        $response->status = $clientResponse->getStatusCode();

        $responseData = json_decode($clientResponse->getBody()->getContents());

        $response->populateFromApiData($responseData);

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