<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\Models\Package;

use App\Traits\Categorizable; 

class Files extends Model
{   
    
     

    protected  $fillable = ['file_title', 'file_name', 'file_description', 'file_type', 'file_size'];

      


    public function packages(){


        return $this->belongsToMany(Package::class, 'file_package','files_id','package_id');
    }

    public function categories()
    {


        return $this->morphToMany(Category::class, 'categorizable');
    }
}
