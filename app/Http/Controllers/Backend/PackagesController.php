<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\Files;
use App\Models\Category;
use App\Http\Requests\Backend\PackageRequest;
class PackagesController extends Controller
{
   public function index(){

        $packages=Package::all();
      return view('admin.packages.index',compact(['packages']));
   }

   public function create(){ 

     $categories=Category::all();
        return view('admin.packages.create',compact(['categories']));


   }

   public function store(PackageRequest $request){

          //dd($request->has('categories'));
          //dd($request->input('files'));
    

        $newPackages = Package::create([

            'package_title' => $request->input('package_title'),
            
            'package_price' => $request->input('package_price'),

              'package_description'=> $request->input('package_description')
            

        ]);
        //dd($newPlan);
          //dd($newPackages->categories()->get());
      
          
          if($request->has('categories')){


               $newPackages->categories()->sync($request->input('categories'));
          }
            return redirect()->route('admin.packages.list')->with('success', 'پکیج جدید با موفقیت ثبت شد ');
        }

   

   public function edit($package_id){

        ($package_id = intval($package_id));

        $packageItem = Package::findOrFail($package_id);


        //dd($package_id);
        $categories=Category::all();
        $package_categories=Package::with('categories')->get()->pluck('id')->toArray();

        

        return view('admin.packages.edit', compact(['packageItem','categories',' package_categories']));
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
                   return redirect()->route('admin.packages.list')->with('success','پکیج با موفقیت ذخیره شد  ');
               

               /*if($package_item && is_array($files) ){

                    dd($package_item->files()->sync($files));

               }*/
    }

   public function update(Request $request,$package_id){

          //dd($request->all());
      $package_item=Package::find($package_id);
      if($package_item){
       

          $package_item->update([


               'package_title'=>$request->input('package_title'),
               'package_price'=>$request->input('package_price'),
                    'package_description' => $request->input('package_description')
           ]); 

     if($request->has('categories')){

           $package_item->categories()->sync($request->input('categories'));

     }
               return redirect()->route('admin.packages.list')->with('success', 'پکیج با موفقیت به روز رسانی شد  ');
      }

   }

   public function delete($package_id){


   }
}
