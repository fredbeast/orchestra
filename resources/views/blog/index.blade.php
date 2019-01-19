@extends('layouts.master')
@section('page_info')
    <title>Blog | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="Orchestra's Blog">
    <meta property="og:description" content="A few words from the team.">
    <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/orchestra-portfolio/protected/orchestra.jpg">
    <meta property="og:url" content="https://orchestradesign.co/blog">
@endsection
@section('content')
    <div class="container my-sm-5">
        <div class="row my-5 my-sm-5">
            <div class="col-12">
                <p><a href="/">Home</a> > Blog</p>
                <h2 class="d-inline-block">blog</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                    <div class="card rounded card-blog card-blog-sm shadow-lg mt-2 bg-black text-white">
                        <div class="row ">
                            <div class="col-12">
                                <div class="card-block p-3">
                                    <p class="card-subtitle">{{ $post->subtitle }}</p>
                                    <a href="{{ action('BlogController@show', $post -> id)  }}"><h2
                                                class="card-title">{{ $post->title }}</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection