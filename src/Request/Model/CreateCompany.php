<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateCompany
 *
 * @package Easir\SDK\Request\Model
 */
class CreateCompany extends Model
{
    public $name, $timezone = "Europe/Copenhagen", $address_1, $address_2, $zip_code,
            $city, $state, $country = 'dk', $invoice_email, $phone_number,
            $website, $locale = 'da-DK', $currency = 'dkk', $language = 'da', $user;
}