<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

/**
 * This is both a model and a Response
 *
 * @package Easir\SDK\Model
 *
 * @author Pete Warnes <pete@warnes.dk>
 */
class Company extends Response
{
    public $id, $name, $company_name, $phone_number, $website, $vat, $logo_1, $logo_2, $created_ad, $updated_at,
            $billing, $timezone, $locale, $language, $currency, $user;
}