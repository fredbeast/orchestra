@extends('layouts.master')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class='col-12'>
                <div class="alert alert-light" role="alert">
                    This site is under maintenance
                </div>
                <div class="youtube-wrapper mx-auto d-block">
                    <div class="youtube-middle"></div>
                    <iframe class="mx-auto d-block" style="margin-left: -100px; margin-top: -90px" width="515" height="500"
                            src="https://www.youtube-nocookie.com/embed/UnJDbDOLBJc?rel=0&controls=0&autoplay=1&loop=1​&playlist=UnJDbDOLBJc"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="jumbotron">
                    <h2>Orchestra</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

