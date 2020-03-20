<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Files;
use Illuminate\Http\Request;
use App\Models\Package;
use App\utility\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Contracts\Routing\ResponseFactory;
class FilesController extends Controller
{
    public function details(Request $request,int $file_id){

     $file_item=Files::findOrFail($file_id);
        //dd($file_item);
        /*($package_file = Package::with('files')->get());
        dd($package_file);*/
        $current_user = Auth::user()->id;
     return view('frontend.files.single',compact(['file_item','package_file', 'current_user']));

    } 

    public function download(Request $request,$file_id){
      

         $user=Auth::user()->id;
         /*if(!User::is_user_subscribed($user)){

            // abort(404);
            return redirect('frontend.files.access');
         }*/ 
         if(!\App\utility\File::user_can_download($user)){

            return redirect('frontend.files.access');



         }
         

      $file_item=Files::findOrFail($file_id);

      if(!$file_item){


        return redirect()->back()->with('FileErr','فایل درخواستی معتبر نمی باشد ');
      } 


    
          
    ($basePath = storage_path('app/public/'));

  ($filePath=$basePath.$file_item->file_name);

        return response()->download($filePath);
    }  

    public function access(){

        return view('frontend.files.access');
    }
}
