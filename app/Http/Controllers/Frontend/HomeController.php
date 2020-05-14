<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorizable;
use App\Models\Category;
use App\Models\Comment;
use App\Models\FilePackage;
use App\Models\Files;
use App\Models\Order;
use App\Models\OrderPackage;
use App\Models\Package;
use App\Models\View;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

   $Comments = Comment::with('package')->get();
       
        $categories=Category::all();
       ($package_user=Package::with('users')->get()->toArray());
                     
            ($popularFilesId=View::MostViewedFiles()->pluck('viewable_id'));

      ($popularFiles = Files::findMany($popularFilesId));

       ($package_file = Package::with('files')->get()->pluck('id')->toArray());
        

      ($latestPackages = Package::orderby('created_at', 'desc')->get());
        $latestFiles=Files::orderby('created_at', 'desc')->get();

       $topSellers_orders=OrderPackage::groupBy('package_id')->select("package_id",DB::raw(
          
            "count(*) as total"
        ))->orderBy('total','desc')->get()->pluck('package_id')->toArray();

        $topSellers=Package::whereIn('id',$topSellers_orders)->get();

           //dd($topSellers);
           //$popularFiles=FilePackage::orderBy('file_');
          $popularFiles_id=Files::orderBy('file_download_count')->pluck('id')->toArray();

         // dd($popularFiles_id);

          $popularPackageFiles=FilePackage::whereIn('files_id',$popularFiles_id)->pluck('package_id')->toArray();

         // dd($popularFiles);

        $popularPackages = Package::whereIn('id', $popularPackageFiles)->get();

        //dd($popularPackages);
              
       //($file  = Files::pluck('file_name', 'id')->first());

       return view('frontend.home.index',compact(['files', 'topSellers','packages','popularPackages' , 'popularPackageFiles', 'latestFiles', 'popularFiles', 'package_file', 'package_user', 'latestPackages','Comments','categories']));

        //return view('frontend.home.index', compact(['files', 'latestFiles', 'popularFiles', 'Comments', 'categories']));
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

    public function search(Request $request){

     ($query=$request->input('search'));

     $categoryId=$request->input('category_id');
       //dd($q,$categoryId);

     ($results=Categorizable::SearchFile($categoryId,$query));
      
      
     //($x=Files::findMany($results));
     //($x=DB::table('files')->whereIn('id',$results)->get());

     //dd($x1 = $x->where('file_title', 'LIKE', "%$q%"));

      //($x2 = $x->all());

    // $resultNumber=$x->count();

     
     return view('frontend.search.searchResult',compact(['query','results']));

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
