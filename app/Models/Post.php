<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  

    protected $fillable=['file_id'];
    public function file(){

 return $this->belongsTo(Files::class);

    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
