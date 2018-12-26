<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Like extends Model
{
    //A LIKE BELONGS TO A REPLY AND USER
    // public function reply()
    // {
    //     return $this->belongsTo(Reply::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
