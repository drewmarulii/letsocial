<?php

namespace App\DTO;
use Illuminate\Support\Facades\Facade;

class UserRegistrationDTORequest extends Facade
{
    private $username;
    private $email;
    private $password;
    private $fullName;
    private $profileImageUrl;
    private $bio;
    private $website;

    public function __construct(
        $username,
        $email,
        $password,
        $fullName = null,
        $profileImageUrl = null,
        $bio = null,
        $website = null
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->fullName = $fullName;
        $this->profileImageUrl = $profileImageUrl;
        $this->bio = $bio;
        $this->website = $website;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getProfileImageUrl()
    {
        return $this->profileImageUrl;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getWebsite()
    {
        return $this->website;
    }
}
