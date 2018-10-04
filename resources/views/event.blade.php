@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event">
        <p>Title: {{$event->title}}</p>
        <p>Description: {{$event->description}}</p>
        <p>Created at: {{$event->created_at}}</p>
        <p>Updated at: {{$event->updated_at}}</p>
        <div class="banner-btn">
            <a href="{{route('events.index')}}">show events</a>
        </div>
    </div>

@endsection
