@extends('layouts.app')


@section('eventsOnMap')

    <div id="services" class="services-area section-padding">
        <div class="container events">
            <div class="row">
                <div class="single-contact text-left" style="">
                    <i class="fa fa-home"></i>
                    <h2>Location</h2>
                    <p>123, New York, USA</p> <!--edit here-->
                    {{--<textarea name="" id="" cols="30" rows="10">--}}
                    <div class="list-events">
                        @foreach($events as $event)
                            <div class="post">
                                <a href="">{{$event->title}}</a>
                                <div class="flex">
                                    <div class="desc">{{$event->description}}</div>
                                    <a href="/events/{{$event->id}}">more</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--</textarea>--}}
                    {{--<div class="banner-btn">--}}
                    {{--<a href="{{route('event')}}">join to event</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection