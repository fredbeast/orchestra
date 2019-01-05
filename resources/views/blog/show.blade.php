@extends('layouts.master')

@section('page_info')
    <title>{{ $post -> title }} | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="{{ $post -> title }} | Orchestra">
    <meta property="og:description" content="{{ $post -> description }}">
    <meta property="og:image" content="{{ $post -> image }}">
    <meta property="og:url" content="http://orchestradesign.co/blog/{{$post->id}}">
@endsection

@section('content')
    <div class="container mt-3 my-sm-5">
        <div class="row ">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <p><a href="/">Home</a> > <a href="{{ action('BlogController@index') }}">Blog</a> > {{$post->title}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img class="d-block mx-auto w-100 my-2" src="{{ $post -> image }}">
                <h2>{{$post->title}}</h2>
                <h5>{{ $post->subtitle }}</h5>
                <hr>
                <p>{!! $post->content !!} </p>
            </div>

        </div>
    </div>

@endsection