@extends('layouts/app')
@section('content')
    <div class = "jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is blogging app with authentication</p>
        <p><a class = "btn btn-primary btn-lg" href = "http://localhost/laravel/blogapp/public/signup" >Register</a> <a class = "btn btn-primary btn-lg" href = "http://localhost/laravel/blogapp/public/login" >Log In</a></p>
    </div>
@endsection

