@extends('layout')
@section('title', 'News')
@section('content')


<h1 class="article-title-show">news categories</h1>

{{--{{$news}}--}}
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

        @foreach($news as $item)


            @php
                $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                $game_date = $game_date->format('l F dS Y g:i a');
            @endphp

            <div class="col-sm-3">
                <h1>Team News</h1>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <h4>{{$item->title}}<br/>{{$item->date}}</h4>
                <p>{{$item->body}}</p>

            </div>
        @endforeach

        @foreach($retronews as $item)


            @php
                $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                $game_date = $game_date->format('l F dS Y g:i a');
            @endphp

        <div class="col-sm-3">
            <h1>Retro News</h1>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
           <h4>{{$item->title}}<br/>{{$item->date}}</h4>
            <p>{{$item->body}}</p>

        </div>
        @endforeach


            @foreach($former_players as $item)


                @php
                    $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                    $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                    $game_date = $game_date->format('l F dS Y g:i a');
                @endphp

                <div class="col-sm-3">
                    <h1>Past Blazers</h1>
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <h4>{{$item->title}}<br/>{{$item->date}}</h4>
                    <p>{{$item->body}}</p>

                </div>
            @endforeach



            @foreach($nbanews as $item)


                @php
                    $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                    $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                    $game_date = $game_date->format('l F dS Y g:i a');
                @endphp

                <div class="col-sm-3">
                    <h1>NBA News</h1>
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <h4>{{$item->title}}<br/>{{$item->date}}</h4>
                    <p>{{$item->body}}</p>

                </div>
            @endforeach





        <div class="col-sm-3">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>

    <hr>





    </div>

</div>


@endsection

