@extends('layouts.app')
@section('content')
    <a href = "http://localhost/laravel/blogapp/public/posts/create"><button class = "btn btn-secondary btn-sm"> Create New Post</button></a>
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="panel panel-default">
                <h3 class = "panel-body">
                    <a href = "http://localhost/laravel/blogapp/public/posts/{{$post->id}}">
                        {{$post->title}}
                    </a>
                </h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No Post is found </p>
    @endif
@endsection