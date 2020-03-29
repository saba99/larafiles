<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PostCreateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Files;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        ($posts=Post::with('category','file')->get());
        return view('admin.posts.index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {   
        $categories=Category::pluck('id','name');
        return view('admin.posts.create',compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        // dd($request->all());

        $post = new Post();
        //dd($post->slug = Str::slug($request->input('title')));

        //dd($post->slug = make_slug($request->input('title')));


        if ($file = $request->file('file')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Files();
            $photo->name = $file->getClientOriginalName();
            $photo->file_name = $name;
            $photo->user_id = Auth::id();
            $photo->save();
          
            $post->file_id = $photo->id;
        }


        $post->title = $request->input('title');

        if ($request->input('slug')) {

            //$post->slug=Str::slug($request->input('slug'));
            $post->slug = make_slug($request->input('slug'));
        } else {
            //$post->slug = Str::slug($request->input('title'));

            $post->slug = make_slug($request->input('title'));
        }



        $post->description = $request->input('description');
        //$post->category_id = $request->input('category');
        $post->user_id = Auth::id();
        $post->meta_description = $request->input('meta_description');
        $post->meta_keywords = $request->input('meta_keywords');
        $post->status = $request->input('status');
        $post->save();
        Session::flash('add_post', 'مطلب جدید با موفقیت اضافه شد');
        return redirect('/administrator/posts');
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postItem = Post::findOrFail($id);
       // $categories = Category::pluck('title', 'id');

        return view('admin.posts.edit', compact(['postItem']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);


        if ($file = $request->file('file')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Files();
            $photo->name = $file->getClientOriginalName();
            $photo->file_name = $name;
            $input['user_id'] = $photo->id;
            $photo->user_id = Auth::id();
            $photo->save();

            $post->photo_id = $photo->id;
        }

        $post->title = $request->input('title');

        if ($request->input('slug')) {

            
            $post->slug = make_slug($request->input('slug'));
        } else {
           
            $post->slug = make_slug($request->input('title'));
        }



        $post->description = $request->input('description');
        $post->user_id = Auth::id();
        //dd($post->category->id);
        $post->meta_description = $request->input('meta_description');
        
        $post->meta_keywords = $request->input('meta_keywords');
        $post->status = $request->input('status');
        $post->save();
        Session::flash('update_post', 'مطلب جدید با موفقیت به روز رسانی شد');
        return redirect('/administrator/posts');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $photo = Files::findOrFail($post->photo_id);
        // unlink(public_path() .$user->photo->path);
        $post->file()->delete();

        $photo->delete();

        Session::flash('delete_post', ' پست با موفقیت حذف شد');

        return redirect('/admin/posts');

    }
}
