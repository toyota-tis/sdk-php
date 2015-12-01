<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * Company request model
 *
 * @package Easir\SDK\Request\Model
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class Company extends Model
{
    public $name, $timezone = "Europe/Copenhagen", $address_1, $address_2, $zip_code,
            $city, $state, $country = 'dk', $invoice_email, $phone_number,
            $website, $locale = 'da-DK', $currency = 'dkk', $language = 'da', $user;
}