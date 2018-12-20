@extends('layouts.admin');
@section('content')


    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('JobsController@index') }}">BACK</a>

                <h1>Create Job</h1>
                <form method="POST" action="/admin/jobs" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div>
                        <input type="text" name="title" placeholder="Job Title">
                    </div>
                    <div>
                        <input type="text" name="types" placeholder="Job Type">
                    </div>
                    <div>
                        <input type="text" name="url" placeholder="Job Url">
                    </div>
                    <div>
                        <input type="text" name="tag" placeholder="Job Tag">
                    </div>
                    <div>
                        <textarea name="description" placeholder="Job Description"></textarea>
                    </div>

                    <div>
                        New Thumbnail (Colour)
                        <input type="file" name="thumbCol">
                    </div>
                    <div>
                        New Thumbnail (Sketch)
                        <input type="file" name="thumbPen">
                    </div>
                    <div>
                        Cover Large Image
                        <input type="file" name="imgLg">
                    </div>
                    <div>
                        <button class="btn btn-success btn-outline-success my-5" type="submit">Create Job</button>
                    </div>
                </form>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
