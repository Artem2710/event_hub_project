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
            <button>edit</button>
        </form>
    </div>

@endsection

