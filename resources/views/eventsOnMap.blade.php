@extends('layouts.app')


@section('eventsOnMap')
    <div id="services" class="services-area section-padding" style="position: absolute;">
        <div class="container events">
            <div class="row">
                <div class="single-contact text-left" style="">
                    {{--<h2>Location</h2>--}}
                    <form method="get" action="{{url('/events')}}">
                        <div>
                            <label for="type">Выберите тип мероприятия</label><br>
                            <select id="type" name="type">
                                <option value="%">все</option>
                                <option value="другое">другое</option>
                                <option value="спорт">спорт</option>
                                <option value="кино">кино</option>
                                <option value="театр">театр</option>
                                <option value="концерт">концерт</option>
                            </select>
                            <button class="banner-btn" style="padding: 0 5px; margin-top: 0;">sort</button>
                        </div>
                    </form>
                    @auth
                        <a href="{{url('/create')}}" class="color">Добавить мероприятие</a>
                    @else
                        <a href="{{ route('register') }}" class="color">Добавить мероприятие</a>
                    @endauth
                    <div class="list-events">
                        @foreach($events as $event)
                            <div class="post">
                                <p href="">Название: {{$event->title}}</p>
                                <p>Автор: {{ $event->getEventerUsername() }}</p>
                                <div class="flex">
                                    <div class="desc">Тип: {{$event->type}}</div>
                                    <a href="/events/{{$event->id}}" class="color">больше</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if($event)
                    <a id="allData" href="/events/{{$event->id}}">{{$allData}}</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIsmDeJkfwTQJb0dZN-rFA1iJenf084aM&callback=loadMap">
    </script>
@endsection