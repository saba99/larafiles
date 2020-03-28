<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{     
    protected $fillable=['address','city','province','country','post_code','user_id'];



    public function user(){

        return $this->belongsTo(User::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
