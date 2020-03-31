<?php

namespace App\Models;

use App\User;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  

    protected $fillable=['file_id','photo_id'];
    public function file(){

 return $this->belongsTo(Files::class);

    }
    public function photo()
    {

        return $this->belongsTo(Photo::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

   public function comments(){
        

        return $this->belongsTo(Comment::class);

    }
}
