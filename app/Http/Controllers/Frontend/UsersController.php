<?php

namespace App\Http\Controllers\Frontend;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Frontend\LoginRequest;
use App\Jobs\SendEmailNotify;
use Carbon\Carbon;

use App\User;

class UsersController extends Controller
{   

    public function register(){

        return view('frontend.users.register');
    } 

    public function doRegister(Request $request){

        $newUserData=[

           'name'=>$request->input('name'),
            
           'email'=>$request->input('email'),
           'password'=>$request->input('password'),
           

        ];

        $newUser=User::create($newUserData);

        if($newUser && $newUser instanceof User){
                

            event(new UserRegistered($newUser));
              
               return redirect('/account/login');
        }
        return redirect()->back()->with('registerErr','در فرایند ثبت نام خطایی رخ داده است لطفا دوباره تلاش کنید ');
    }

    public function login(){

        return view('frontend.users.login');
    } 

    public function doLogin(Request $request){

        //dd($request->all());
        ($remember=$request->has('remember'));


        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember)){

            $user=Auth::user(); 

            $job=(new SendEmailNotify($user))->onQueue('emails');

            $job->delay(Carbon::now()->addMinutes(10));
          dispatch($job);


           return redirect('/profile');

        } 

       
         
        return redirect()->back()->with('loginErr','ایمیل یا کلمه عبور اشتباه می باشد ');
    } 

    public function logout(){


        Auth::logout();

        return redirect('/homePage');
    } 

    public function profile(){

        return view('frontend.profile.index');
    }
    
}
