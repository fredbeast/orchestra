@extends('layouts.master')

@section('page_info')
    <title>About | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="About Orchestra">
    <meta property="og:description" content="Award-winning website and brand design since 2018.">
    <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/orchestra-portfolio/protected/orchestra.jpg">
    <meta property="og:url" content="http://orchestradesign.co/about">
@endsection

@section('content')
    <div class="container my-sm-5">
        <div class="row mt-5 mt-sm-5">
            <div class="col-12 col-md-8">
                <p><a href="/">Home</a> > About</p>
                <h2>about us</h2>
                <hr>
                <p>Started in November 2018, Orchestra is a growing design agency specialising in web development and brand design. </p>
                <p>The Team:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2">
                <p>Developer</p>
                <h5>Fred Parry</h5>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <p>Photographer</p>
                <h5>Sara Jolly</h5>
            </div>
        </div>
    </div>
@endsection