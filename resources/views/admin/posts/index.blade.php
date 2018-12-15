@extends('layouts.admin');

@section('content')
    <div class="container my-5">
    <h2>Blog HQ</h2>
        <p>Current Posts</p>
@foreach ($posts as $post)
    <li>{{$post->title}} <a href="./posts/{{$post->id}}/edit">Edit</a> <a href="./posts/{{$post->id}}/">View</a> </li>
@endforeach
    <a class="btn btn-primary btn-outline-primary my-5" href="/admin/posts/create">Create Post</a>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    </div>
@endsection
