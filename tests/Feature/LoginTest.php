<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function un_authenticated_user_can_login_when_pass_valid_data()
    {
        $user = factory('App\User')->create();

        $this->postJson(route('login'), [
            'email' => $user->email,
            'password' => 'secret'
        ])->assertStatus(204);
    }

    /** @test */
    function un_authenticated_user_recive_error_message_trying_login_with_invalid_data()
    {
        $this->postJson(route('login'), [
            'email' => 'invalid@test.com',
            'password' => 'invalid'
        ])
            ->assertStatus(422)
            ->assertJson(['message' => 'The given data was invalid']);
    }
}
