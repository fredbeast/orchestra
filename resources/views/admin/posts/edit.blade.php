@extends('layouts.admin');

@section('content')
    <div id="editor" class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('PostsController@index') }}">BACK</a>

        <h1>Edit Post</h1>
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row my-4">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="title" value="{{ $post->title  }}"
                           placeholder="Post Title">
                    <input type="hidden" name="id" value="{{ $post->id }}">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="subtitle" value="{{ $post->subtitle  }}"
                           placeholder="Post subtitle">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <textarea class="form-control" name="description"
                              placeholder="Post Description">{{ $post->description  }}</textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                <textarea class="tiny-editor" name="content">{{ $post -> content }}</textarea>
                <!--
                <textarea name="content" placeholder="Post Content">{{ $post->content  }}</textarea>
                -->
                </div>
            </div>
            <div>
                New image
                <input type="file" name="image">
            </div>
            <div>
                <p>Current image</p>
                <img src="{{ $post->image }}" class="w-25">
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
        <form method="POST" action="/admin/posts/{{$post -> id}}">
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
@endsection
