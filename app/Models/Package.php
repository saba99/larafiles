<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Files;

class Package extends Model
{   
    protected $fillable=['package_title','package_price'];

    

    public function files(){


        return $this->belongsToMany(Files::class,'file_package','package_id','files_id');
    }
}
