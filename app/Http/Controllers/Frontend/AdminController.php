<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Admin;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest:web');

        $this->middleware('guest:admin');
    }

    public function showRegistrationForm()
    {


        return view('admin.register');
    }

    public function showLoginForm()
    {

        return view('admin.login');
    }

    public function register(Request $request)
    {


        //dd($request->all());

        $this->validateRegister($request);

        // $admin=Admin::create($request->all());


        $admin = $this->create($request->all());

        $this->guard()->login($admin);

        return redirect($this->redirectTo);
    }

    private function validateRegister($request)
    {



        $request->validate([


            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'department' => ['required']

        ]);
    }

    private function create(array $data)
    {

        return Admin::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'department' => $data['department'],


        ]);
    }

    private function guard()
    {

        return Auth::guard('admin');
    }
}
