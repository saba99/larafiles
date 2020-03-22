<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\User;
class Subscribe extends Model
{   

protected $fillable=['user_id', 'plan_id', 'subscribe_limit_download_count', 'subscribe_limit_download', 'subscribe_id_payment_amount', 'subscribe_expired_at'];    

protected $dates=['subscribe_expired_at'];

public function user(){

return $this->belongsTo(User::class);

}
    public function plan()
    {

        return $this->belongsTo(Plan::class);
    }

}
