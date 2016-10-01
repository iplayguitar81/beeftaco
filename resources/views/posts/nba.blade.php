@extends('layout')
@section('title', 'NBA League News')
@section('content')

    <h1 class="article-title-show">nba news</h1>
    {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection
