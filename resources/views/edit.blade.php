@extends('layouts.app')


@section('eventsOnMap')
    <div class="container about-event">

        <form method="post" action="{{route('events.update', ['event' => $event])}}">
            <input type="hidden" name="_method" value="PUT"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="title">Title:</label>
                <input id='title' name="title" value="{{old('title') ?? $event->title}}"/>
                @if($errors->has('title'))
                    <div>{{ $errors->first('description') }}</div>
                @endif
            </div>
            <div>
                <label for="description">Description:</label>
                <input id='description' name="description" value="{{old('description') ?? $event->description}}"/>
                @if($errors->has('description'))
                    <div>{{ $errors->first('description') }}</div>
                @endif
            </div>
            <div>
                <label for="type">Event type:</label>
                <select id="type" name="type">
                    <option value="other">other</option>
                    <option value="sport">sport</option>
                    <option value="movie">movie</option>
                    <option value="theatre">theatre</option>
                    <option value="concert">concert</option>
                    <option value="flashMob">flash mob</option>
                </select>
            </div>
            <div>
                <label for="dateTime">Time spending:</label>
                <input id="dateTime" name="dateTime" type="datetime-local" value="{{old('dateTime')}}">
                @if($errors->has('dateTime'))
                    <div>{{ $errors->first('dateTime') }}</div>
                @endif
            </div>

            <div id="map" style="height: 200px; width: 200px;"></div>
            <div class="form-group">
                <label for="address" class="col-md-4 control-label">Address</label>
                <input   id="address" type="text" class="form-control" name="address" required>
            </div>

            <div class="form-group">
                <input   id="latitude" type="hidden" class="form-control" name="latitude" required>
            </div>

            <div class="form-group">
                <input   id="longitude" type="hidden" class="form-control" name="longitude"  required>
            </div>

            <div class="form-group">
                <input   id="house" type="hidden" class="form-control" name="house"  >
            </div>

            <div class="form-group">
                <input   id="street" type="hidden" class="form-control" name="street"  >
            </div>
            <div class="form-group">
                <input   id="city" type="hidden" class="form-control" name="city"  >
            </div>

            <div class="form-group">
                <input   id="country" type="hidden" class="form-control" name="country"  >
            </div>

            <button>edit</button>
        </form>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgD5jrmV7TZa1AWIKaRTzrjluLSRVph5E&libraries=places&callback=initMap"></script>
@endsection

