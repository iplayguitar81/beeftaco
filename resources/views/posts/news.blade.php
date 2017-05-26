@extends('layout')
@section('title', 'News')
@section('content')


<h1 class="article-title-show">news categories</h1>

{{$news}}
<br/>

<a href="{{url('news/general')}}">General News...</a>
<br/>
<a href="{{url('news/retro')}}">Retro News...</a>
<br/>
<a href="{{url('news/nba')}}">NBA News...</a>
<br/>
<a href="{{url('news/former-players')}}">Former Players News...</a>



<div class="container text-center">
    <h3>Latest News & Categories</h3>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Current Project</p>
        </div>
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>
        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>

    <hr>
</div>




@endsection

