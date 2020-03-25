<?php  



namespace App\Services\subscribe;

use App\Mail\UserSubscribed;
use App\Models\Plan;
use App\User;
use Carbon\Carbon;


class  Subscribe{



    public function subscribeUser(int $user_id, int $plan_id)
    {
        $plan = Plan::find($plan_id);
        $user = User::find($user_id);
        if (!$plan) {
            throw new \Exception('invalid plan item.');
        }
        $plan_days_count = $plan->plan_days_count;
        $expired_at      = Carbon::now();
        $expired_at->addDay($plan_days_count);
        $subscribeData = [
            'user_id'        => $user_id,
            'plan_id'        => $plan_id,
            'subscribe_limit_download' => $plan->plan_limit_download_count,
            'created_at'     => Carbon::now(),
            'subscribe_expired_at'     => $expired_at->format('Y-m-d H:i:s')
        ];
        $subscribe = Subscribe::create($subscribeData);
       // Mail::to($user)->later(Carbon::now()->addMinutes(15), new UserSubscribed($subscribe));
    }

    public function unsubscribeUser(int $user_id, int $plan_id)
    {
    }




}