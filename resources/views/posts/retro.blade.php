@extends('layout')
@section('title', 'Retro News')
@section('content')

    {!! $news !!}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection