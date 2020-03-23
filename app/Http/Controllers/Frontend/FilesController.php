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
     //return view('frontend.files.single',compact(['file_item','package_file', 'current_user']));
      return view('frontend.files.index', compact(['file_item', 'package_file', 'current_user']));

    }
   public function single(Request $request, int $file_id)
   {

      $file_item = Files::findOrFail($file_id);
      //dd($file_item);
      /*($package_file = Package::with('files')->get());
        dd($package_file);*/
      $current_user = Auth::user()->id;
      //dd($current_user);
      return view('frontend.files.single',compact(['file_item','package_file', 'current_user']));
      
   }
    public function download(Request $request,$file_id){
      

         $current_user=Auth::user();
         /*if(!User::is_user_subscribed($user)){

            // abort(404);
            return redirect('frontend.files.access');
         }*/ 
         if(!\App\utility\File::user_can_download($current_user->id)){

            return redirect('frontend.files.access');



         }
         

      $file_item=Files::findOrFail($file_id);

      if(!$file_item){


        return redirect()->back()->with('FileErr','فایل درخواستی معتبر نمی باشد ');
      } 


    
          
    ($basePath = storage_path('app/public/'));

  ($filePath=$basePath.$file_item->file_name);

  $current_user->CurrentSubscribe()->increment('subscribe_limit_download_count');

  $file_item->increment('file_download_count');

  $file_item->updateDownloadCounts();

        return response()->download($filePath);
    }  

    public function access(){

        return view('frontend.files.access');
    } 

    public function report(Request $request){

  //$request->session()->get('last_activity');

      $file_id=($request->input('file_id'));


      if($file_id && intval($file_id)>0){

          
        $fileItem=Files::findOrFail($file_id);

        $fileItem->increment('file_report_count');


        return [

           'success'=>true,
           'message'=>'درخواست شما با موفقیت ثبت گردید '
        ];
     


      }

      return [

         'success' => false,
         'message' => 'درخواست شما معتبر نمی باشد  '
      ];

    }

    public function allFiles(){ 

      $files=Files::paginate(5);
      

      return view('frontend.files.all-files',compact(['files']));
    }
   public function popular()
   {

      $popularFiles = Files::popular()->get();

      return view('frontend.files.popular',compact(['popularFiles']));
   }
}
