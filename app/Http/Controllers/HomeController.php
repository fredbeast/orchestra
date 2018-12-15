<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $jobs = Job::orderBy('created_at', 'desc')->take(4)->get();
        return view('admin.home', compact('jobs','posts'));
    }
}
