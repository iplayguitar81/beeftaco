@extends('layout')
@section('title', 'Retro News')
@section('content')

    {{--@php--}}

    {{--//$news = serialize($news);--}}
    {{--@endphp--}}

    <h1 class="article-title-show">retro news</h1>


{{$news}}



    @foreach($news as $item)

        @if($item->user_id != null)
            <? $author = App\User::find($item->user_id)->name; ?>


        @endif

        @php
            $variable= strip_tags($item->body);
            $variable =substr($variable,0, 50);
        $game_date = new DateTime($item->created_at, new DateTimeZone('America/Los_Angeles'));
            $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
            $game_date = $game_date->format('M jS Y');
        @endphp

    <div class="row">
        <div class="col-sm-4"><a href="#" class=""><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
            <span>{{$item->mainImg_caption}}</span>
        </div>
        <div class="col-sm-8">


            <h3 class="title">{{ $item->title}}</h3>
            <p class="text-muted">{{$item->subHead}}</p>
            <p class="text-muted">Written by <a href="#">{{$author}}</a> on {{$game_date}} </p>
            <p>{{$variable}}</p>



        </div>
    </div>
    <hr/>
@endforeach


    <br/>


    <a href="{{url('/news')}}">Back To All News...</a>

@endsection