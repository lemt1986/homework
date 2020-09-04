<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message', 'user_id', 'chat_id'];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
