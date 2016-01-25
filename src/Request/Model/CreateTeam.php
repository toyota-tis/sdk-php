<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateTeam
 *
 * @package Easir\SDK\Request\Model
 */
class CreateTeam extends Model
{
    public $name, $timezone = "Europe/Copenhagen", $address_1, $address_2, $zip_code,
        $city, $state, $country = 'dk', $phone_number,
        $website, $vat, $locale = 'da-DK', $team_type;
}