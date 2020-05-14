<?php

namespace App\Http\Controllers\Frontend;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Frontend\LoginRequest;
use App\Jobs\SendEmailNotify;
use App\Models\Address;
use App\Models\Support;
use App\Models\City;
use App\Models\Province;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

//use Laravel\Socialite\Facades\Socialite;

//use  Socialite;
use App\User;



class UsersController extends Controller
{   
    
    protected $redirectTo='/profile';


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

        return redirect('/');
    } 

    public function profile(){

        return view('frontend.profile.index');
    }  

   

    public function  redirectToProvider($provider){


          return Socialite::driver($provider)->redirect();
    }

    public function handelProviderCallback($provider){


        $user=Socialite::driver($provider)->user();
       // dd($user);
        $exitstingUser=User::whereEmail($user->getEmail())->first();

        if($exitstingUser){

            auth()->login($exitstingUser);

            return redirect($this->redirectPath());

        } 

        User::create([

        //'name'=>$user->getName(),
        'email'=>$user->getEmail(),
        'password'=>bcrypt('$2y$10$akiCza2jp3Qlnzm0/o84xeae/7')

        ]);
        auth()->login($exitstingUser);

        return redirect($this->redirectPath());


    } 

    public function support(Request $request){


        $newSupport = [

            'subject' => $request->input('subject'),

            'description' => $request->input('description'),
           


        ];

        $newUser = Support::create($newSupport);

        return redirect()->back()->with('success-support', 'نظر شما با موفقیت به پشتیبانی ارسال شد ');


    } 

    public function showInfo(){ 

        $city=City::all();
        $province=Province::all();

        return view('frontend.users.info',compact(['city','province']));
    }

    public function info(Request $request){


        //dd($request->all());
        $userInfo =new User();

        $userInfo->name=$request->input('name');
        $userInfo->email = $request->input('email');

        $userInfo->save();

        $userAddress=new Address();

        $userAddress->address=$request->input('address');

        $userAddress->city=$request->input('city');

        $userAddress->country = $request->input('country');

        $userAddress->post_code = $request->input('post_code');

        $userAddress->province = $request->input('province');
         
        $userAddress->user_id=Auth::user()->id;

        $userAddress->save();

        
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
    
