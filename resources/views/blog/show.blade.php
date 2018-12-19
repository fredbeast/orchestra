@extends('layouts.master');

@section('content')
    <div class="container my-sm-5">
        <div class="row my-5 my-sm-5">
            <div class="col-12 col-md-4">
                <h2>{{$post->title}}</h2>
                <img class="d-block mx-auto w-100" src="{{ $post -> image }}">
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-success float-right" href="./">BACK</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>{{ $post->subtitle }}</h5>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection