@extends('layouts.app')

@section('content')
    @foreach($photos as $brand=>$massiv)
        @foreach($massiv as $inner_key=>$value)
            <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$value}}" alt="">
        @endforeach

    @endforeach


    <form action="/epif_add" method="post">

        <h2>Добавление эпитафия</h2>
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="candles_id" value="1">
        <input type="hidden" name="pages_id" value="{{$pages->id}}">
        <input type="text" name="name">
        <input type="text" name="text">
        <input type="submit" value="add">

    </form>

    {{--{{$pages->epif->text}}--}}
    {{--{{print_r($photos)}}--}}
@endsection