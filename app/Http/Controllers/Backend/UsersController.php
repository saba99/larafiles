<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;



class UsersController extends Controller
{
   public function index(){
      
         /* $user=User::find(5);
            dd($user->packages()->get());
          $user->packages()->sync([1=>['amount'=>12000]]);*/
      $users=User::all();
    return view('admin.users.index')->with(['panel_title'=>'لیست کاربران','users'=>$users]);
   }

   public function create(){

        return view('admin.users.create')->with(['panel_title' => 'ایجاد کاربر جدید']);
   }

   public function store(UserRequest $request){

      //dd($request->all());
     
      $user = new User();
      $user->name = $request->input('name');
      $user->email =  $request->input('email');
     
      $user->wallet=  $request->input('wallet');
      $user->role =  $request->input('role');
      $user->password = Hash::make($request->input('password'));

      $user->save();
      
      return redirect()->route('admin.users.list')->with('success','کاربر جدید با موفقیت اضافه شد');

   }

   public function delete($user_id){

      //dd($user_id);
      //User::destroy($user_id);

      if($user_id && ctype_digit($user_id)){

       $userItem=User::findOrFail($user_id);

       //dd($userItem);
       if($userItem && $userItem instanceof User){

         $userItem->delete();

         return redirect()->route('admin.users.list')->with('success','کاربر مورد نظر با موفقیت حذف شد ');
       }

      }

   }

   public function edit($user_id){
   
      if($user_id && ctype_digit($user_id)){

         $userItem=User::findOrFail($user_id);


         if($userItem && $userItem instanceof User){

            return view('admin.users.edit',compact(['userItem']))->with(['panel_title' => 'ویرایش کاربر']);

         }
      }

   }

   public function update(UserRequest $request,$user_id ){
         $inputs=[

       'name'=>$request->input('name'),
            
      'email' => $request->input('email'),
      'password' => $request->input('password'),
      'wallet' => $request->input('wallet'),
         'role' => $request->input('role'),
            
        ];
        //($inputs=$request->except('_token'));
           //(!$request(has('password')))
       if(empty($request->input('password'))){

            unset($inputs['password']);

        } 
        //$inputs['password']=bcrypt($inputs['password']);


         $userItem=User::findOrFail($user_id);
        $userItem->update($inputs);

      return redirect()->route('admin.users.list')->with('success', 'کاربر جدید با موفقیت ویرایش اضافه شد');


   } 

   public function packages(Request $request,$user_id){

                 ($user=User::find($user_id));
                 //dd($user);
                 if(!$user){
                     

                  return redirect()->back();

                 }

           ($user_packages=$user->packages()->get());

              //dd($user_packages);

            ($user=User::with('packages')->get());

      return view('admin.users.packages',compact(['user_packages']))->with('panel_title','نمایش لیست پکیج های کاربر');


   }

}
