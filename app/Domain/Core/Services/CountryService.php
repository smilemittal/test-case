<?php

namespace App\Domain\Core\Services;

use App\Domain\Core\Repositories\CountryRepository;

class CountryService
{
    private CountryRepository $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function getAllCountries()
    {
        return $this->countryRepository->getAllCountries();
    }
}
