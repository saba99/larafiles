<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Photo extends Model
{
    protected $uploads = '/images/';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
