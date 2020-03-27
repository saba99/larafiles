<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;
use App\Models\Files;
use App\Payment;
use App\User;

class Order extends Model
{
   public function packages(){

    return $this->belongsToMany(Package::class);
   }
    public function files()
    {

        return $this->belongsToMany(Files::class);
    } 

    public function users(){

        return $this->hasMany(User::class);
    } 

    public function payment(){

        return $this->hasOne(Payment::class);
    }
}
