@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('JobsController@index') }}">BACK</a>

                <h1>Edit Job</h1>
                <form method="POST" action="/admin/jobs/{{ $job->id }}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div>
                        <input type="text" name="title" value="{{ $job->title }}" placeholder="Job Title">
                        <input type="hidden" name="id" value="{{ $job->id }}">
                    </div>

                    <div>
                        <input type="text" name="types" value="{{ $job->types }}" placeholder="Job Type">
                    </div>
                    <div>
                        <input type="text" name="url" value="{{ $job->url }}" placeholder="Job URL">
                    </div>
                    <div>
                        <input type="text" name="tag" value="{{ $job->tag }}" placeholder="Job Tag">
                    </div>
                    <div>
                        <textarea class="tiny-editor" name="description" placeholder="Job Description">{{ $job->description  }}</textarea>
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
                        <button type="submit">Save</button>
                    </div>
                </form>
                <form method="POST" action="/admin/jobs/{{$job -> id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </div>
                </form>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p>Current Images</p>
                <img src="{{$job -> thumb_col}}" alt="Thumbnail Color" class="w-25">
                <img src="{{$job -> thumb_pen}}" alt="Thumbnail Pen" class="w-25">
                <img src="{{$job -> img_lg}}" alt="Large Image" class="w-25">
            </div>
        </div>
    </div>

@endsection
