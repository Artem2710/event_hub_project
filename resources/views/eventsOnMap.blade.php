@extends('layouts.app')


@section('eventsOnMap')
    <style>
        .navbar {
            background: rgba(0, 0, 0, 0.7);
            padding-bottom: 10px;
        }
    </style>
    <div id="services" class="services-area section-padding" style="position: absolute;">
        <div class="container events">
            <div class="row">
                <div class="single-contact text-left" style="">
                    <h2>Location</h2>
                    <form method="get" action="{{url('/events')}}">
                        <div>
                            <label for="type">Event type:</label>
                            <select id="type" name="type">
                                <option value="%">all</option>
                                <option value="other">other</option>
                                <option value="sport">sport</option>
                                <option value="movie">movie</option>
                                <option value="theatre">theatre</option>
                                <option value="concert">concert</option>
                                <option value="flashMob">flash mob</option>
                            </select>
                            <button>sort</button>
                        </div>
                    </form>
                    @auth
                        <a href="{{url('/create')}}">Add event +</a>
                    @else
                        <a href="{{ route('register') }}">Add event +</a>
                    @endauth
                    <div class="list-events">
                        @foreach($events as $event)
                            <div class="post">
                                <p href="">Title: {{$event->title}}</p>
                                <p>Author: {{ $event->getEventerUsername() }}</p>
                                <div class="flex">
                                    <div class="desc">Type: {{$event->type}}</div>
                                    <a href="/events/{{$event->id}}">more</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="allData"> {{$allData}}</div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIsmDeJkfwTQJb0dZN-rFA1iJenf084aM&callback=loadMap">
    </script>
@endsection