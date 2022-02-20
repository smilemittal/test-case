<?php

namespace Tests\Feature;

use Tests\TestCase;

class RequiredHeaderTest extends TestCase
{
    /**
     * @test
     */
    public function request_should_return_403()
    {
        $this->getJson('/')->assertStatus(403);
    }

    /**
     * @test
     */
    public function request_should_return_200()
    {
        $this->get('/')->assertStatus(200);
        $this->getJson('/', $this->requiredApiRequestHeaders)->assertStatus(200);
    }
}
