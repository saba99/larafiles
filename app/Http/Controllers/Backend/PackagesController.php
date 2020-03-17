<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\Files;

class PackagesController extends Controller
{
   public function index(){

        $packages=Package::all();
      return view('admin.packages.index',compact(['packages']));
   }

   public function create(){
        return view('admin.packages.create');

   }

   public function store(Request $request){

        // dd($request->all());

        $newPackages = Package::create([

            'package_title' => $request->input('package_title'),
            
            'package_price' => $request->input('package_price'),
            

        ]);
        //dd($newPlan);
        if ($newPackages) {

            return redirect()->route('admin.packages.list')->with('success', 'پکیج جدید با موفقیت ثبت شد ');
        }

   }

   public function edit($package_id){

        ($package_id = intval($package_id));

        $packageItem = Package::findOrFail($package_id);


        dd($package_id);

        return view('admin.packages.edit', compact(['packageItem']));
   }

    
    public function syncFiles($package_id){ 

          $package=Package::with('files')->where('id',$package_id)->first();
          
          $files=Files::all();

          $package_item=Package::findOrFail($package_id);

         ($package_files=$package_item->files()->get()->pluck('id')->toArray());
          /*  $files_id=[];
         foreach($package_files as $file){


            ($files_id[]=$file->id);
         }/*/            
           //($files=Files::pluck('id','file_name'));

           

          return view('admin.packages.files',compact(['package','files','package_files']))->with(['panel_title'=>'انتخاب فایل های پکیج ']);
    }

    public function updateSyncFiles(Request $request,$package_id){

               $package_item=Package::findOrFail($package_id);
              
                   
               $files=$request->input('files');
              

                   if($request->has('files')){

                         ($package_item->files()->sync($files));
                  }
                   return redirect()->route('admin.packages.list')->with('success','اطلاعات با موفقیت ذخیره شد ');
               

               /*if($package_item && is_array($files) ){

                    dd($package_item->files()->sync($files));

               }*/
    }

   public function update(Request $request,$package_id){


   }

   public function delete($package_id){


   }
}
