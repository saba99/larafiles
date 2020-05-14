<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use  App\Traits\timeTrait;

class Orderable extends Model
{  

    use timeTrait;

    public function scopeNewOrders($query){


        return $query->where('created_at','>',$this->last3Months());
    }
   public function topTenSeller($type){


   $orderableFile=Orderable::NewOrders()->where('orderable_type','App\Models\\'.$type)->get();

    $neworderableFile= $orderableFile->groupBy('orderable_id');
    
    //dd($neworderableFile);
    $key = array();
    $value = array();

    foreach ($neworderableFile as $orderable_id => $order) {
        $key[] =  $orderable_id;
        $value[] = $order->count(); 
     }

     $newOrders = array_combine($key, $value);

     arsort($newOrders, 1);   


     $topTen = array_slice($newOrders, 0, 10, true);   
     $topsoldId = array_keys($topTen);  

     return $topsoldId;





   }
}
