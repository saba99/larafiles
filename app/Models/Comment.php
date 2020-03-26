<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Files;

use App\Models\Package;

class Comment extends Model
{  
    protected $guarded=[];
    protected $fillable=['description','package_id','file_id'];

    public function file(){


        return $this->belongsTo(Files::class);
    }

    public function package(){

        return $this->belongsTo(Package::class);

    }  
    public function replies(){

        return $this->hasMany(Comment::class,'parent_id');
    }
}
