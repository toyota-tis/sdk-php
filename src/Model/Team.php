<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Team extends Model
{
    public $id, $name, $address_1, $address_2, $zip_code, $city, $state, $country, $phone_number, $website,
            $vat, $timezone, $locale, $group, $team_type, $created_at, $updated_at;
}