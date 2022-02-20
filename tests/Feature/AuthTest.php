<?php

namespace Tests\Feature;

use App\Domain\Core\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Client;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * @test
     */
    public function password_grant_user_login_with_correct_password()
    {
        $client = Client::where('password_client', 1)->firstOrFail();
        $user = User::firstOrFail();

        $response = $this->postJson(
            '/oauth/token',
            [
                "grant_type" => "password",
                "client_id" => $client->id,
                "client_secret" => $client->secret,
                "username" => $user->email,
                "password" => "123456",
                "scope" => "*"
            ],
            $this->requiredApiRequestHeaders
        );

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "token_type",
            "expires_in",
            "access_token",
            "refresh_token",
        ]);
    }

    /**
     * @test
     */
    public function password_grant_user_login_with_incorrect_password()
    {
        $client = Client::where('password_client', 1)->firstOrFail();
        $user = User::firstOrFail();

        $response = $this->postJson(
            '/oauth/token',
            [
                "grant_type" => "password",
                "client_id" => $client->id,
                "client_secret" => $client->secret,
                "username" => $user->email,
                "password" => "wrong-password",
                "scope" => "*"
            ],
            $this->requiredApiRequestHeaders
        );

        $response->assertStatus(400);
    }  
}
