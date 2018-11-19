@extends('layouts.app')

@section('content')
    @foreach($photos as $brand=>$massiv)
        @foreach($massiv as $inner_key=>$value)
            <img src="{{asset('images')}}/{{$value}}" alt="">
        @endforeach

    @endforeach

    {{--{{print_r($photos)}}--}}
@endsection