<?php

namespace App;

use App\Models\Payment;
use App\Models\Subscribe;
use App\Models\Package;
use App\Models\Order;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{    

    const USER=1;

    const ADMIN=2;
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    // protected  $guarded=['role'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
    

        $this->attributes['password']=bcrypt($value);
        

    }
    public function payments(){

        return $this->hasMany(Payment::class);
    }  

    public function subscribes(){

        return $this->hasMany(Subscribe::class);  
    }  

    public function packages(){

        return $this->belongsToMany(Package::class,'user_packages')->withPivot(['amount']);
    } 

    public function CurrentSubscribe(){


       return $this->subscribes()->where('subscribe_expired_at','>=',Carbon::now()); 
    } 

    public function order(){

        return $this->belongsTo(Order::class);
    }
    
}
