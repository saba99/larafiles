<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\UserSubscribed;
use App\Models\Plan;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\queue;

class SubscribesController extends Controller
{
    
public function index(Request $request,$plan_id){


  
($plan=Plan::findOrFail($plan_id));

        //dd($subscribe=Subscribe::with('plans')->whereId($plan_id)->get());


        return view('frontend.subscribes.cart', compact(['plan']));
//return view('frontend.subscribes.index',compact(['plan']));

} 

public function register(Request $request,$plan_id){


//dd($plan_id);

$plan=Plan::findOrFail($plan_id);

//dd($plan);
if(!$plan){

return redirect()->back()->with('planErr','طرح مورد نظر شما معتبر نمی باشد ');
}
$plans_days_count=$plan->plans_days_count;
$expired_at=Carbon::now();

$expired_at->addDays($plans_days_count);

//($user=Auth::user()->id);
$user=3;
$subscribeData=[

//'user_id'=>$user->id,
//'user_id'=> Auth::user()->id,
'user_id'=>$user,
'plan_id'=>$plan_id,
'subscribe_limit_download'=>$plan->plan_limit_download_count,
'created_at'=>Carbon::now(),
'subscribe_expired_at'=>$expired_at->format('Y-m-d H:i:s')

];

$subscribe=Subscribe::create($subscribeData);

//dd($email= Mail::to($user)->queue(new UserSubscribed($subscribe)));
      


//Mail::to($user)->later(Carbon::now()->addMinutes(10),new UserSubscribed($subscribe));



}


}
