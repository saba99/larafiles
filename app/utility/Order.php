<?php  


namespace App\utility;

class Order{


public static function generateOrderId($addition=null){

        if ($addition) {
            return time() . $addition;
        }
        return time();
    }

}
