@extends('layout')
@section('title', 'News')
@section('content')

{{$news}}

<br/>
<a href="{{url('news/general')}}">General News...</a>
<br/>
<a href="{{url('news/retro')}}">Retro News...</a>
<br/>
<a href="{{url('news/nba')}}">NBA News...</a>
<br/>
<a href="{{url('news/former-players')}}">Former Player News...</a>






@endsection

