<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Topic;

class TopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new()
    {

        return view('admin.topics.new');
    }

    public function store(Request $request)
    {

       //dd($request->all());

        $topic = Auth::user()->topics()->create($request->all());

        return redirect()->route('topic.show', $topic);
    }

    public function index()
    {

        $topics = Topic::all();

        return view('admin.topics.index', compact(['topics']));
    }

    public function show(Topic $topic)
    {


        return view('frontend.topics.show', compact(['topic']));
    }
}
