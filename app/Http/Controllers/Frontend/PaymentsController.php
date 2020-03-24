<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Plan;
use App\Services\Payment\Mellat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{   
  

    private $mellatGateway;

  public function __construct()
  {
      $this->mellatGateway=new Mellat();
  }

   public function redirect(Request $request,$plan_id){
     
    $plan_item=Plan::findOrFail($plan_id);

    //dd($plan_item);

    $data=[

        'user_id'=>Auth::id(),
        'order_id'=>0,
        'amount'=>0
    ];

    $this->mellatGateway->doPayment($data);
   }
   public function verify(Request $request){


   }
}
