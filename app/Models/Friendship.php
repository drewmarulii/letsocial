<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $table = 'friendships';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function follow_user()
    {
        return $this->belongsTo(User::class, 'follow_user_id');
    }
}
