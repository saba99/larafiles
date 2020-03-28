<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded=[];

    /*protected $fillable = [
        'image', 'path', 'description','price','image','type','title'
    ];*/

    protected  $uploads = '/upload/images/';


    public function  getImageAttributes($image)
    {

        return $this->uploads . $image;
    }
}
