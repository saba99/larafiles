<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Files;
use Illuminate\Http\Request;
use App\Models\Package;

class FilesController extends Controller
{
    public function details(Request $request,int $file_id){

     $file_item=Files::findOrFail($file_id);
        //dd($file_item);
        /*($package_file = Package::with('files')->get());
        dd($package_file);*/
        $current_user = 2;
     return view('frontend.files.single',compact(['file_item','package_file', 'current_user']));

    } 

    public function download(Request $request,$file_id){

     

    }
}
