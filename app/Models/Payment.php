<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
      const ONLINE=1;
      const WALLET=2; 

      const COMPLETE=1;
      const INCOMPLETE=2;

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function payment_method_format(){

      switch($this->attributes['payment_method']){


        case self::ONLINE:
          
         return 'آنلاین';   
        break;

        case self::WALLET:
          
        return 'کیف پول';

        break;

      }

    }
    public function status_format(){


        switch($this->attributes['payment_status']){


            case self::COMPLETE:  
                
                return 'پرداخت شده';

            break; 

            case self::INCOMPLETE: 
                return 'پرداخت نشده';

            break;

    }
} 

}
