<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PlanRequest;
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

    public function store(PlanRequest $request){

         //dd($request->all());

        $newPlan= Plan::create([

             'plan_title'=>$request->input('plan_title'),
            'plan_limit_download_count' => $request->input('plan_limit_download_count'),
            'plan_price' => $request->input('plan_price'),
            'plans_days_count' => $request->input('plans_days_count'),

         ]);
         //dd($newPlan);
         if($newPlan){

            return redirect()->route('admin.plans.list')->with('success','طرح جدید با موفقیت ثبت گردید');
         }
         
    }

    public function edit($plan_id){
         
       ($plan_id=intval($plan_id)) ;

        $planItem=Plan::findOrFail($plan_id);


        //dd($plan_item);

        return view('admin.plans.edit',compact(['planItem']));
    }

    public function update(PlanRequest $request,$plan_id){

       

        $plan_id=intval($plan_id);

        $planItem=Plan::findOrFail($plan_id);

        $planItem->plan_title=$request->input('plan_title');


        ($planItem->plan_limit_download_count=$request->input('plan_limit_download_count'));

        $planItem->plan_price=$request->input('plan_price');

        $planItem->plans_days_count=$request->input('plans_days_count');


        $planItem->save();

        return redirect()->route('admin.plans.list')->with('success','طرح مورد نظر با موفقیت به روز رسانی شد ');



    }


    public function delete($plan_id){


       $plan_id=intval($plan_id);

       $planItem=Plan::find($plan_id);

       if($planItem){

        $planItem->delete();

        return redirect()->route('admin.plans.list')->with('success', 'طرح مورد نظر با موفقیت حذف شد ');
       }
    }
}
