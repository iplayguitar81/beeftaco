@extends('layout')
@section('title', 'Retro News')
@section('content')

    {{--@php--}}

    {{--//$news = serialize($news);--}}
    {{--@endphp--}}

    <h1 class="article-title-show">retro news</h1>

     {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection