<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
