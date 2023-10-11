<?php

namespace App\Http\Controllers;

use App\DTO\InsertResDto;
use App\DTO\UserRegistrationDTORequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request) {
        
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'fullName' => 'required|string|max:255',
            'profileImageUrl' => 'string',
            'bio' => 'string|max:255',
            'website' => 'string|max:255'
        ]);

        $data = new UserRegistrationDTORequest(
            $validatedData['username'],
            $validatedData['email'],
            $validatedData['password'],
            $validatedData['fullName'],
            $validatedData['profileImageUrl'],
            $validatedData['bio'],
            $validatedData['website']
        );

        $this->userService->registerUser($data);

        $response = new InsertResDto(
            "User registered successfully"
        );

        return response()->json($response, 201);
    }
}
