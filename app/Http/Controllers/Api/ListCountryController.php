<?php

namespace App\Http\Controllers\Api;

use App\Domain\Core\Resources\CountryResource;
use App\Domain\Core\Services\CountryService;
use App\Http\Controllers\Controller;

class ListCountryController extends Controller
{
    public function __invoke(CountryService $countryService)
    {
        $countries = $countryService->getAllCountries();

        return CountryResource::collection($countries);
    }
}
