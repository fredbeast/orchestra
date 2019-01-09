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
                <p>We welcome in businesses of any size and work on their brands, building them state-of-the-art websites and offering professional design services so that they can stand out from the crowd.</p>
                <p>Services we offer:</p>
                <ul>
                    <li>
                        <b>Bespoke responsive websites</b> built with your brand always in mind
                    </li>
                    <li>
                        <b>Professional graphic design</b> for anything from logos, brochures and posters
                    </li>
                    <li>
                        <b>High end photography</b> for products, brands and events
                    </li>
                </ul>
                <p>Started in November 2018, Orchestra we are a new and growing design agency with excellent reviews from past clients.</p>
                <p>Meet the Team:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <h5>Fred Parry</h5>
                <p><b>Web developer</b> and designer with over 4 years of experience. Past experience includes working for the Duke of York and GB athletes.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5>Sara Jolly</h5>
                <p><b>Photographer</b> and artist. With particular expertise in product photography and event photography (weddings/balls).</p>

            </div>
        </div>
    </div>
@endsection