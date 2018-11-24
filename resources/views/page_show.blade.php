@extends('layouts.app')

@section('content')
    @foreach($photos as $brand=>$massiv)
        @foreach($massiv as $inner_key=>$value)
            <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$value}}" alt="">
        @endforeach

    @endforeach


    <form action="/epif_add" id="contactform" method="post">

        <h2>Добавление эпитафия</h2>
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="candles_id" value="1">
        <input type="hidden" name="pages_id" value="{{$pages->id}}">
        <input type="text" name="name">
        <input type="text" name="text">
        <select class="form-control" id="rajon" name="img_candle" placeholder="Район" type="rajon">
            @foreach($candles as $candle)
                <option value="{{$candle->img}}"><img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$candle->img}}" alt=""></option>
            @endforeach
        </select>
        <input type="submit" id="submit" value="add">

    </form>

    <br>
    <br>
    <br>

    <form action="/event_add" id="contactform" method="post">

        <h2>Добавление события</h2>
        {{csrf_field()}}
        {{--<input type="hidden" name="user_id" value="1">
        <input type="hidden" name="candles_id" value="1">--}}
        <input type="hidden" name="pages_id" value="{{$pages->id}}">
        <input type="hidden" name="category_id" value="1">
        <input type="text" name="name">
        <input type="text" name="text">

        <input type="submit" id="submit" value="add">

    </form>

    <h2>Эпитафии</h2>
    @foreach($epifs as $epif)
    {{--@if($pages->id == $epif->page_id)
     <h1>{{$epif->name}}</h1>
    @endif--}}
    @if($pages->id == $epif->pages_id)
        <p>{{$epif->name}}</p>
        <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$epif->img_candle}}" alt="">

    @endif
    @endforeach

    <br>
    <br>

    <h2>События</h2>
    @foreach($events as $event)
        {{--@if($pages->id == $epif->page_id)
         <h1>{{$epif->name}}</h1>
        @endif--}}
        @if($pages->id == $event->pages_id)
            <p>{{$event->name}}</p>

        @endif
    @endforeach

    <br>


    <a href="{{route('pagesEdit', ['id'=>$pages->id])}}"><button class="btn btn-success">Редактирование страницы</button></a>


{{--
    <script type="text/javascript">

        $( document ).ready(function() {
            $("#submit").click(
                function(){

                    $.ajax({
                        type: 'POST',
                        url: '/epif_add',
                        data: $('#contactform').serialize(),
                        success: function(result){
                            console.log(result);
                        }
                }
            );
        });
    </script>--}}
    {{--{{print_r($photos)}}--}}
@endsection