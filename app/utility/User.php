<?php

namespace App\utility;

use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\User as UserModel;

class User  {



public static function is_user_subscribed($user_id=null){



//$user=\App\User::find($user_id);
($user = UserModel::find($user_id));
        ($user);     
        //($user_subscribes=$user->subscribes()->where('subscribe_expired_at','>=',Carbon::now())->first());  //first way
//$user_subscribes=$user::with('subscribes')->get();
       /* dd($relatedProducts = $user::with('subscribes')->whereHas('subscribes', function ($q) use ($user_subscribes) {
           
        })->get());*/
//dd($user_subscribes);
//return !empty($user_subscribes) && ($user_subscribes instanceof Subscribe);  first way 
if(!$user){


    return false;
}
($user_subscribes = $user->CurrentSubscribe()->first());

        //($user_subscribes=$user::with('CurrentSubscribe')->first());                                                    
//dd($user_subscribes);
return !empty($user_subscribes) && ($user_subscribes->subscribe_expired_at->gt(Carbon::now())); 


}


}