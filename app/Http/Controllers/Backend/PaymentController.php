<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(){

       

        $payments=Payment::all();
        return view('admin.payments.index',compact(['payments']))->with('panel_title','لیست پرداخت ها');


    }

   

    public function store(){


    }


    public  function delete(){


    }
}
