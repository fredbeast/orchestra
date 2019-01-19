@extends('layouts.master')

@section('page_info')
    <title>{{ $post -> title }} | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="{{ $post -> title }}">
    <meta property="og:description" content="{{ $post -> description }}">
    <meta property="og:image" content="{{ $post -> image }}">
    <meta property="og:url" content="https://orchestradesign.co/blog/{{$post->id}}">
    <meta property="og:type" content="article"/>
@endsection

@section('content')
    <div class="container mt-3 my-sm-5">
        <div class="row ">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <p><a href="/">Home</a> > <a href="{{ action('BlogController@index') }}">Blog</a>
                            > {{$post->title}}</p>
                        <img class="d-block mx-auto w-100 my-2" src="{{ $post -> image }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <h2>{{$post->title}}</h2>
                <h5>{{ $post->subtitle }}</h5>
                <hr>
                <div class="blog-content">
                    {!! $post->content !!}
                </div>
            </div>

        </div>
    </div>

@endsection