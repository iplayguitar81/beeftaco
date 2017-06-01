@extends('layout')
@section('title', 'News')
@section('content')


<h1 class="article-title-show">latest news categories</h1>

{{--{{$news}}--}}

{{--<a href="{{url('news/general')}}">General News...</a>--}}
{{--<br/>--}}
{{--<a href="{{url('news/retro')}}">Retro News...</a>--}}
{{--<br/>--}}
{{--<a href="{{url('news/nba')}}">NBA News...</a>--}}
{{--<br/>--}}
{{--<a href="{{url('news/former-players')}}">Former Players News...</a>--}}



<div class="container text-center">

    <div class="row">

        @foreach($news as $item)


            @php
                $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                $game_date = $game_date->format('l F dS Y g:i a');
            @endphp

            <div class="col-sm-3">
                <h1 class="secondary-posts-title"><a class="" href="{{url('news/general')}}">Team News</a></h1>
                {{--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">--}}

                <img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive" style="width:100%" alt="Team News Image">
                <h4>{{$item->title}}<br/>{{$item->date}}</h4>
                @php
                    $variable= strip_tags($item->body);
                    $variable =substr($variable,0, 50);
                @endphp
                <p>{!! $variable !!}...</p>
                <a class="btn btn-danger btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>
                <br/>
                <br/>

                <a class="btn btn-outline-secondary btn-md active" href="{{url('news/general')}}">More Team News...</a>
                <br/>
                <br/>

            </div>
        @endforeach

        @foreach($retronews as $item)


            @php
                $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                $game_date = $game_date->format('l F dS Y g:i a');
            @endphp

        <div class="col-sm-3">
            <h1 class="secondary-posts-title"><a class="" href="{{url('news/retro')}}">Retro News</a></h1>
            <img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive" style="width:100%" alt="Retro News Image">
           <h4>{{$item->title}}<br/>{{$item->date}}</h4>
            @php
                $variable= strip_tags($item->body);
                $variable =substr($variable,0, 50);
            @endphp
            <p>{!! $variable !!}...</p>
            <a class="btn btn-danger btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>
            <br/>
            <br/>

            <a class="btn btn-outline-secondary btn-md active" href="{{url('news/retro')}}">More Retro News...</a>
        <br/>
        <br/>

        </div>
        @endforeach


            @foreach($former_players as $item)


                @php
                    $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                    $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                    $game_date = $game_date->format('l F dS Y g:i a');
                @endphp

                <div class="col-sm-3">
                    <h1 class="secondary-posts-title"> <a class="" href="{{url('news/former-players')}}">Past Blazers</a></h1>
                    <img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive" style="width:100%" alt="Past Blazers News Image">
                    <h4>{{$item->title}}<br/>{{$item->date}}</h4>
                    @php
                        $variable= strip_tags($item->body);
                        $variable =substr($variable,0, 50);
                    @endphp
                    <p>{!! $variable !!}...</p>
                    <a class="btn btn-danger btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>
                    <br/>
                    <br/>

                    <a class="btn btn-outline-secondary btn-md active" href="{{url('news/former-players')}}">More Alum News...</a>
                    <br/>
                    <br/>

                </div>
            @endforeach



            @foreach($nbanews as $item)


                @php
                    $game_date = new DateTime($item->date, new DateTimeZone('America/Los_Angeles'));
                    $game_date = date_sub($game_date, date_interval_create_from_date_string('3 hour'));
                    $game_date = $game_date->format('l F dS Y g:i a');
                @endphp

                <div class="col-sm-3">
                    <h1 class="Ripper"><a class="" href="{{url('news/nba')}}">League News</a></h1>
                    <img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive" style="width:100%" alt="NBA News Image">
                    <h4><a class="secondary-posts-title" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{$item->title}}</a><br/>{{$item->date}}</h4>

                    @php
                        $variable= strip_tags($item->body);
                        $variable =substr($variable,0, 50);
                    @endphp
                    <p>{!! $variable !!}...</p>
                    <a class="btn btn-danger btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>
                    <br/>
                    <br/>

                    <a class="btn btn-secondary btn-md active" href="{{url('news/nba')}}">More League News...</a>
                    <br/>
                    <br/>
                </div>
            @endforeach



    <hr>



    </div>

</div>


@endsection

