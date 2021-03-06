@extends('layouts.master')

@section('page_info')
    <title>Work | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="Orchestra's Work">
    <meta property="og:description" content="Websites, logos and products designed by the big O.">
    <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/orchestra-portfolio/protected/orchestra.jpg">
    <meta property="og:url" content="https://orchestradesign.co/jobs">
@endsection

@section('content')
    <div class="container my-sm-5">
        <div class="row my-5 my-sm-5">
            <div class="col-12">
                <p><a href="/">Home</a> > Jobs</p>
                <h2 class="d-inline-block">work</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <div onclick="location.href='{{ action('WorkController@show', [$job -> id]) }}';"
                     class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-3 offset-md-0 my-4">
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