<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Package;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public function verify(Request $request){

        $package = Package::with('files')->first();
        ($Cart = Session::has('cart') ? Session::get('cart') : null);

        $cart = new Cart($Cart);

        ($request->session()->put('cart', $cart));

        $cart->add($package, null);

        if(!$cart){

            Session::flash('warning', 'سبد خرید شما خالی است');
            return redirect('/');
        }

      
        //dd($cart);
        $packageId=[];
      /// dd($package['item']['id']); 
        foreach($cart->items as $item){

         // array_push($packageId,$package['item']->id);
         
            // yess dd ($item['qty']);
            // yess dd(($item['item']['package_price']));
            //yess dd($item['item']['id']);
         //$packageId[$package['item']->id]=['qty'=>$package['qty']];
            ($packageId[$item['item']['id']] = ['qty' => $item['qty']]);

        } 
       //dd($cart->items,$packageId);

        $order=new Order();

        $order->amount= ($item['item']['package_price']);

        $order->user_id=Auth::user()->id;

        $order->status=0;

        $order->save();

        $order->packages()->sync($packageId);


        //ZARINN PAL 
        $payment = new Payment($item['item']['package_price'],$order->id);

        $result = $payment->doPayment();


        if ($result->Status == 100) {

            return redirect()->to('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
        } else {
            echo 'ERR: ' . $result->Status;
        }



    }
}
