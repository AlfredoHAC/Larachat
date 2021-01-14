<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    public function chats()
    {
        return $this->belongsToMany('App\Chat');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

}
