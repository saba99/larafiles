<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Files;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Files::all();
        // dd($files);

        $packages = Package::all();

        ($package_user=Package::with('users')->get()->toArray());
                     
              
        ($package_file = Package::with('files')->get()->pluck('id')->toArray());

       ($latestPackages = Package::orderby('created_at', 'desc')->get());
                 
        ($file  = Files::pluck('file_name', 'id')->first());

        return view('frontend.home.index',compact(['files','packages', 'package_file', 'package_user', 'latestPackages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $files=Files::all();
       // dd($files);

        $packages=Package::all();
        ($package_file=Package::with('files')->get()->pluck('id')->toArray());
        
        return view('frontend.home.homepage',compact(['files','packages', 'package_file']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
