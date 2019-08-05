@extends('main')

@section('title')
<title>SimpleBlog : Edit Post</title>

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


 
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put') }}
            
            <div class="row">
                <div class="col-md-7 offset-1">

                    <input type="text" id="title" name="title" value="{{ $post->title }}"  class="form-control" required minlength="4" placeholder="post title">
                    <textarea id="body" name="body"  class="form-control rounded-0"  rows="10" placeholder="post body">{{ $post->body }}</textarea>

                </div>

                <div class="col-md-3">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Save Changes">
                </div>
            </div>
        </form>


    <div>



@endsection
