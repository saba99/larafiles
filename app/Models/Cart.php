<?php

namespace App\Models;



class Cart 
{
    public $items=null;

    public $totalQty=0;

    public $totalPrice=0;

    public $totalPurePrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){

           $this->items=$oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPurePrice=$oldCart->totalPurePrice;

        }
    } 

    public function add($item,$id){

       $storedItem=['qty'=>0,'price'=>$item->price,'item'=>$item];

       if($this->items){

        if(array_key_exists($id,$this->items)){


          $storedItem=$this->items['id'];
        
        }
       }
       $storedItem['qty']++;

       $storedItem['price']=$item->price * $storedItem['qty'];

       $this->items[$id]=$storedItem;

       $this->totalQty ++;

       $this->totalPrice+=$item->price;


       $this->totalPurePrice+=$item->price;


    }  

    public function remove($item,$id){

    if($this->items){

            if (array_key_exists($id, $this->items)) {

            $this->items[$id]['price'] -=$item->price;
          $this->totalPrice  -=$item->price;

            $this->totalQty--;
           

            $this->totalPurePrice  -= $item->price;

            if($this->items[$id]['qty'] >1){

                    $this->items[$id]['qty']--;

            }else{

                unset($this->items[$id]);
            }
 }
    }

    }

}
