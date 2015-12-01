<?php

namespace Easir\SDK;

/**
 * Class Exception
 * @package Easir\SDK
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
abstract class Exception extends \Exception
{
    protected $knownErrors = array(
            'quota.exceeded' => 'You have met the record quota for the current subscription. (See the Subscription and billing section in this documentation.)',
            'unauthorized' => 'Your API credentials are wrong, or you are not allowed to access this part of the API',
            'not_found' => 'The endpoint does not exists',
            'method_not_allowed' => 'The request method is not not allowed',
            'missing' => 'The resource is deleted',
            'content_type' => 'The Content-Type header must be application/json',
            'validation.*' => 'Your request could not be validated.',
            'error' => 'Something went wrong. You will get a id that will allow the EASI\'R team to look into the error',
            'validation.active_url' => 'The url must have a DNS record',
            'validation.after' => 'The date provided must be after a specific date',
            'validation.alpha' => 'The value can only contain letters',
            'validation.alpha_dash' => 'The value can only contain letters, numbers, and dashes',
            'validation.alpha_num' => 'The value can only contain letters and numbers',
            'validation.before' => 'The date provided must be before a specific date',
            'validation.numeric_between' => 'The number must be in a specific range',
            'validation.length_between' => 'The value length must be in a specific range',
            'validation.boolean' => 'The value must be either true or false',
            'validation.date' => 'The value must be a valid date',
            'validation.email' => 'The value must be a valid email',
            'validation.invalid' => 'The value is invalid',
            'validation.image' => 'The file must be a image',
            'validation.integer' => 'The value must be a integer',
            'validation.ip' => 'The value must be a valid IP',
            'validation.numeric_max' => 'The number must be under a specific value',
            'validation.filesize_max' => 'The filesize must be under a specific value',
            'validation.length_max' => 'The value length must be under a specific value',
            'validation.numeric_min' => ' The number must be over a specific value',
            'validation.filesize_min' => 'The filesize must be over a specific value',
            'validation.length_min' => 'The value length must be over a specific value',
            'validation.numeric' => 'The value must be numeric',
            'validation.required' => 'The field is required',
            'validation.exists' => 'The value is already taken',
            'validation.url' => 'The value must be a valid URL',
            'validation.timezone' => 'The value must be a valid timezone',
    );

    /**
     * Tell us is a given error code is known
     *
     * @author Pete Warnes <pete@warnes.dk>
     * @param $errorCode
     * @return bool
     */
    public function isKnownError($errorCode)
    {
        return isset($this->knownErrors[$errorCode]);
    }
}