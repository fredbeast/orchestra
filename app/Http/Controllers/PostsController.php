<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = 'http://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $imageUrl = null;
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            $imageUrl = $url . 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }

        Post::create([
            'title' => request('title'),
            'subtitle' => request('subtitle'),
            'content' => request('content'),
            'description' => request('description'),
            'image' => $imageUrl,
        ]);

        return redirect('admin/posts')->withSuccess('Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $file = request('image');
        if(!empty($file)) {
            $name = time() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            $imageUrl = $url . 'images/' . $name;

        }

        $post->update(request(['title', 'subtitle', 'description', 'content']));
        return back()->withSuccess('Everything updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $imageUrl = explode('/', $post->image);
        $s3Id = end($imageUrl);
        Storage::disk('s3')->delete('images/' . $s3Id);
        $post->delete();
        return redirect('admin/posts')->withSuccess('Everything updated successfully!');
    }
}
