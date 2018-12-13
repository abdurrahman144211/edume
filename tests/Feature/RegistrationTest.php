<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function un_authenticated_user_can_register()
    {
        $this->postJson(route('register'), [
            'name' => 'johndoe',
            'email' => 'test@test.com',
            'password' => 'secret',
            'password_confirmation' => 'secret'
        ])->assertStatus(204);

        $this->assertDatabaseHas('users', ['email' => 'test@test.com']);
    }

    function un_authenticated_user_must_receive_error_message_when_trying_register_with_invalid_data()
    {
        $this->postJson(route('register'), [
            'name' => 'johndoe',
            'email' => 'test@test.com',
            'password' => 'secret',
            'password_confirmation' => ''
        ])->assertStatus(422);

        $this->assertDatabaseMissing('users', ['email' => 'test@test.com']);
    }
}
