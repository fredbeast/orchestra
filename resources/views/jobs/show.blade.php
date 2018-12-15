@extends('layouts.master');

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-sm-8 offset-sm-2">
                <h2 class="d-inline-block">{{$job->title}}</h2>
                <a class="float-right btn btn-success " href="./">back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2">
                <h5>{{ $job->url }}</h5>
                <h5>{{ $job->types }}</h5>
                <p>{{ $job-> description }}</p>
                <img class="d-block w-75 mx-auto" src="{{ $job -> img_lg }}">
            </div>
        </div>
    </div>
@endsection
