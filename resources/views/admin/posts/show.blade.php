@extends('layouts.master');

@section('content')
    <div class="container">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ $post -> id }}/edit/">EDIT</a>
        <a class="btn btn-outline-dark my-5 mx-3" href="./">BACK</a>
        <img class="d-block mx-auto w-25" src="{{ $post -> image }}">
        <div class="content-wrapper mb-5">
        <p>TITLE</p>
        <h2>{{$post->title}}</h2>
        <p>SUBTITLE</p>
        <h5>{{ $post->subtitle }}</h5>
        <p>CONTENT</p>
        <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection
