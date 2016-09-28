@extends('layout')
@section('title', 'Former Players in the News')
@section('content')

    {{$news}}

    <br/>
    <a href="{{url('/news')}}">Back To All News...</a>

@endsection
