@extends('layouts.app')


@section('aboutEvent')
    <div class="container about-event">
        <select id="type" name="type">

            {{--@foreach($companies as $companie)--}}
                {{--<option value="{{$companie->type}}">{{$companie->type}}</option>--}}

            {{--@endforeach--}}
        </select>
    </div>
                        <a id="allData" href="">{{$types_event}}</a>

    <script>
        var jsonData = JSON.parse(document.getElementById('allData').innerHTML);


        var $select = $('#type');
        $(jsonData).each(function (index, o) {
            var $option = $("<option/>").attr("value", o.type).text(o.type);
            $select.append($option);
        });
    </script>
@endsection

