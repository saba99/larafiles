<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\User;
class Subscribe extends Model
{  

protected $dates=['subscribe_expired_at'];

public function user(){

return $this->belongsTo(User::class);

}


}
