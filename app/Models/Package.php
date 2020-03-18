<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Files;
use App\User; 

use App\Models\Category;
class Package extends Model
{   
    protected $fillable=['package_title','package_price'];



    public function files(){


        return $this->belongsToMany(Files::class,'file_package','package_id','files_id');
    } 


    public function users(){


        return $this->belongsToMany(User::class,'user_packages')->withPivot(['amount']);
    }  


    public function categories(){


        return $this->morphToMany(Category::class,'categorizable');
    }
}
