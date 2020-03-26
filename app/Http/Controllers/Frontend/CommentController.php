<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{    

    public function index(){
        

        dd($comments=Comment::all());

        return view('frontend.packages.index',compact(['comments']));
       
    }
   
    public function store(Request $request,$package_id){

     ($package=Package::findOrFail($package_id));
     if($package){
         $comment=new Comment();

       $comment->description = $request->input('description');
        $comment->package_id = $package_id;
           // $comment->package_id = $package->id;
        $comment->status=0;
       $comment->save(); 
     }
      
        Session::flash('add_comment','نظر شما با موفقیت ثبت شد ');

        return back();

    }
    public function reply(Request $request,$packageId)
    {
         ($packageId=$request->input('package_id'));
         ($parentId= $request->input('parent_id'));
        //($package = Package::findOrFail($packageId));
        //if ($package) {
            $comment = new Comment();

            $comment->description = $request->input('description');
            $comment->package_id = $packageId;
            $comment->parent_id = $parentId;
            $comment->status = 0;
            $comment->save();
        //}

        Session::flash('add_comment', 'نظر شما با موفقیت ثبت شد ');

        return view('frontend.packages.index',compact(['packageId']));
    }
}
