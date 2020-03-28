<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index(){


        //$orders=Order::paginate(10);

        return view('admin.orders.index',compact(['orders']));
    }

     

    public function getOrderLists($id){
     

        ($orders=Order::with('user.addresses.city', 'user.addresses.province','packages','files')->whereId($id)->first());

              dd($orders);
        return view('admin.orders.lists',compact(['order']));

    }
}
