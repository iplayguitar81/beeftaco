@extends('layout')
@section('title', 'News')
@section('content')

{{$news}}

<br/>
<a href="{{url('news/general')}}">General News...</a>


@endsection

