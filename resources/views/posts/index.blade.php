@extends('main')

@section('title')
<title>SimpleBlog : Index all posts </title>

@section('content')

    <div class="flex-center">
        <div class="links">
            <a href="/">SimpleBlog</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="https://github.com/johnwclark/SimpleBlog">GitHub</a>
        </div>
    </div>

    <div class="post-listing">

        <div class="row">
            <div class="col-md-10">
                <h1>All Posts</h1>
            </div>

            <div class="col-md-2">
                <a href="{{ route('posts.create') }}"  class="btn btn-primary btn-block btn-h1-spacing">Create New Post</a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($posts as $p)
                            <tr>
                                <th>{{$p->id}}</th>
                                <td>{{$p->title}}</td>
                                <!-- I am truncating over 50 and adding ... -->
                                <td>{{ substr( $p->body, 0, 50 ) }} {{ ( strlen( $p->body ) > 50 ? "...": "" ) }}</td>
                                <td>{{$p->created_at}}</td>
                                <td><a href="{{ route('posts.show', $p->id) }}" class="btn btn-outline-secondary">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    <div>



@endsection
