@extends('layouts.app')
@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">Dashboard</div>--}}

            {{--<div class="panel-body">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--You are logged in!--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    @foreach($posts as $post)
        <div class="post">
            <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
            <div>{{$post->description}}</div>
        </div>
    @endforeach
@endsection