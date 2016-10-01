@extends('layout')
@section('title', 'Former Players in the News')
@section('content')

    <h1 class="article-title-show">past blazers news</h1>
    {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection
