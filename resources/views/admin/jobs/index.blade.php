@extends('layouts.admin');

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Work</h2>
                <p>some of the shenanigans we've got up to...</p>
            </div>
        </div>
        <div class="row>">
            @foreach ($jobs as $job)
                <div onclick="location.href='./jobs/{{$job->id}}';"
                     class="col-8 offset-2 col-sm-5 offset-sm-1 col-md-3 offset-md-0 my-4 my-md-0">
                    <div class="card rounded shadow card-work" style="width: 100%">
                        <img class="card-img-top rounded work-img" src="{{$job->thumb_col}}" alt="Card image cap">
                        <img class="card-img-top rounded work-img-top" style="position: absolute; top:0; left:0"
                             src="{{ $job->thumb_pen }} " alt="Card image cap">
                        <a class="btn btn-outline-dark rounded btn-card-work" href="#" role="button">{{$job->title}}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-primary btn-outline-primary my-5" href="/admin/jobs/create">New Job?</a>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
@endsection
