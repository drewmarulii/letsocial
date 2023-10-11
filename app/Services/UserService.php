<?php // app/Services/UserService.php

namespace App\Services;
use App\DTO\UserRegistrationDTORequest;
use App\Models\User;

class UserService
{
    public function registerUser(UserRegistrationDTORequest $data)
    {
        $user = User::create([
            'username' => $data->username,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'fullName' => $data->fullName,
            'profileImageUrl' => $data->profileImageUrl,
            'bio' => $data->bio,
            'website' => $data->website
        ]);
    }
}
