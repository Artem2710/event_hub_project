@extends('header')


@section('eventsOnMap')
    <!--Services Area Starts-->

    <div id="services" class="services-area section-padding">
        <div class="container events">
            <div class="row">
                <div class="single-contact text-left">
                    <i class="fa fa-home"></i>
                    <h2>Location</h2>
                    <p>123, New York, USA</p> <!--edit here-->
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <div class="banner-btn">
                        <a href="{{route('event')}}">join to event</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Services Area Ends-->


@endsection