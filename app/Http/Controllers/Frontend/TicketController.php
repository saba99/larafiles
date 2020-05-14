<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:web,admin');
    // }
    public function new()
    {
         $tickets=Ticket::all();
        return view('frontend.tickets.new',compact(['tickets']));
    }

    public function index()
    {

        //dd($tickets= auth()->user()->tickets);
        // dd(Auth::user()->id);
        ($tickets = Ticket::with('user')->get());



        return view('frontend.tickets.ticket', compact(['tickets']));
    }

    public function show(Ticket $ticket)
    {


        //dd($ticket);

        return view('frontend.tickets.tickets', compact(['ticket']));
    }

    public function create(Request $request)
    {

      //dd($request->all());
        $user_id = Auth::user()->id;
        ($request->all());
           
 // dd($request->hasFile('file'));
        
        Auth::user()->tickets()->create(



            ($request->all() + ['file_path' => $this->uploadFile($request)])
        );

        return redirect()->back()->with('success', 'پیام شما با موفقیت ذخیره شد ');
    }

    private function uploadFile($request)
    {

        return $request->hasFile('file') ? $request->file->store('public') : null;
    }


    public function close(Ticket $ticket)
    {

        $ticket->close();

        return back();
    }
}
