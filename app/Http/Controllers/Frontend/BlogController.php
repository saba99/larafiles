<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Package;
use Illuminate\Http\Request;

use App\Models\Post;
 


class BlogController extends Controller
{
    public function index(){

         ($posts=Post::with('user','photo','category')->get());

        ($newPosts = Post::with('user', 'photo', 'category')->orderBy('created_at','desc')->get());

          $category=Category::all();

        return view('frontend.weblog.index',compact(['posts','category', 'newPosts']));
    }

    public function single($slug){

        ($posts = Post::with('user', 'photo', 'category')->where('slug',$slug)->first());

        $newPosts = Post::with('user', 'photo', 'category')->orderBy('created_at','desc')->get();

        $category = Category::all();

        ($comments=Comment::with('user')->get());

        return view('frontend.weblog.single',compact(['posts','category','newPosts','comments']));
    }

    public function searchTitle($query){
  

       ($posts=Post::with('user','category','photo')->where('title','like',"%".$query."%")->get());

       

        $category = Category::all();

        return view('frontend.weblog.single', compact(['posts', 'category', 'newPosts', 'comments','query']));

    }

    public function postComment(Request $request, $packageId){


        $newComment= new Comment();

        //$package=Package::findOrFail($id);

        $newComment->description=$request->input('description');

        $newComment->package_id=$packageId;

        $newComment->save();

        return back();
    }
}
