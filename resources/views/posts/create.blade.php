@extends('main')

@section('title')
<title>SimpleBlog : Create Post</title>

@section('content')

<div class="flex-center">
    <div class="links">
        <a href="/">SimpleBlog</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="https://github.com/johnwclark/SimpleBlog">GitHub</a>
    </div>
</div>



<div class="content">
    <div class="row">
        <div class="col-md-8 offset-2">
            <h1>New Post</h1>
            <hr>
            
            <form role="form" method="post" action="{{action('PostController@store')}}">
            <div class="form-group"  >
                <input type="text" id="title" name="title" class="form-control" required minlength="4" placeholder="post title">
                <textarea id="body" name="body" class="form-control rounded-0"  rows="10" placeholder="post body"> </textarea>
                <input type="submit" class="btn btn-primary btn-lg" value="Create New Post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </div>

        </div>
    </div>
<div>



@endsection