@extends('layout')
@section('title', 'News')
@section('content')

{{$news}}
<h1 class="article-title-show">news categories</h1>
<br/>
<a href="{{url('news/general')}}">General News...</a>
<br/>
<a href="{{url('news/retro')}}">Retro News...</a>
<br/>
<a href="{{url('news/nba')}}">NBA News...</a>
<br/>
<a href="{{url('news/former-players')}}">Former Players News...</a>






@endsection

