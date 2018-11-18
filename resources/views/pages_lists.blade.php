@extends('layouts.app')

@section('content')
   @foreach($pages as $page)

     <img src="{{$page->img}}" alt="">
   @endforeach
@endsection