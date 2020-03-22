<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Files;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PackagesController extends Controller
{
    public function details(Request $request,$package_id){

        ($package_item = Package::findOrFail($package_id));

        ($packageFiles = $package_item->files()->get()); 

       ($current_user = Auth::user()->id);

       //$current_user=5;
       
        return view('frontend.packages.index', compact([ 'package_item', 'current_user', 'packageFiles']));
    }  

    public  function singlePackage(Request $request, $package_id){

        ($package_item = Package::findOrFail($package_id));

        ($packageFiles=$package_item->files()->get()); 

        return view('frontend.packages.single', compact(['package_item', 'packageFiles']));
    } 


    public function download(Request $request, $file_id)
    {


        $user = Auth::user()->id;
       
        /*if(!User::is_user_subscribed($user)){

            // abort(404);
            return redirect('frontend.files.access');
         }*/
        if (!\App\utility\File::user_can_download($user)) {

            return redirect('frontend.files.access');
        }


        ($file_item = Files::findOrFail($file_id));

        if (!$file_item) {


            return redirect()->back()->with('FileErr', 'فایل درخواستی معتبر نمی باشد ');
        }




        ($basePath = storage_path('app/public/'));

        ($filePath = $basePath . $file_item->file_name);

        return response()->download($filePath);
    }

    public function access()
    {

        return view('frontend.files.access');
    } 

    public function report(Request $request)
    {

        ($file_id = ($request->input('file_id')));


        if ($file_id && intval($file_id) > 0) {


            $package_item = Files::findOrFail($file_id);

            $package_item->increment('file_report_count');


            return [

                'success' => true,
                'message' => 'درخواست شما با موفقیت ثبت گردید '
            ];
        }

        return [

            'success' => false,
            'message' => 'درخواست شما معتبر نمی باشد  '
        ];
    }
}
