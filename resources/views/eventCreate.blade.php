@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event">
        <form method="post" action="{{route('events.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="title">Title:</label>
                <input id='title' name="title" value="{{old('title')}}"/>
                @if($errors->has('title'))
                    <div>{{ $errors->first('description') }}</div>
                @endif
            </div>
            <div>
                <label for="description">Description:</label>
                <input id='description' name="description" value="{{old('description')}}"/>
                @if($errors->has('description'))
                    <div>{{ $errors->first('description') }}</div>
                @endif
            </div>
            <button>Add</button>
        </form>
    </div>
@endsection
