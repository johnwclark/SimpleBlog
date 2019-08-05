
 @extends('main')

 @section('title')
<title>SimpleBlog : Welcome</title>
 
 @section('content')
<div class="flex-center">
    <div class="links">
        <a href="/">SimpleBlog</a>
        <a href="#">About</a>
        <a href="/contact">Contact</a>
        <a href="https://github.com/johnwclark/SimpleBlog">GitHub</a>
    </div>
</div>

<div class="content">
        <div class="title m-b-md">
            SimpleBlog <br>by {{$data['name'] }}  
        </div>
        <div class="email m-b-md">
            Email {{$data['email'] }}
        </div>
</div>




