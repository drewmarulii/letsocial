<?php

namespace App\DTO;
use Illuminate\Support\Facades\Facade;

class InsertResDto extends Facade
{
    private $message;

    public function __construct(
        $message
    ) {
        $this->message = $message;
    }
    
    public function getMessage()
    {
        return $this->message;
    }
    
}
