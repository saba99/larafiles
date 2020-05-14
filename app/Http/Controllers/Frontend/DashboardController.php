<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Models\Profile;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{   
     public function dropzone(){


        
     }
    public function upload(Request $request){
        

        ($request->all());

        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $book = new Profile();
        $book->user_id = Auth::user()->id;
        $book->mime = $cover->getClientMimeType();
        $book->original_filename = $cover->getClientOriginalName();
        $book->filename = $cover->getFilename() . '.' . $extension;
        $book->save();

        return redirect()->route('books.index')
            ->with('success', 'Book added successfully...');
    }
    public function index(){

     ($profile=User::with('profile')->get());

     $profile=new Profile();

     $profile->user_id=Auth::user()->id;


        return view('frontend.dashboard.settings');
        
    }

     public function avatar(){

      
       return view('frontend.dashboard.settings',compact(['user']));
    }
}
