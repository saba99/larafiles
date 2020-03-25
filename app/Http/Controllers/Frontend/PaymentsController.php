<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Plan;
use App\Services\Payment\Mellat;
use App\Services\subscribe\Subscribe;
use App\utility\Order;
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

    //dd(time());
    if(!$plan_item){

            //throw new \Exception('این طرح معتبر نمی باشد ');
            return back()->with('message', 'طرح مورد نظر معتبر نمی باشد ');

    }
   
$currentUserID=Auth::id();

    $data=[

        'user_id'=>$currentUserID,
        'order_id'=>Order::generateOrderId($currentUserID),
        'amount'=>$plan_item->plan_price,
    ];

    session(['user_selected_plan'=>$plan_id]);

    $result=$this->mellatGateway->doPayment($data);
    if($result && isset($result['success']) && !$result['success']){

        return back()->with('message','در حال حاضر امکان پرداخت وجود ندارد ');
    }
   }
   public function verify(Request $request){

    if($request->has('ResCode')){

        $resCode=$request->input('ResCode');

        $order_id=$request->input('SaleOrderId');


        $refCode=$request->input('SaleReferenceId');

        
        $params=[

            'ResCode'=>$resCode,
            'SaleOrderId'=>$order_id,
            'SaleReferenceId'=>$refCode

        ];
        $verifyResult=$this->mellatGateway->verifyPayment($params);

        if($verifyResult){

            

            $plan_id=session('user_selected_plan');

            $SubscribeService=new Subscribe();

            $SubscribeService->subscribeUser(Auth::user()->id,$plan_id);
        }
    }


   }
}
