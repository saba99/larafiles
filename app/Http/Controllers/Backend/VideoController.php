<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::all();
        return view('admin.videos.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|max:250',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,bmp',
            'path' => 'required|mimes:avi,mp4,.mov,wmv',
            'price' => 'required',
        ]);

        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $imageUrl = $this->uploadImage($file);
        }
        $file1 = $request->file('path');
        if ($request->hasFile('path')) {
            $sourceUrl = $this->uploadSource($file1);
        }
        $video = Video::create(array_merge($request->all(), ['image' => $imageUrl], ['path' => $sourceUrl]));
        
        return redirect('admin/video/create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function uploadImage($file)
    {
        $imagePath = "\upload\images";
        $filename = time() . '.' . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath), $filename);
        return $filename;
    }

    private function uploadSource($file1)
    {

        $sourcePath = "\upload\sources";
        $filename1 =  time() . '.' . $file1->getClientOriginalName();
        $file1 = $file1->move(public_path($sourcePath), $filename1);
        return $filename1;
    }
}
