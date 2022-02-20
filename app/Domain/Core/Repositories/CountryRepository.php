<?php

namespace App\Domain\Core\Repositories;

use App\Domain\Core\Models\Country;

class CountryRepository
{
    private Country $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    public function getAllCountries()
    {
        return $this->country->get();
    }
}
