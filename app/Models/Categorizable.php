<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Categorizable extends Model
{  

    public function scopeSearchFile($query,$category_id){

      //return    $query->where('categorizable_type', 'App\Models\Files')->where('category_id','=',$category_id)->get();
    

    DB::table('users')
      ->join('contacts', function ($join) {
        $join->on('users.id', '=', 'contacts.user_id')
          ->where('contacts.user_id', '>', 5);
      })
      ->get();
        
    }

    public  static function SearchFile($category_id,$q){
    return    DB::table('categorizables')->where('categorizable_type', 'App\Models\Files')->join('files', function ($join) use ($q,$category_id) {

    
      $join->on('files.id', '=', 'categorizables.categorizable_id')->where('categorizables.category_id', '=', $category_id)
      ->where('file_title','=',$q);
    })->get();
   


    }
   
}
