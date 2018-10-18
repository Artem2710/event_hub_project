@extends('layouts.app')


@section('aboutEvent')
    <div class="banner-btn">
        <a href="{{redirect(route('participate', ['id' => $event->id]))}}">add to event</a>
{{--        <a href="{{route('event.view', ['id' => $event->id])}}">add to event</a>--}}
{{--        <a href="{{route('events.index')}}">add to event</a>--}}
        {{--<a href="/events/{{$event->id}}">add to event</a>--}}
    </div>
@endsection
