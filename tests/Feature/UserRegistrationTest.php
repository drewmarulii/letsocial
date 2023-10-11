<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function testUserRegistration()
    {
        $userData = [
            'username' => 'drewmaruli',
            'email' => 'drewmaruli@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'fullName' => 'Andrew Maruli',
            'profileImageUrl' => 'https://example.com/profile.jpg',
            'bio' => 'Some bio',
            'website' => 'https://drewmaruli.com'
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure([
                'message',
            ]);

        $responseMessage = $response->json('message');
        $this->assertEquals('User registered successfully', $responseMessage);

        $this->assertDatabaseHas('users', [
            'username' => $userData['username'],
            'email' => $userData['email'],
            'fullName' => $userData['fullName'],
        ]);
    }
}