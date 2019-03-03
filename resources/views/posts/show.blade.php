@extends('layouts.app')
@section('content')
<div>
    <a href = "http://localhost/laravel/blogapp/public/posts"><button type="button" class="btn btn-secondary btn-sm">Go Back</button> </a>
</div>
        <h2>{{$post->title}}</h2>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div>

@endsection