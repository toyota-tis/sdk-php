<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

/**
 * This is both a model and a Response
 *
 * @package Easir\SDK\Model
 */
class Company extends Response
{
    public $id, $name, $phone_number, $website, $vat, $logo_1, $logo_2, $created_at, $updated_at,
            $billing, $timezone, $locale, $language, $currency, $user_count;
}