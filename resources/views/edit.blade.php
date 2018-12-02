@extends('layouts.app')


@section('eventsOnMap')
    <div class="container about-event">

        <form method="post" action="{{route('events.update', ['event' => $event])}}">
            <div class="col-sm-5">
                <div id="map" style="height: 428px; width: 100%;"></div>
            </div>
            <div class="col-sm-7">
                <input type="hidden" name="_method" value="PUT"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group inline">
                    <label for="title">Название</label><br>
                    <input id='title' name="title" value="{{old('title') ?? $event->title}}"/>
                    @if($errors->has('title'))
                        <div>{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group inline">
                    <label for="type">Тип мероприятия</label><br>
                    <select id="type" name="type" value="{{old('title') ?? $event->title}}">
                        <option value="другое">другое</option>
                        <option value="спорт">спорт</option>
                        <option value="кино">кино</option>
                        <option value="театр">театр</option>
                        <option value="концерт">концерт</option>
                    </select>
                </div>
                <div class="form-group inline">
                    <label for="dateTime">Время проведения</label><br>
                    <input id="dateTime" name="dateTime" type="datetime-local" value="{{old('dateTime')}}">
                    @if($errors->has('dateTime'))
                        <div>{{ $errors->first('dateTime') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    {{--<input id='description' name="description" value="{{old('description') ?? $event->description}}"/>--}}
                    <textarea id='description' name="description"
                              value="{{old('description') ?? $event->description}}"></textarea>
                    @if($errors->has('description'))
                        <div>{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="address" class="col-md-4 control-label">Address</label>
                    <input id="address" type="text" class="form-control inline" name="address" required>
                    <button class="banner-btn inline" style="margin-bottom: 20px; margin-top: 0;">ПРАВИТЬ</button>

                </div>

                <div class="form-group">
                    <input id="latitude" type="hidden" class="form-control" name="latitude" required>
                </div>

                <div class="form-group">
                    <input id="longitude" type="hidden" class="form-control" name="longitude" required>
                </div>

                <div class="form-group">
                    <input id="house" type="hidden" class="form-control" name="house">
                </div>

                <div class="form-group">
                    <input id="street" type="hidden" class="form-control" name="street">
                </div>
                <div class="form-group">
                    <input id="city" type="hidden" class="form-control" name="city">
                </div>

                <div class="form-group">
                    <input id="country" type="hidden" class="form-control" name="country">
                </div>

            </div>
        </form>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgD5jrmV7TZa1AWIKaRTzrjluLSRVph5E&libraries=places&callback=initMap"></script>
@endsection

