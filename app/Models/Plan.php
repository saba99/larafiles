<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable=['plan_title', 'plan_limit_download_count', 'plan_price', 'plans_days_count'];


    public function subscribes(){


        return $this->hasMany(Subscribe::class);
    }
}
