<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function index()
    {


     ($orders = Order::with('packages')->paginate(10));

        return view('frontend.invoices.all', compact(['orders']));
    }

    public function invoice($id)
    {

         
        ($order = Order::with('user.addresses.city', 'user.addresses.province', 'packages', 'files')->whereId($id)->first());
        return view('frontend.invoices.index',compact(['order']));
    }

}
