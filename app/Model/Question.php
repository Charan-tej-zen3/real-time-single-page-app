<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    //CHANGE PARAMETER KEY COLUMN
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //FILLABELES
    //protected $fillable=['title', 'slug', 'body', 'category_id', 'user_id'];
    protected $guarded = [];

    //A QUESTION BELONGS TO A USER, CATEGORY AND HAS MANY REPLIES
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class)->latest();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //GET PATH
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
