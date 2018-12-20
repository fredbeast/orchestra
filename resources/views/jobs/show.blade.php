@extends('layouts.master');

@section('content')
    <div class="container my-sm-5">
        <div class="row my-5 my-sm-5">
            <div class="col-12">
                <h2 class="d-inline-block">{{ $job -> title }}</h2>
                <a class="float-right btn btn-success " href="{{ action('WorkController@index') }}">back</a>
                <img class="d-block w-100 mx-auto" src="{{ $job -> img_lg }}">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>{{ $job->url }}</h5>
                <h5>{{ $job->types }}</h5>
                <p>{{ $job-> description }}</p>
            </div>
        </div>
    </div>
@endsection
