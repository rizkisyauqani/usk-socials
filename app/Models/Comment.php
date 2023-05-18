<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function tweet()
    {
        return $this->belongsToMany(Tweet::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
