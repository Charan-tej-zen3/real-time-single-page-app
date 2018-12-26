<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    //protected $fillable= ['name', 'slug'];
    protected $guarded= [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //A CATEGORY HAS MANY QUESTIONS
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
