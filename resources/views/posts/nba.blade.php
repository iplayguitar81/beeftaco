@extends('layout')
@section('title', 'NBA League News')
@section('content')

    {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection
