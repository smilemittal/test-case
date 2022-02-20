<?php

namespace Tests\Feature;

use Tests\TestCase;

class CountryTest extends TestCase
{
    /**
     * @test
     */
    public function get_countries_list()
    {
        $response = $this->getJson('/api/countries', $this->requiredApiRequestHeaders);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                [
                    "id",
                    "name",
                    "flag",
                    "code",
                    "callingcode",
                    "currency_name",
                    "currency_code",
                ]
            ]
        ]);
    }
}
