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
                <p>we welcome in businesses of any size, build them state-of-the-art websites and offer professional design services so that they can stand out from the crowd.</p>
                <p>services we offer:</p>
                <ul>
                    <li>
                        <b>bespoke responsive websites</b> built with your brand always in mind
                    </li>
                    <li>
                        <b>professional graphic design</b> for anything from logos, brochures and posters
                    </li>
                    <li>
                        <b>gigh-end photography</b> for products, brands and events
                    </li>
                </ul>
                <p>started in November 2018, we are a new and growing design agency with excellent reviews from past clients.</p>
                <h3>the team:</h3>
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