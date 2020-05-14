<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use App\Models\Ticket;

class Admin extends  Authenticatable
{

    use Notifiable;


    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'department'
    ];



    public function replies()
    {

        return $this->morphMany(Reply::class, 'repliable');
    }

    public function isAdmin()
    {


        return $this instanceof Admin;
    }

    public function tickets(){

        return $this->hasMany(Ticket::class,'department','department');
    }
}
