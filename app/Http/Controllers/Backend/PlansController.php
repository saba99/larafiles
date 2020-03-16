<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Plan;

class PlansController extends Controller
{
    public function index(){
       

        $plans=Plan::all();
      return view('admin.plans.index',compact(['plans']))->with(['panel_title'=>'لیست طرح ها']);
    }

    public function create(){

      return view('admin.plans.create')->with(['panel_title'=>'ایجاد طرح جدید ']);
    }

    public function store(Request $request){

         dd($request()->all());
    }

    public function edit(){


    }

    public function update(){


    }


    public function delete(){



    }
}
