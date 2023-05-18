<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "room_id", "message"];

    public function room()
    {
        return $this->belongsTo(Room::class, "room_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
