<?php

namespace Easir\SDK\Exception;

use Easir\SDK\Exception;

/**
 * Exceptions specific to Easir\SDK\Client
 * @package Easir\SDK\Exception
 */
class ClientException extends Exception
{
    const GENERAL_ERROR = 1;

    const MISSING_ENDPOINT = 1010;
    const MISSING_AUTH = 1011;
}
