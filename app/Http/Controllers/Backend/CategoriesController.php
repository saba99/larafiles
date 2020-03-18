<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function index(){

$categories=Category::all();
return view('admin.categories.index',compact(['categories']))->with('panel_title','لیست دسته بندی ها');
   }

   public function create(){

    return view('admin.categories.create')->with('panel_title','ایجاد دسته بندی جدید');
   }

   public function store(Request $request){
     

    //dd($request->all());
     $categories=new Category();

     $categories->name=$request->input('name');

     $categories->save(); 

     return redirect()->route('admin.categories.list')->with('success','دسته بندی جدید با موفقیت ایجاد شد ');
   }

   public function edit($id){
    

    $categoryItem=Category::findOrFail($id);
   

    return view('admin.categories.edit',compact(['categoryItem']))->with('panel_title','ویرایش دسته بندی ');
   }  

   public function update(Request $request,$category_id){

     $categoryItem=Category::findOrFail($category_id);

 $updateResult=$categoryItem->update([

        'category_name'=>$request->input('name'),


     ]);
     if($updateResult){

            return redirect()->route('admin.categories.list')->with('success', 'دسته بندی  با موفقیت به روز رسانی شد ');
     }
   }

   public function delete(Request $request,$category_id){
        if ($category_id&& ctype_digit($category_id)) {

            $categoryItem = Category::findOrFail($category_id);

            if ($categoryItem && $categoryItem instanceof Category) {

               
    ($categoryItem->delete());

        return redirect()->route('admin.categories.list')->with('success', 'دسته بندی  با موفقیت حذف شد ');
   }
} 

   } 
   
   public function sample(){

      return view('admin.categories.sample');
   }
}
