<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Files;
use App\Models\Package;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index(){
    
      $category=Category::all();
      $packages=Package::all();

      ($category_packages=Category::with('packages')->get());
      ($category_packages[0]->packages[0]->package_price);
      

    return view('frontend.categories.index',compact(['category','packages', 'category_packages']));

    }
    public function item(Request $request,$category_id){

       ($categoryItem=Category::findOrFail($category_id));

    //dd($categoryFiles=$categoryItem->files()->get());


    ($categoryPackages = $categoryItem->packages()->get());

      //return view('frontend.categories.item',compact(['categoryItem', 'categoryFiles', 'categoryPackages']));

    return view('frontend.categories.item',compact(['categoryItem', 'categoryFiles', 'categoryPackages']));
    }


  public function getFilesByCategory($id, $page = 5)
  {

    ($category=Category::with('packages.files')->where('id',$id)->first());
    
    ($categoryPackages= $category->packages()->get());

    
    ($products = Files::with('packages')->whereHas('categories', function ($q) use ($category) {
      $q->where('id', $category->id);
    })->get());
    ($product = Files::with('categories')->whereHas('categories', function ($q) use ($category) {
      $q->where('id', $category->id);
    })->get());


    //dd($category->name);
    return view('frontend.categories.cat-packages', compact(['category', 'products', 'categories', 'categoryPackages']));
  }
}
