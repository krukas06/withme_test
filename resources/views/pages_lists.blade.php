@extends('layouts.app')

@section('content')

    @foreach($pages as $page)
        <a href="{{route('page.show', ['id'=>$page->id])}}">Открыть страницу</a><br>
    @endforeach
@endsection
