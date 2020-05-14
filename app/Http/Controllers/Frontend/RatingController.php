<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\userRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function rating(Request $request)
    {
         $inputrating=$request->input('rating');

         $package_id=$request->input('package_id');


         //dd($inputrating,$package_id);

        $rating= new userRating();


        $rating->package_id=$request->input('package_id');
        $rating->user_id = Auth::user()->id;

        $rating->point=$request->input('rating');

        $rating->save();

        return redirect()->back();
    }
}

