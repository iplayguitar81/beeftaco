@extends('layout')
@section('title', 'Retro News')
@section('content')

    @php

    $news = serialize($news);
    @endphp

    {!! $news !!}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection