@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event row">
        <div class="col-sm-5">
            <div id="map_canvas"></div>
        </div>
        <div class="col-sm-7">
            <div class="data">
                <p>Title: {{$event->title}}</p>
                <p>Description: {{$event->description}}</p>
                <p>Time spending: {{$event->dateTime}}</p>
                <p class="participants">Participants</p><b class="spoiler-title">&#9660;</b>
                <div class="spoiler-body">
                    @foreach($participantNames as $participantName)
                        <p style="margin-left: 20px">{{ $participantName }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bo" style="position: relative;">
        <div class="buttons" style="position: absolute; right: 0">
            <div class="exetends">
                @if(Auth::id() == $event->user_id)
                    <div class="banner-btn">
                        <a href="{{route('events.edit', ['id' => $event->id])}}">edit</a>
                    </div>
                @endif
                @if(Auth::id() == $event->user_id)
                    <form method="post"
                          action="{{route('events.delete', ['id' => $event->id])}}">
                        {{method_field('DELETE')}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="banner-btn">
                            <button name="event_id" value="{{$event->id}}">delete</button>
                        </div>
                    </form>
                @endif
                @auth
                    <form method="post"
                          action="{{route('participate', ['event' => $event, 'participantNames' => $participantNames,])}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="banner-btn">
                            <button name="event_id" value="{{$event->id}}">{{$check}}</button>
                        </div>
                        @if ($errors->has('event'))
                            <span class="help-block">
                            <strong>{{ $errors->first('event') }}</strong>
                        </span>
                        @endif
                    </form>
                @endauth
                <div class="banner-btn">
                    <a href="{{url('/events')}}">show events</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var address = "<?php echo $event['country'];?>+<?php echo $event['city'];?>+<?php echo $event['street'];?>+<?php echo $event['house'];?>";
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIsmDeJkfwTQJb0dZN-rFA1iJenf084aM"></script>
@endsection
