@extends('layouts.master')

@section('content')
    <div class="container my-5 py-5">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="d-inline-block">blog</h2>
                <a class="float-right btn btn-success " href="./blog">back</a>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-sm-3">
                    <div class="card rounded card-blog card-blog-sm shadow-lg mt-2 bg-black text-white">
                        <div class="row ">
                            <div class="col-12">
                                <div class="card-block p-3">
                                    <p class="card-subtitle">{{ $post->subtitle }}</p>
                                    <a href="blog/{{ $post-> id }}"><h2
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