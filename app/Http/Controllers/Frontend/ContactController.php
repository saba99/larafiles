<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
       

        return view('frontend.contact.index');
    } 

    public function  doContact(Request $request){

          //dd($request->all());
        $newContact=[
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            
        ];
        $newContacts = Contact::create($newContact);

        if ($newContacts && $newContacts instanceof Contact) {

            return redirect('/');
        }
        return redirect()->with('contactSuccess', 'درخواست شما با موفقیت ثبت شد ');


    }
}
