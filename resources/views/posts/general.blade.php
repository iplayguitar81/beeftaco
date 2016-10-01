@extends('layout')
@section('title', 'General News')
@section('content')

    <h1 class="article-title-show">blazers news</h1>

    {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection
