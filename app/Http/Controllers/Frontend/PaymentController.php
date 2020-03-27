<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Package;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
    public function verify(Request $request,$id){

        $package = Package::with('files')->first();
        ($Cart = Session::has('cart') ? Session::get('cart') : null);

        $cart = new Cart($Cart);

        ($request->session()->put('cart', $cart));

        $cart->add($package, null);

        foreach ($cart->items as $item) {
;
            ($packageId[$item['item']['id']] = ['qty' => $item['qty']]);
        } 

       $payment=new Payment($item['item']['package_price']);

       $result=($payment->verifyPayment($request->Authority,$request->Status));

     //dd($result);
      
     if($result){
           

        $order=Order::findOrFail($id);

        $order->status=1;

        $order->save();

            $newPayment = new Payment($item['item']['package_price']);

            $newPayment->authority=$request->Authority;

            $newPayment->status=$request->Status;

            $newPayment->RefId= $result->RefID;

            $newPayment->order_id=$id;

            $newPayment->save();
            Session::flash('success', ' پرداخت شما با موفقیت انجام شد  ');

            return redirect('/');

     }
     else{

        Session::flash('warning',' در پرداخت شما خطایی به وجود آمده است لطفا مجددا تلاش کنید ');

        return redirect('/');
     }

    }
}
