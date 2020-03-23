<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Files;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $latestFiles=Files::orderby('created_at', 'desc')->get();
                 
        ($file  = Files::pluck('file_name', 'id')->first());

        return view('frontend.home.index',compact(['files','packages', 'latestFiles', 'package_file', 'package_user', 'latestPackages']));
    }

    public function details(Request $request, $package_id)
    {

        ($package_item = Package::findOrFail($package_id));

        ($packageFiles = $package_item->files()->get());

        ($current_user = Auth::user()->id);

       

        //$current_user=5;

        return view('frontend.home.index', compact(['package_item', 'current_user', 'packageFiles', ]));
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $files=Files::take(10)->get();
       // dd($files);

        $packages=Package::take(10)->get();

        $categories=Category::get();

        ($package_file=Package::with('files')->get()->pluck('id')->toArray());

        $popularFiles=Files::popular()->get();
        session(['last_activity' => Carbon::now()]);

        
        
        

        session(['last_activity'=>now()]);
        return view('frontend.home.homepage',compact(['files','packages', 'package_file', 'categories', 'popularFiles']));
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
