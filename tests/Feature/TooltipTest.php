<?php

namespace Tests\Feature;

use Tests\TestCase;

class TooltipTest extends TestCase
{
    /**
     * @test
     */
    public function get_tooltips_list()
    {
        $response = $this->getJson('/api/tooltips', $this->requiredApiRequestHeaders);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                [
                    "id",
                    "key",
                    "value",
                ]
            ]
        ]);
    }
}
