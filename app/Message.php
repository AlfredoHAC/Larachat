<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender', 'content', 'chat'];

    public function chat()
    {
        return $this->belongsTo('App\Chat', 'chat');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'sender');
    }
}
