<?php

namespace App\utility;

use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
//use App\User;

class User  {



public static function is_user_subscribed($user_id=null){



$user=\App\User::find($user_id);

//dd($user->subscribes()->get());
$user_subscribes=$user->subscribes()->where('subscribe_expired_at','<=',Carbon::now())->first();

//dd($user_subscribes);

return !empty($user_subscribes) && ($user_subscribes instanceof Subscribe);


}


}