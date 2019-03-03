@extends('layouts/app')
@section('content')
        <h3> {{$title}}</h3>
        @if(count($webdesign) > 0)
                <ul>
                        @foreach($webdesign as $web)
                                <li class = "list-group-item">{{$web}}</li>
                        @endforeach
                </ul>
        @endif
@endsection
