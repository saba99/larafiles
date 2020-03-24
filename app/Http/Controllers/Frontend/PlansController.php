<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function index()
    {

        $plans = Plan::all();

        return view('frontend.plans.plans', compact(['plans']));
        //return view('frontend.plans.index', compact(['plans']));
    } 
}
