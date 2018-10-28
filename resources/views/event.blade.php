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
            <a href="{{url('/events')}}">show events</a>
        </div>

        @if(Auth::id() == $event->user_id)
            <a href="{{route('events.edit', ['id' => $event->id])}}">edit</a>
        @endif
        @auth
            <form method="post" action="{{route('participate', ['event' => $event, 'names' => $names,])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <button name="event_id" value="{{$event->id}}">{{$check}}</button>
                </div>
                @if ($errors->has('event'))
                    <span class="help-block">
                            <strong>{{ $errors->first('event') }}</strong>
                        </span>
                @endif
            </form>
        @endauth
    </div>

@endsection

{{--$('.webbActive').click(function() {--}}
{{--if ($(this).attr('href') === '#content') {--}}
{{--$(this).attr('href', '#nav');--}}
{{--}--}}
{{--else {--}}
{{--$(this).attr('href', '#content');--}}
{{--}--}}
{{--});--}}
