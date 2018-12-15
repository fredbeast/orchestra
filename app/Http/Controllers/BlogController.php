<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;


class BlogController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->paginate(12);
        return view('blog.index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', compact('post'));
    }
}
