<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index(){


       // $comments=Comment::orderBy('created_at','desc')->paginate(2);
        ($comments=Comment::with('package','file')->get());

        return view('admin.comments.index',compact(['comments']));  



    } 

    public function actions(Request $request,$id){

        if ($request->has('action')) {

            if ($request->input('action') == 'approved') {

                $comment = Comment::findOrFail($id);
                $comment->status = 1;
                $comment->save();


                Session::flash('approved_comment', 'نظر کاربر تایید شد ');
            } else {

                $comment = Comment::findOrFail($id);
                $comment->status = 0;
                $comment->save();
                Session::flash('rejected_comment', 'نظر کاربر رد شد ');
            }
        }
        return redirect('/administrator/comments');
       

    }  

    public function edit($id){

        $commentItem = Comment::findOrFail($id);
        

        return view('admin.comments.edit', compact(['commentItem']));


    }
    public function update(Request $request, $id)
    {


        $commentItem = Comment::findOrFail($id);

        //$commentItem->title= $request->input('title');
        $commentItem->description = $request->input('description');
         
        $commentItem->save();

        Session::flash('update_comment', 'نظر با موفقیت به روز رسانی شد ');
        return redirect('/administrator/comments');
    }


    public function destroy($id)
    {

        $comment = Comment::findOrFail($id);

        $comment->delete();

        Session::flash('delete_comment', ' نظر با موفقیت حذف شد');

        return redirect('/administrator/comments');
    }
}
