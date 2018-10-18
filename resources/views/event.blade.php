@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event">
        <p>Title: {{$event->title}}</p>
        <p>Description: {{$event->description}}</p>
        <p>Time spending: {{$event->dateTime}}</p>
        <p>Participants: </p>
        @foreach($names as $name)
            <p style="margin-left: 20px">{{ $name }}</p>
        @endforeach

        <div class="banner-btn">
            <a href="{{route('events.index')}}">show events</a>
        </div>

        @if(Auth::id() == $event->user_id)
            <a href="{{route('events.edit', ['id' => $event->id])}}">edit</a>
        @endif
        @auth
            {{--@if($participant->user_id == Auth::id())--}}
            <form method="post" action="{{route('participate.delete', ['event' => $event, 'names' => $names,])}}">
                {{ method_field('delete') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <button name="event_id" value="">leave</button>
                </div>
            </form>
            {{--@else--}}
        @endauth
        @auth

            <form method="post" action="{{route('participate', ['event' => $event, 'names' => $names,])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <button name="event_id" value="{{$event->id}}">connect</button>
                </div>
                @if ($errors->has('event'))
                    <span class="help-block">
                            <strong>{{ $errors->first('event') }}</strong>
                        </span>
                @endif
            </form>
            {{--@endif--}}
        @endauth
    </div>

@endsection
