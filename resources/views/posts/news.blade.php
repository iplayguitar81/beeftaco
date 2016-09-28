@extends('layout')
@section('title', 'News')
@section('content')

{{$news}}

<a href="{{url('news/general')}}">General News...<a/>


@endsection

