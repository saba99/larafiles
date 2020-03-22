<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         

        $panel_title='داشبورد مدیریت';
        return view('admin.dashboard.index',compact(['panel_title']));
       // return view('admin.dashboard.chart');

    }
}
