@extends('layouts.app')


@section('aboutEvent')
    <style>
        .navbar {
            background:rgba(0, 0, 0, 0.5);
            /*background: lightgrey;*/
            padding-bottom: 10px;
        }
    </style>
    <div class="container about-event">
        <form method="post" action="{{route('events.store')}}">
            <div class="col-sm-5">
                <div id="map" style="height: 400px; width: 400px;"></div>
            </div>
            <div class="col-sm-7">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Title</label><br>
                    <input id='title' name="title" value="{{old('title')}}"/>
                    @if($errors->has('title'))
                        <div>{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea  id='description' name="description" value="{{old('description')}}"></textarea>
                    @if($errors->has('description'))
                        <div>{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="type">Event type</label><br>
                    <select id="type" name="type">
                        <option value="other">other</option>
                        <option value="sport">sport</option>
                        <option value="movie">movie</option>
                        <option value="theatre">theatre</option>
                        <option value="concert">concert</option>
                        <option value="flashMob">flash mob</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dateTime">Time spending</label><br>
                    <input id="dateTime" name="dateTime" type="datetime-local">
                    @if($errors->has('dateTime'))
                        <div>{{ $errors->first('dateTime') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="address" class="col-md-4 control-label">Address</label><br>
                    <input id="address" type="text" class="form-control" name="address" required>
                    @if($errors->has('address'))
                        <div>{{ $errors->first('address') }}</div>
                    @endif
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


                <button>Add</button>
            </div>
        </form>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgD5jrmV7TZa1AWIKaRTzrjluLSRVph5E&libraries=places&callback=initMap"></script>

@endsection
