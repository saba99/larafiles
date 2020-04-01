<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;

use App\Models\Post;
class Category extends Model
{
    protected $table='categories';

      protected $fillable=['name'];
    //protected  $primaryKey='category_id';
      

   // protected $guarded=['category_id'];
     
    
    
    public function packages(){

        return $this->morphedByMany(Package::class,'categorizable');
    }

    public function files()
    {


        return $this->morphedByMany(Files::class, 'categorizable');
    }
PUBLIC FUNCTION posts(){

return $this->hasMany(Post::class);

}

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
