@extends('main')

@section('title')
<title>SimpleBlog : Display  Post</title>

@section('content')



    <div class="flex-center">
        <div class="links">
            <a href="/">SimpleBlog</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="https://github.com/johnwclark/SimpleBlog">GitHub</a>
        </div>
    </div>

    <div class="post-details">
        <div class="row">

            <div class="col-md-7 offset-1">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
            </div>

            <div class="col-md-3">
                <div class="row"> <p>Created At:{{ $post->created_at }}</p> </div>
                <div class="row"> <p>Last Updated:{{ $post->updated_at }}</p> </div>
                <div class="row">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg btn-block">Edit</a>
                </div>
                <div class="row">
                    <a href="/posts" class="btn btn-success btn-lg btn-block">Cancel</a>
                </div>
                <div class="row">
                    <form id="form_destroy" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button type="submit" form="form_destroy" value="Submit" class="btn btn-danger btn-lg btn-block">Delete</button>
                </div>
            </div>

        </div>
    <div>



@endsection
