<?php // app/Services/UserService.php

namespace App\Services;
use App\Models\User;

class UserService
{
    public function registerUser($userData)
    {
        // Logic to register a user
        // Assuming $userData contains user information like name, email, password

        $user = User::create($userData);

        return $user;
    }

    public function getUserDetails($userId)
    {
        // Logic to get user details
        // Assuming $userId is the ID of the user to retrieve

        $user = User::find($userId);

        return $user;
    }
}
