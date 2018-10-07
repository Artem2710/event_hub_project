@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event">
        <p>Title: {{$event->title}}</p>
        <p>Description: {{$event->description}}</p>
        <p>Participants:
        @foreach($names as $name)
            {{ $name }};
        @endforeach
        </p>
        <div class="banner-btn">
            <a href="{{route('events.index')}}">show events</a>
        </div>

        @if(Auth::id() == $event->user_id)
            <a href="{{route('events.edit', ['id' => $event->id])}}">edit</a>
        @endif
    </div>

@endsection
