<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
   public function addToCart(Request $request,$id){

        // $package=Package::findOrFail($id);
       ($package = Package::with('files')->whereId($id)->first());

     //dd($package->files[0]->file_name);

     $oldCart=Session::has('cart')? Session::get('cart'):null ;

     $cart=new Cart($oldCart); 

     $cart->add($package,$package->id);


     $request->session()->put('cart',$cart);

     
    ($request->session()->get('cart'));

     //dd($items['item']['package_price']);
    // return redirect()->to('/');

     return back();

     return view('frontend.partials.header',compact(['package']));

   }
}
