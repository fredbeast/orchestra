@extends('layouts.master')

@section('content')
    <div class="container my-sm-5">
        <div class="row my-5 my-sm-5">
            <div class="col-12">
                <h2 class="d-inline-block">work</h2>
                <a class="float-right btn btn-success " href="./">back</a>
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <div onclick="location.href='./jobs/{{$job->id}}';"
                     class="col-8 offset-2 col-sm-5 offset-sm-1 col-md-3 offset-md-0 my-4 my-md-0">
                    <div class="card rounded shadow card-work" style="width: 100%">
                        <img class="card-img-top rounded work-img" src="{{$job->thumb_col}}" alt="Card image cap">
                        <img class="card-img-top rounded work-img-top" style="position: absolute; top:0; left:0"
                             src="{{ $job->thumb_pen }} " alt="Card image cap">
                        <a class="btn btn-outline-dark rounded btn-card-work" href="#" role="button">{{ $job->tag }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection