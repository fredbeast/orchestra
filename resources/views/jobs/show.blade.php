@extends('layouts.master')

@section('page_info')
    <title>{{ $job -> title }} | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="{{ $job -> title }} | Orchestra">
    <meta property="og:description" content="client type - {{ $job -> types }}">
    <meta property="og:image" content="{{ $job -> img_lg }}">
    <meta property="og:url" content="https://orchestradesign.co/jobs/{{ $job-> id }}">
@endsection

@section('content')
    <div class="container my-sm-5">
        <div class="row mt-5 mb-2 ">
            <div class="col-12">
                <p><a href="/">Home</a> > <a href="{{ action('WorkController@index') }}">Jobs</a> > {{$job->title}}</p>
                <img class="d-block w-100 mx-auto my-5" src="{{ $job -> img_lg }}">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="d-inline-block">{{ $job -> title }}</h3>
                <h5>{{ $job->types }}</h5>
                <a target="_blank" href="//{{ $job->url }}">{{ $job->url }}</a>
                <hr>
                {!! $job-> description  !!}
            </div>
        </div>
    </div>
@endsection
