@extends('layouts.admin')
@section('content')
    <div class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('PostsController@index') }}">BACK</a>

        <h2 class="mb-5">Create Post</h2>
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div>
                <input type="text" name="title" placeholder="Post Title">
            </div>
            <div>
                <input type="text" name="subtitle" placeholder="Post subtitle">
            </div>
            <div>
                <textarea name="description" placeholder="Post Description"></textarea>
            </div>
            <div>
                <textarea class="tiny-editor" name="content" placeholder="Post Content"></textarea>
            </div>
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <button class="btn btn-success btn-outline-success my-5" type="submit">Create Post</button>
            </div>
        </form>
    </div>


@endsection
