@extends('layouts.admin')

@section('content')
    <div class="container my-5 py-5">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="d-inline-block">Work</h2>
                <a class="float-right btn btn-success " href="./jobs">edit</a>
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <div onclick="location.href='{{ action('JobsController@show', $job -> id)  }}';"
                     class="col-8 offset-2 col-sm-5 offset-sm-1 col-md-3 offset-md-0 my-4 my-md-0">
                    <div class="card rounded shadow card-work" style="width: 100%">
                        <img class="card-img-top rounded work-img" src="{{$job->thumb_col}}" alt="Card image cap">
                        <img class="card-img-top rounded work-img-top" style="position: absolute; top:0; left:0"
                             src="{{ $job->thumb_pen }} " alt="Card image cap">
                        <a class="btn btn-outline-dark rounded btn-card-work" href="#" role="button">{{$job->tag     }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row my-5">
            <div class="col-12">
                <h2 class="d-inline-block">Blog</h2>
                <a class="float-right btn btn-success " href="./posts">edit</a>
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
                                    <a href="{{ action('PostsController@show', $post -> id)  }}"><h2
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
