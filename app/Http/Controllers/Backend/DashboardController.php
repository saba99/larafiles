<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FileDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
         
        $results=DB::table('file_downloads')->select(DB::raw('sum(download_count) as total_download,DATE(created_at) as date'))->groupBy(DB::raw('Date(created_at) '))->get();
        
        $download_statistics=[];
        foreach($results as $item){

        
            $download_statistics[$item->date]=$item->total_download;

        } 
        

        $panel_title='داشبورد مدیریت';
        //return view('admin.dashboard.index',compact(['panel_title','results', 'download_statistics']));
      return view('admin.dashboard.chart' , compact(['panel_title', 'results', 'download_statistics']));

    }
}
