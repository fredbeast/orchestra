@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ $job -> id }}/edit/">EDIT</a>
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('JobsController@index') }}">BACK</a>
        <div class="content-wrapper mb-5">
        <img class="d-block w-75 mx-auto" src="{{ $job -> img_lg }}">
        <h2>{{$job->title}}</h2>
        <h5>{{ $job->url }}</h5>
        <h5>{{ $job->types }}</h5>
        <p>{{ $job-> description }}</p>
        </div>
    </div>
@endsection
