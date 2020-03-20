<?php 

namespace App\utility;

use App\User;

class File{


public static function user_can_download($user_id){


if(!\App\utility\User::is_user_subscribed($user_id)){


    return false;
}
$userItem=User::findOrFail($user_id);

$userSubscribe=$userItem->currentSubscribe()->first();

if(!$userSubscribe){

return false;

}
if($userSubscribe->subscribe_limit_download==$userSubscribe->subscribe_limit_download_count){

return false;
}

return true;
}


}

