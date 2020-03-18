<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;

class Category extends Model
{
    protected $table='categories';


    //protected  $primaryKey='category_id';
      

   // protected $guarded=['category_id'];
     
    
    
    public function packages(){

        return $this->morphedByMany(Package::class,'categorizable');
    }

    public function files()
    {


        return $this->morphedByMany(Files::class, 'categorizable');
    }


}
