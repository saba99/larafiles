<?php

namespace App\Models;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'text'];


    const XP = 5;

    public function user()
    {

        return $this->belongsTo(User::class);
    }

}
