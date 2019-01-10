@extends('layouts.admin')

@section('content')
    <div class="container my-5">
    <h2>Blog HQ</h2>
        <p>Current Posts</p>
@foreach ($posts as $post)
    <li>{{$post->title}} <a href="{{ action('PostsController@edit', $post -> id)  }}">Edit</a> <a href="{{ action('PostsController@show', $post -> id)  }}">View</a> </li>
@endforeach
    <a class="btn btn-primary btn-outline-primary my-5" href="{{ action('PostsController@create') }}">Create Post</a>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    </div>
@endsection
